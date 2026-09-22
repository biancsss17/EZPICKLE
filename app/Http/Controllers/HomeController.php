<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Throwable;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function generate(Request $request)
    {
        return 'Generated successfully';
    }

    public function reserve(Request $request)
    {
        $validated = $request->validate([
            'court' => ['required', 'string', 'max:100'],
            'booking_date' => ['required', 'date_format:Y-m-d'],
            'start_time' => ['required', 'date_format:H:i'],
            'duration_hours' => ['required', 'integer', 'min:1', 'max:4'],
            'amount' => ['required', 'integer', 'min:1'],
            'customer_name' => ['required', 'string', 'max:100'],
            'customer_phone' => ['required', 'string', 'max:30'],
            'customer_email' => ['nullable', 'email', 'max:255'],
            'gcash_reference' => ['nullable', 'string', 'max:100'],
        ]);

        $start = Carbon::createFromFormat('H:i', $validated['start_time']);
        $durationHours = (int) $validated['duration_hours'];
        $end = $start->copy()->addHours($durationHours);
        $rate = $start->hour < 16 ? 200 : 250;

        $record = [
            ...$validated,
            'start_time' => $start->format('H:i:s'),
            'end_time' => $end->format('H:i:s'),
            'amount' => $rate * $durationHours,
            'status' => 'pending',
        ];

        try {
            $conflict = Reservation::query()
                ->where('court', $validated['court'])
                ->whereDate('booking_date', $validated['booking_date'])
                ->whereNotIn('status', ['cancelled', 'rejected'])
                ->where('start_time', '<', $end->format('H:i:s'))
                ->where('end_time', '>', $start->format('H:i:s'))
                ->exists();

            if ($conflict) {
                return back()->withInput()->withErrors(['booking' => 'That court is already reserved for part of this time. Please choose another slot.']);
            }

            $reservationId = Reservation::create($record)->id;
        } catch (Throwable $exception) {
            $fallback = $this->fallbackReservations();
            $conflict = collect($fallback)->contains(fn ($item) => $item['court'] === $record['court']
                && $item['booking_date'] === $record['booking_date']
                && !in_array($item['status'], ['cancelled', 'rejected'], true)
                && $item['start_time'] < $record['end_time']
                && $item['end_time'] > $record['start_time']);

            if ($conflict) {
                return back()->withInput()->withErrors(['booking' => 'That court is already reserved for part of this time. Please choose another slot.']);
            }

            $reservationId = (int) collect($fallback)->max('id') + 1;
            $record['id'] = $reservationId;
            $record['created_at'] = now()->toIso8601String();
            $record['updated_at'] = now()->toIso8601String();
            $fallback[] = $record;
            Storage::disk('local')->put('reservations.json', json_encode($fallback, JSON_PRETTY_PRINT));
        }

        return redirect()->route('home', ['reservation' => $reservationId])->with('booking_success', "Reservation #{$reservationId} received. Please send your GCash payment receipt so we can confirm it.");
    }

    public function availability(Request $request)
    {
        $validated = $request->validate([
            'date' => ['required', 'date_format:Y-m-d'],
            'court' => ['required', 'string', 'max:100'],
        ]);

        try {
            $reservations = Reservation::query()
                ->where('court', $validated['court'])
                ->whereDate('booking_date', $validated['date'])
                ->whereNotIn('status', ['cancelled', 'rejected'])
                ->get(['start_time', 'end_time', 'status', 'updated_at']);
        } catch (Throwable $exception) {
            $reservations = collect($this->fallbackReservations())
                ->filter(fn ($item) => $item['court'] === $validated['court']
                    && $item['booking_date'] === $validated['date']
                    && !in_array($item['status'], ['cancelled', 'rejected'], true))
                ->map(fn ($item) => [
                    'start_time' => $item['start_time'],
                    'end_time' => $item['end_time'],
                    'status' => $item['status'],
                    'updated_at' => $item['updated_at'] ?? null,
                ])->values();
        }

        return response()->json([
            'date' => $validated['date'],
            'court' => $validated['court'],
            'reservations' => $reservations,
            'updated_at' => now()->toIso8601String(),
        ]);
    }

    private function fallbackReservations(): array
    {
        if (!Storage::disk('local')->exists('reservations.json')) {
            return [];
        }

        return json_decode(Storage::disk('local')->get('reservations.json'), true) ?: [];
    }
}
