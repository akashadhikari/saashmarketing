<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.print.css
"/>
<script type="text/javascript">
 $(document).ready(function() {
  
 var base_url = '{{ url('/') }}';
 
 $('#calendar').fullCalendar({
 weekends: true,
 header: {
 left: 'prev,next today',
 center: 'title',
 right: 'month,agendaWeek,agendaDay'
 },
 editable: false,
 eventLimit: true, // allow "more" link when too many events
 events: {
 url: base_url + '/api',
 error: function() {
 alert("cannot load json");
 }
 }
 });
 });
</script>

