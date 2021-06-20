<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <!-- <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.7.2/main.css' rel='stylesheet' /> -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.7.2/main.min.js'></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/kalender.css') }}">
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events :  [
              {
                title : 'Lomba',
                start : '2021-06-01',
              },
          ],
        });
        calendar.render();
      });

    </script>
  </head>
  <body>
    <div id='calendar'></div>
  </body>
</html>