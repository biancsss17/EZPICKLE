document.addEventListener('DOMContentLoaded', () => {
    const booking = document.querySelector('#book');
    if (!booking) return;

    const courtButtons = [...document.querySelectorAll('#court-selector-group > button')];
    const slotButtons = [...booking.querySelectorAll('button')].filter((button) => {
        const text = button.textContent.trim();
        return /\d{1,2}:\d{2} (AM|PM)/.test(text);
    });
    const monthLabel = document.querySelector('#calendar-month');
    const calendarDays = document.querySelector('#calendar-days');
    const selectedDateLabel = document.querySelector('#selected-date-label');
    const totalLabel = booking.querySelector('.text-2xl.font-bold');
    const continueButton = document.querySelector('#continue-booking');

    let selectedCourt = 'Court Alpha';
    let selectedPrice = 250;
    let selectedSlot = '5:00 PM – 6:00 PM';
    let selectedDate = new Date(2026, 8, 22);
    let calendarMonth = new Date(2026, 8, 1);

    const money = (value) => `₱${value}`;

    function formatDate(date) {
        return date.toLocaleDateString('en-US', {
            weekday: 'long',
            month: 'long',
            day: 'numeric',
            year: 'numeric'
        });
    }

    function syncSelectedDateLabel() {
        if (selectedDateLabel) {
            selectedDateLabel.innerHTML = `<span class="text-slate-400">←</span> ${formatDate(selectedDate)}`;
        }
    }

    function updateSummary() {
        if (totalLabel) {
            totalLabel.innerHTML = `${money(selectedPrice)} <span class="text-xs text-slate-400 font-normal">inc. lights</span>`;
        }
    }

    function selectCourt(button) {
        courtButtons.forEach((item) => {
            item.classList.remove('bg-gradient-to-r', 'from-pink-600', 'via-rose-500', 'to-emerald-500', 'text-white', 'shadow-lg', 'shadow-pink-500/20');
            item.classList.add('bg-slate-50/80', 'hover:bg-slate-100/80', 'border', 'border-slate-100');
            const marker = item.querySelector('span:last-child');
            if (marker) marker.textContent = item === button ? '✓' : item.querySelector('span:last-child').textContent.includes('₱') ? item.querySelector('span:last-child').textContent : '';
        });

        button.classList.remove('bg-slate-50/80', 'hover:bg-slate-100/80', 'border', 'border-slate-100');
        button.classList.add('bg-gradient-to-r', 'from-pink-600', 'via-rose-500', 'to-emerald-500', 'text-white', 'shadow-lg', 'shadow-pink-500/20');
        const name = button.querySelector('.font-bold')?.textContent.trim() || 'Court Alpha';
        const priceText = button.textContent.match(/₱(\d+)/);
        selectedCourt = name;
        selectedPrice = priceText ? Number(priceText[1]) : 250;
        updateSummary();
    }

    courtButtons.forEach((button) => button.addEventListener('click', () => selectCourt(button)));

    function selectSlot(button) {
        if (button.disabled || button.textContent.includes('Full')) return;
        slotButtons.forEach((item) => {
            item.classList.remove('bg-gradient-to-r', 'from-pink-600', 'to-rose-500', 'text-white', 'shadow-md', 'shadow-pink-500/20');
            if (!item.textContent.includes('Full')) item.classList.add('border', 'border-emerald-200', 'bg-emerald-50/50');
            const badge = item.querySelector('span');
            if (badge && badge.textContent.trim() === 'Selected') {
                badge.textContent = 'Open';
                badge.className = 'inline-block mt-1 text-[11px] font-semibold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full';
            }
        });
        button.classList.remove('border', 'border-emerald-200', 'bg-emerald-50/50', 'hover:bg-emerald-100/70');
        button.classList.add('bg-gradient-to-r', 'from-pink-600', 'to-rose-500', 'text-white', 'shadow-md', 'shadow-pink-500/20');
        const badge = button.querySelector('span');
        if (badge) {
            badge.textContent = 'Selected';
            badge.className = 'inline-block mt-1 text-[11px] font-semibold text-white bg-white/25 px-2 py-0.5 rounded-full';
        }
        selectedSlot = button.querySelector('div')?.textContent.trim() || selectedSlot;
        selectedPrice = /PM/.test(selectedSlot) ? 250 : 200;
        updateSummary();
    }

    slotButtons.forEach((button) => button.addEventListener('click', () => selectSlot(button)));

    function renderCalendar() {
        if (!monthLabel || !calendarDays) return;
        monthLabel.textContent = calendarMonth.toLocaleDateString('en-US', { month: 'long', year: 'numeric' });
        syncSelectedDateLabel();
        calendarDays.innerHTML = '';
        const firstDay = (new Date(calendarMonth.getFullYear(), calendarMonth.getMonth(), 1).getDay() + 6) % 7;
        const daysInMonth = new Date(calendarMonth.getFullYear(), calendarMonth.getMonth() + 1, 0).getDate();
        for (let i = 0; i < firstDay; i += 1) calendarDays.appendChild(document.createElement('span'));
        for (let day = 1; day <= daysInMonth; day += 1) {
            const date = new Date(calendarMonth.getFullYear(), calendarMonth.getMonth(), day);
            const cell = document.createElement('button');
            cell.type = 'button';
            cell.textContent = day;
            cell.className = 'py-1 rounded-full hover:bg-pink-50 hover:text-pink-600 transition';
            if (date.toDateString() === selectedDate.toDateString()) {
                cell.className = 'py-1 flex items-center justify-center';
                cell.innerHTML = `<span class="w-8 h-8 rounded-full border-2 border-pink-500 text-pink-600 font-bold flex items-center justify-center bg-pink-50">${day}</span>`;
            }
            cell.addEventListener('click', () => {
                selectedDate = date;
                renderCalendar();
            });
            calendarDays.appendChild(cell);
        }
    }

    document.querySelector('#calendar-previous')?.addEventListener('click', () => {
        calendarMonth.setMonth(calendarMonth.getMonth() - 1);
        selectedDate = new Date(calendarMonth.getFullYear(), calendarMonth.getMonth(), Math.min(selectedDate.getDate(), new Date(calendarMonth.getFullYear(), calendarMonth.getMonth() + 1, 0).getDate()));
        renderCalendar();
    });
    document.querySelector('#calendar-next')?.addEventListener('click', () => {
        calendarMonth.setMonth(calendarMonth.getMonth() + 1);
        selectedDate = new Date(calendarMonth.getFullYear(), calendarMonth.getMonth(), Math.min(selectedDate.getDate(), new Date(calendarMonth.getFullYear(), calendarMonth.getMonth() + 1, 0).getDate()));
        renderCalendar();
    });

    continueButton?.addEventListener('click', () => {
        const message = document.createElement('div');
        message.className = 'fixed inset-x-4 bottom-6 z-[60] mx-auto max-w-xl rounded-2xl bg-slate-900 px-6 py-4 text-center text-sm font-semibold text-white shadow-2xl';
        message.textContent = `${selectedCourt} reserved for ${selectedSlot} on ${selectedDate.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' })}. Payment confirmation will follow.`;
        document.body.appendChild(message);
        setTimeout(() => message.remove(), 5000);
    });

    const faqAnswers = {
        'Can I book multiple hours in one session?': 'Yes. Select consecutive open time slots before continuing your booking.',
        'What happens if I need to cancel?': 'Please contact us as soon as possible. Cancellation and refund availability depends on how far in advance you notify us.',
        'Are court lights included?': 'Lights are included automatically for evening sessions from 4:00 PM to 11:00 PM.',
        'Do you provide paddles and balls?': 'Bring your own equipment or message us before booking to confirm current rental availability.',
        'Is the facility open on holidays?': 'Yes, the facility is open daily from 6:00 AM to 11:00 PM, including most holidays.'
    };

    document.querySelectorAll('#faq .space-y-4 > div').forEach((item) => {
        let answer = item.querySelector('.border-t');
        const question = item.querySelector('h3')?.textContent.trim();
        if (!answer && faqAnswers[question]) {
            answer = document.createElement('div');
            answer.className = 'mt-4 pl-8 text-sm text-slate-500 leading-relaxed border-t border-slate-100 pt-4 hidden';
            answer.textContent = faqAnswers[question];
            item.appendChild(answer);
        }
        if (!answer) return;
        item.addEventListener('click', () => {
            const isOpen = !answer.classList.contains('hidden');
            document.querySelectorAll('#faq .space-y-4 > div .border-t').forEach((element) => element.classList.add('hidden'));
            if (!isOpen) answer.classList.remove('hidden');
        });
        if (!question?.includes('confirm')) answer.classList.add('hidden');
    });

    renderCalendar();
    updateSummary();
});
