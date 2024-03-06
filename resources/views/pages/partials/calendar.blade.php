<div class="container mx-auto px-4 lg:px-8 my-8">
    <div x-data="calendar()" class="bg-white p-4 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-gray-900">Calendar</h2>
            <div class="text-gray-900 font-semibold" x-text="`${monthNames[month]} ${year}`"></div>
        </div>
        <div class="grid grid-cols-7 gap-3 text-sm font-semibold">
            <div class="text-center">Sun</div>
            <div class="text-center">Mon</div>
            <div class="text-center">Tue</div>
            <div class="text-center">Wed</div>
            <div class="text-center">Thu</div>
            <div class="text-center">Fri</div>
            <div class="text-center">Sat</div>
            <template x-for="day in getCalendarDays()" :key="day">
                <div class="py-1 text-center" :class="{
                    'bg-gray-900 text-white rounded-md': day.date === new Date().getDate() && !day.isAdjacentMonth && month === new Date().getMonth() && year === new Date().getFullYear(),
                    'text-neutral-400': day.isAdjacentMonth,
                    'text-gray-900': !day.isAdjacentMonth && !(day.date === new Date().getDate() && month === new Date().getMonth() && year === new Date().getFullYear())
                }" x-text="day.date"></div>
            </template>

        </div>
    </div>
</div>

<script>

    function calendar() {
        const today = new Date();
        const todayDate = today.getDate();
        const currentMonth = today.getMonth();
        const currentYear = today.getFullYear();

        return {
            month: currentMonth,
            year: currentYear,
            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            getDaysInMonth(month = this.month, year = this.year) {
                return new Date(year, month + 1, 0).getDate();
            },
            getStartDayOfMonth(month = this.month, year = this.year) {
                return new Date(year, month, 1).getDay();
            },
            getCalendarDays() {
                const startDay = this.getStartDayOfMonth();
                const daysInMonth = this.getDaysInMonth();
                const days = [];
                // Calculate days from the previous month
                const prevMonthDays = startDay === 0 ? 6 : startDay - 1;
                const daysInPrevMonth = this.getDaysInMonth(this.month - 1, this.year);
                for (let i = 0; i < prevMonthDays; i++) {
                    days.push({ date: daysInPrevMonth - prevMonthDays + i + 1, isAdjacentMonth: true });
                }
                // Days of the current month
                for (let i = 1; i <= daysInMonth; i++) {
                    days.push({
                        date: i,
                        isAdjacentMonth: false,
                        isToday: i === todayDate && this.month === currentMonth && this.year === currentYear
                    });
                }
                // Fill the rest of the calendar grid if necessary
                const totalCalendarDays = Math.ceil(days.length / 7) * 7;
                for (let i = days.length + 1; i <= totalCalendarDays; i++) {
                    days.push({ date: i - daysInMonth - prevMonthDays, isAdjacentMonth: true });
                }
                return days;
            },
        };
    }

</script>
