<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.7.2/main.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.7.2/main.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events: [
    {
      title: 'Event1',
      start: '2021-06-04'
    },
    {
      title: 'Event2',
      start: '2021-06-05'
    }
    // etc...
  ],
        });
        calendar.render();
      });

    </script>
  </head>
  <style>
    body{
        padding : 10rem 20rem;
    }
  </style>
  <body>
    <div id='calendar'></div>
  </body>
</html>