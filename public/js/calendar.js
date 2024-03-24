import { Calendar } from '@fullcalendar/core'
import dayGridPlugin from '@fullcalendar/daygrid'

const calendarEl = document.getElementById('calendar')
const calendar = new Calendar(calendarEl, {
    plugins: [ dayGridPlugin ],
    initialView: 'dayGridMonth',
    events: '/users/registration-dates'
});

calendar.render()
// document.addEventListener('DOMContentLoaded', function() {
//     var calendarEl = document.getElementById('calendar');
//     var calendar = new FullCalendar.Calendar(calendarEl, {
//         plugins: [ dayGridPlugin ],
//         initialView: 'dayGridMonth',
//         events: '/users/registration-dates'
//     });
//     calendar.render();
// });
