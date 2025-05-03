@extends('layouts.app')

@section('content')
    <h2>📅 Upcoming Events Calendar</h2>
    <div id="calendar"></div>

    <style>
        #calendar {
            max-width: 900px;
            margin: 40px auto;
        }
    </style>

    <!-- FullCalendar Assets -->
  <!-- FullCalendar CSS -->
<link href="https://unpkg.com/@fullcalendar/core@6.1.8/index.global.min.css" rel="stylesheet" />
<link href="https://unpkg.com/@fullcalendar/daygrid@6.1.8/index.global.min.css" rel="stylesheet" />

<!-- FullCalendar JS -->
<script src="https://unpkg.com/@fullcalendar/core@6.1.8/index.global.min.js"></script>
<script src="https://unpkg.com/@fullcalendar/daygrid@6.1.8/index.global.min.js"></script>
<script src="https://unpkg.com/@fullcalendar/interaction@6.1.8/index.global.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let calendarEl = document.getElementById('calendar');
            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                height: 650,
                events: '{{ route('calendar.events') }}',
                eventClick: function(info) {
                    if (info.event.url) {
                        window.open(info.event.url, '_blank');
                        info.jsEvent.preventDefault();
                    }
                }
            });
            calendar.render();
        });
    </script>
@endsection
