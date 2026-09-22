<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'court',
        'booking_date',
        'start_time',
        'end_time',
        'duration_hours',
        'amount',
        'customer_name',
        'customer_phone',
        'customer_email',
        'gcash_reference',
        'status',
    ];

    protected $casts = [
        'booking_date' => 'date',
        'amount' => 'integer',
        'duration_hours' => 'integer',
    ];
}
