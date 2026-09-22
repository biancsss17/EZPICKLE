document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-booking-notice]').forEach((notice) => {
        setTimeout(() => notice.remove(), 5000);
    });

    const booking = document.querySelector('#book');
    if (!booking) return;

    const courtButtons = [...document.querySelectorAll('#court-selector-group > button')];
    const monthLabel = document.querySelector('#calendar-month');
    const calendarDays = document.querySelector('#calendar-days');
    const selectedDateLabel = document.querySelector('#selected-date-label');
    const calendarPrevious = document.querySelector('#calendar-previous');
    const calendarNext = document.querySelector('#calendar-next');
    const rightPanel = document.querySelector('#available-slots-panel');
    const continueButton = document.querySelector('#continue-booking');
    const summaryTotal = booking.querySelector('.text-2xl.font-bold');
    const summaryDurationLabel = booking.querySelector('.text-xs.text-slate-400.font-medium');
    const minimumDate = new Date(2026, 8, 22);

    let selectedCourt = 'Court Alpha';
    let selectedPrice = 250;
    let selectedDate = null;
    let selectedSlot = null;
    let selectedStart = null;
    let duration = 1;
    let reservedIntervals = [];
    let availabilityRequest = 0;
    let calendarMonth = new Date(minimumDate.getFullYear(), minimumDate.getMonth(), 1);

    const daySlots = ['6:00 AM', '7:00 AM', '8:00 AM', '9:00 AM', '10:00 AM', '11:00 AM', '12:00 PM', '1:00 PM', '2:00 PM', '3:00 PM'];
    const eveningSlots = ['4:00 PM', '5:00 PM', '6:00 PM', '7:00 PM', '8:00 PM', '9:00 PM', '10:00 PM'];

    const formatDate = (date, includeYear = true) => date.toLocaleDateString('en-US', { weekday: 'long', month: 'long', day: 'numeric', ...(includeYear ? { year: 'numeric' } : {}) });
    const money = (value) => `₱${value.toLocaleString()}`;
    const isSameDay = (a, b) => a && b && a.toDateString() === b.toDateString();

    function showToast(message) {
        document.querySelector('[data-booking-toast]')?.remove();
        const toast = document.createElement('div');
        toast.dataset.bookingToast = 'true';
        toast.className = 'fixed inset-x-4 bottom-6 z-[60] mx-auto max-w-xl rounded-2xl bg-slate-900 px-6 py-4 text-center text-sm font-semibold text-white shadow-2xl';
        toast.textContent = message;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 5000);
    }

    function updateSummary() {
        const total = selectedPrice * duration;
        if (summaryDurationLabel) summaryDurationLabel.textContent = `Total for ${duration} Hour${duration === 1 ? '' : 's'}`;
        if (summaryTotal) summaryTotal.innerHTML = `${money(total)} <span class="text-xs text-slate-400 font-normal">inc. lights</span>`;
    }

    function selectCourt(button) {
        courtButtons.forEach((item) => {
            item.classList.remove('bg-gradient-to-r', 'from-pink-600', 'via-rose-500', 'to-emerald-500', 'text-white', 'shadow-lg', 'shadow-pink-500/20');
            item.classList.add('bg-slate-50/80', 'hover:bg-slate-100/80', 'border', 'border-slate-100');
            const marker = item.querySelector('span:last-child');
            if (marker && !marker.textContent.includes('₱')) marker.textContent = '';
        });
        button.classList.remove('bg-slate-50/80', 'hover:bg-slate-100/80', 'border', 'border-slate-100');
        button.classList.add('bg-gradient-to-r', 'from-pink-600', 'via-rose-500', 'to-emerald-500', 'text-white', 'shadow-lg', 'shadow-pink-500/20');
        selectedCourt = button.querySelector('.font-bold')?.textContent.trim() || selectedCourt;
        selectedPrice = Number(button.textContent.match(/₱(\d+)/)?.[1] || 250);
        selectedSlot = null;
        selectedStart = null;
        updateSummary();
        if (selectedDate) renderSlots();
    }

    courtButtons.forEach((button) => button.addEventListener('click', () => selectCourt(button)));

    function updateDateLabel() {
        if (selectedDateLabel) selectedDateLabel.innerHTML = selectedDate ? `<span class="text-slate-400">←</span> ${formatDate(selectedDate)}` : '← Select a date to see slots';
    }

    function addDurationPanel() {
        rightPanel?.querySelector('[data-duration-panel]')?.remove();
        if (!selectedSlot || !rightPanel) return;
        const panel = document.createElement('div');
        panel.dataset.durationPanel = 'true';
        panel.className = 'mt-6 rounded-2xl border border-pink-100 bg-pink-50/50 p-5';
        panel.innerHTML = `<div class="flex items-center justify-between gap-4"><div><p class="text-xs font-bold uppercase tracking-wider text-pink-600">Duration & Cost</p><p data-booking-range class="mt-1 text-sm text-slate-500">${bookingRange()} • ${money(selectedPrice)}/hr</p></div><div class="flex items-center gap-3"><button type="button" data-duration-minus class="h-9 w-9 rounded-full bg-white text-lg font-bold text-slate-700 shadow-sm">−</button><span data-duration-value class="min-w-10 text-center font-bold text-slate-900">${duration} hr</span><button type="button" data-duration-plus class="h-9 w-9 rounded-full bg-white text-lg font-bold text-slate-700 shadow-sm">+</button></div></div><div class="mt-4 flex items-center justify-between text-sm"><span class="text-slate-500">Total</span><strong data-duration-total class="text-xl text-slate-900">${money(selectedPrice * duration)}</strong></div>`;
        rightPanel.appendChild(panel);
        panel.querySelector('[data-duration-minus]').addEventListener('click', () => { duration = Math.max(1, duration - 1); refreshDuration(panel); });
        panel.querySelector('[data-duration-plus]').addEventListener('click', () => { if (!canUseDuration(duration + 1)) return showToast('The next slot is unavailable. Choose another time or keep this duration.'); duration = Math.min(4, duration + 1); refreshDuration(panel); });
        refreshSelectedSlots();
    }

    function refreshDuration(panel) {
        panel.querySelector('[data-duration-value]').textContent = `${duration} hr`;
        panel.querySelector('[data-duration-total]').textContent = money(selectedPrice * duration);
        panel.querySelector('[data-booking-range]').textContent = `${bookingRange()} • ${money(selectedPrice)}/hr`;
        refreshSelectedSlots();
        updateSummary();
    }

    function minutesToTime(minutes) {
        const hour = Math.floor(minutes / 60) % 24;
        const minute = minutes % 60;
        const meridiem = hour >= 12 ? 'PM' : 'AM';
        const displayHour = hour % 12 || 12;
        return `${displayHour}:${String(minute).padStart(2, '0')} ${meridiem}`;
    }

    function bookingRange() {
        if (!selectedStart) return selectedSlot || '';
        const start = clockMinutes(selectedStart);
        return `${selectedStart} – ${minutesToTime(start + duration * 60)}`;
    }

    function canUseDuration(hours) {
        if (!selectedStart) return false;
        const start = clockMinutes(selectedStart);
        const coveredSlots = [...booking.querySelectorAll('[data-slot-button]')]
            .filter((button) => start <= clockMinutes(button.dataset.start) && clockMinutes(button.dataset.start) < start + hours * 60);
        return coveredSlots.length === hours && coveredSlots.every((button) => !button.disabled);
    }

    function refreshSelectedSlots() {
        if (!selectedStart) return;
        const start = clockMinutes(selectedStart);
        const end = start + duration * 60;
        booking.querySelectorAll('[data-slot-button]').forEach((button) => {
            const slotStart = clockMinutes(button.dataset.start);
            const slotEnd = clockMinutes(button.dataset.end);
            const selected = slotStart >= start && slotEnd <= end;
            button.classList.toggle('bg-gradient-to-r', selected);
            button.classList.toggle('from-pink-600', selected);
            button.classList.toggle('to-rose-500', selected);
            button.classList.toggle('text-white', selected);
            button.classList.toggle('shadow-md', selected);
            button.classList.toggle('shadow-pink-500/20', selected);
            if (!selected && !button.disabled) button.classList.add('border', 'border-emerald-200', 'bg-emerald-50/50');
            const badge = button.querySelector('[data-slot-status]');
            if (badge && selected) { badge.textContent = 'Selected'; badge.className = 'inline-block mt-1 text-[11px] font-semibold text-white bg-white/25 px-2 py-0.5 rounded-full'; }
        });
    }

    function selectSlot(button) {
        if (button.disabled) return;
        booking.querySelectorAll('[data-slot-button]').forEach((item) => {
            item.classList.remove('bg-gradient-to-r', 'from-pink-600', 'to-rose-500', 'text-white', 'shadow-md', 'shadow-pink-500/20');
            item.classList.add('border', 'border-emerald-200', 'bg-emerald-50/50');
            const badge = item.querySelector('[data-slot-status]');
            if (badge) { badge.textContent = item.dataset.full === 'true' ? 'Full' : 'Open'; badge.className = item.dataset.full === 'true' ? 'inline-block mt-1 text-[11px] font-semibold text-slate-400 bg-slate-100 px-2 py-0.5 rounded-full' : 'inline-block mt-1 text-[11px] font-semibold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full'; }
        });
        button.classList.remove('border', 'border-emerald-200', 'bg-emerald-50/50');
        button.classList.add('bg-gradient-to-r', 'from-pink-600', 'to-rose-500', 'text-white', 'shadow-md', 'shadow-pink-500/20');
        const badge = button.querySelector('[data-slot-status]');
        if (badge) { badge.textContent = 'Selected'; badge.className = 'inline-block mt-1 text-[11px] font-semibold text-white bg-white/25 px-2 py-0.5 rounded-full'; }
        selectedSlot = button.dataset.slot;
        selectedStart = button.dataset.start;
        selectedPrice = selectedSlot.includes('PM') ? 250 : 200;
        duration = 1;
        addDurationPanel();
        refreshSelectedSlots();
        updateSummary();
    }

    function renderSlots() {
        if (!rightPanel) return;
        rightPanel.querySelector('#static-slots')?.remove();
        rightPanel.querySelector('#static-evening-slots')?.remove();
        rightPanel.querySelector('[data-empty-slots]')?.remove();
        rightPanel.querySelector('[data-slot-groups]')?.remove();
        rightPanel.querySelector('[data-duration-panel]')?.remove();
        if (!selectedDate) {
            const empty = document.createElement('div');
            empty.dataset.emptySlots = 'true';
            empty.className = 'flex flex-1 flex-col items-center justify-center py-16 text-center';
            empty.innerHTML = '<div class="mb-4 text-4xl">📅</div><p class="font-bold text-slate-900">Choose a date to see available slots</p><p class="mt-2 max-w-xs text-sm text-slate-500">Select a date on the calendar to view open booking times.</p>';
            rightPanel.insertBefore(empty, rightPanel.querySelector('#continue-booking')?.parentElement || null);
            if (continueButton) continueButton.parentElement.classList.add('hidden');
            return;
        }
        if (continueButton) continueButton.parentElement.classList.remove('hidden');
        const groups = document.createElement('div');
        groups.dataset.slotGroups = 'true';
        groups.innerHTML = '<div><h4 class="text-sm font-bold uppercase tracking-wider text-slate-500">Day Sessions (₱200/hr)</h4><div data-day-slots class="mt-4 grid grid-cols-2 gap-3 md:grid-cols-3"></div></div><div class="mt-8"><h4 class="text-sm font-bold uppercase tracking-wider text-pink-600">Evening Sessions (₱250/hr • Lights Included)</h4><div data-evening-slots class="mt-4 grid grid-cols-2 gap-3 md:grid-cols-3"></div></div>';
        rightPanel.insertBefore(groups, continueButton?.parentElement || null);
        const build = (container, slots, evening) => slots.forEach((time, index) => {
            const next = slots[index + 1] || (evening ? '11:00 PM' : '4:00 PM');
            const button = document.createElement('button');
            button.type = 'button'; button.dataset.slotButton = 'true'; button.dataset.slot = `${time} – ${next}`; button.dataset.start = time; button.dataset.end = next; button.dataset.full = 'false';
            button.className = 'rounded-2xl border border-emerald-200 bg-emerald-50/50 p-4 text-left transition hover:bg-emerald-100/70';
            button.innerHTML = `<strong class="block text-sm md:text-base">${time} – ${next}</strong><span data-slot-status class="inline-block mt-1 text-[11px] font-semibold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full">Open</span>`;
            button.addEventListener('click', () => selectSlot(button)); container.appendChild(button);
        });
        build(groups.querySelector('[data-day-slots]'), daySlots, false); build(groups.querySelector('[data-evening-slots]'), eveningSlots, true);
        loadAvailability();
    }

    function clockMinutes(value) {
        const [, rawHour, minute, meridiem] = value.match(/(\d{1,2}):(\d{2})\s(AM|PM)/) || [];
        if (!rawHour) return 0;
        let hour = Number(rawHour);
        if (meridiem === 'PM' && hour !== 12) hour += 12;
        if (meridiem === 'AM' && hour === 12) hour = 0;
        return hour * 60 + Number(minute);
    }

    function dateKey(date) {
        return `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}-${String(date.getDate()).padStart(2, '0')}`;
    }

    function applyAvailability() {
        booking.querySelectorAll('[data-slot-button]').forEach((button) => {
            const start = clockMinutes(button.dataset.start);
            const end = clockMinutes(button.dataset.end);
            const full = reservedIntervals.some((reservation) => start < reservation.end && end > reservation.start);
            button.dataset.full = String(full);
            button.disabled = full;
            button.classList.toggle('border-emerald-200', !full);
            button.classList.toggle('bg-emerald-50/50', !full);
            button.classList.toggle('hover:bg-emerald-100/70', !full);
            button.classList.toggle('border-slate-100', full);
            button.classList.toggle('bg-slate-50', full);
            button.classList.toggle('text-slate-400', full);
            const badge = button.querySelector('[data-slot-status]');
            if (badge && !button.classList.contains('bg-gradient-to-r')) {
                badge.textContent = full ? 'Reserved' : 'Open';
                badge.className = full ? 'inline-block mt-1 text-[11px] font-semibold text-slate-400 bg-slate-100 px-2 py-0.5 rounded-full' : 'inline-block mt-1 text-[11px] font-semibold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full';
            }
            if (full && selectedSlot === button.dataset.slot) {
                selectedSlot = null;
                rightPanel?.querySelector('[data-duration-panel]')?.remove();
                updateSummary();
            }
        });
    }

    async function loadAvailability() {
        if (!selectedDate) return;
        const requestId = ++availabilityRequest;
        try {
            const response = await fetch(`/availability?date=${encodeURIComponent(dateKey(selectedDate))}&court=${encodeURIComponent(selectedCourt)}`, { headers: { Accept: 'application/json' } });
            if (!response.ok) throw new Error('Availability request failed');
            const payload = await response.json();
            if (requestId !== availabilityRequest) return;
            reservedIntervals = (payload.reservations || []).map((reservation) => ({ start: Number(reservation.start_time.slice(0, 2)) * 60 + Number(reservation.start_time.slice(3, 5)), end: Number(reservation.end_time.slice(0, 2)) * 60 + Number(reservation.end_time.slice(3, 5)) }));
            applyAvailability();
        } catch (error) {
            console.warn('Live availability is temporarily unavailable.', error);
        }
    }

    function renderCalendar() {
        if (!monthLabel || !calendarDays) return;
        monthLabel.textContent = calendarMonth.toLocaleDateString('en-US', { month: 'long', year: 'numeric' });
        calendarDays.innerHTML = '';
        const firstDay = (new Date(calendarMonth.getFullYear(), calendarMonth.getMonth(), 1).getDay() + 6) % 7;
        const daysInMonth = new Date(calendarMonth.getFullYear(), calendarMonth.getMonth() + 1, 0).getDate();
        for (let i = 0; i < firstDay; i += 1) calendarDays.appendChild(document.createElement('span'));
        for (let day = 1; day <= daysInMonth; day += 1) {
            const date = new Date(calendarMonth.getFullYear(), calendarMonth.getMonth(), day);
            const disabled = date < minimumDate;
            const cell = document.createElement('button'); cell.type = 'button'; cell.textContent = day; cell.disabled = disabled;
            cell.className = disabled ? 'py-1 text-slate-300 cursor-not-allowed' : 'py-1 rounded-full hover:bg-pink-50 hover:text-pink-600 transition';
            if (isSameDay(date, selectedDate)) cell.className = 'py-1 flex items-center justify-center';
            if (isSameDay(date, selectedDate)) cell.innerHTML = `<span class="flex h-8 w-8 items-center justify-center rounded-full border-2 border-pink-500 bg-pink-50 font-bold text-pink-600">${day}</span>`;
            cell.addEventListener('click', () => { selectedDate = date; selectedSlot = null; selectedStart = null; reservedIntervals = []; updateDateLabel(); renderCalendar(); renderSlots(); }); calendarDays.appendChild(cell);
        }
    }

    calendarPrevious?.addEventListener('click', () => { const next = new Date(calendarMonth.getFullYear(), calendarMonth.getMonth() - 1, 1); if (next >= new Date(minimumDate.getFullYear(), minimumDate.getMonth(), 1)) { calendarMonth = next; renderCalendar(); } });
    calendarNext?.addEventListener('click', () => { calendarMonth = new Date(calendarMonth.getFullYear(), calendarMonth.getMonth() + 1, 1); renderCalendar(); });
    setInterval(loadAvailability, 30000);

    function to24Hour(value) {
        const [, rawHour, minute, meridiem] = value.match(/(\d{1,2}):(\d{2})\s(AM|PM)/) || [];
        if (!rawHour) return '';
        let hour = Number(rawHour);
        if (meridiem === 'PM' && hour !== 12) hour += 12;
        if (meridiem === 'AM' && hour === 12) hour = 0;
        return `${String(hour).padStart(2, '0')}:${minute}`;
    }

    continueButton?.addEventListener('click', () => {
        if (!selectedDate || !selectedSlot) return showToast('Please choose an available time slot first.');
        const modal = document.querySelector('#booking-modal');
        if (!modal) return;
        document.querySelector('#reservation-court').value = selectedCourt;
        document.querySelector('#reservation-date').value = `${selectedDate.getFullYear()}-${String(selectedDate.getMonth() + 1).padStart(2, '0')}-${String(selectedDate.getDate()).padStart(2, '0')}`;
        document.querySelector('#reservation-start-time').value = to24Hour(selectedStart || selectedSlot);
        document.querySelector('#reservation-duration').value = duration;
        document.querySelector('#reservation-amount').value = selectedPrice * duration;
        document.querySelector('#booking-modal-summary').textContent = `${selectedCourt} • ${bookingRange()} • ${duration} hour${duration === 1 ? '' : 's'} • ${money(selectedPrice * duration)} on ${formatDate(selectedDate, false)}`;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });

    document.querySelector('[data-close-booking-modal]')?.addEventListener('click', () => {
        const modal = document.querySelector('#booking-modal');
        modal?.classList.add('hidden');
        modal?.classList.remove('flex');
    });
    document.querySelector('#booking-modal')?.addEventListener('click', (event) => {
        if (event.target.id === 'booking-modal') event.currentTarget.classList.add('hidden');
    });

    const faqAnswers = { 'Can I book multiple hours in one session?': 'Yes. Select an open slot, then use the plus button to add up to four consecutive hours.', 'What happens if I need to cancel?': 'Contact us as soon as possible. Cancellation and refund availability depends on how far in advance you notify us.', 'Are court lights included?': 'Lights are included automatically for evening sessions from 4:00 PM to 11:00 PM.', 'Do you provide paddles and balls?': 'Bring your own equipment or message us before booking to confirm current rental availability.', 'Is the facility open on holidays?': 'Yes, the facility is open daily from 6:00 AM to 11:00 PM, including most holidays.' };
    document.querySelectorAll('#faq .space-y-4 > div').forEach((item) => { const question = item.querySelector('h3')?.textContent.trim(); let answer = item.querySelector('.border-t'); if (!answer && faqAnswers[question]) { answer = document.createElement('div'); answer.className = 'mt-4 hidden border-t border-slate-100 pt-4 pl-8 text-sm leading-relaxed text-slate-500'; answer.textContent = faqAnswers[question]; item.appendChild(answer); } if (!answer) return; item.addEventListener('click', () => { const open = !answer.classList.contains('hidden'); document.querySelectorAll('#faq .space-y-4 > div .border-t').forEach((other) => other.classList.add('hidden')); if (!open) answer.classList.remove('hidden'); }); });

    updateDateLabel(); renderCalendar(); renderSlots(); updateSummary();
});
