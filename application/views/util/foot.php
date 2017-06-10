</body>
<!-- Required JavaScript Libraries -->
<script src="<?php echo base_url(); ?>lib/superfish/hoverIntent.js"></script>
<script src="<?php echo base_url(); ?>lib/superfish/superfish.min.js"></script>
<script src="<?php echo base_url(); ?>lib/morphext/morphext.min.js"></script>
<script src="<?php echo base_url(); ?>lib/wow/wow.min.js"></script>
<script src="<?php echo base_url(); ?>lib/stickyjs/sticky.js"></script>
<script src="<?php echo base_url(); ?>lib/easing/easing.js"></script>
<script src="<?php echo base_url(); ?>plugins/bootbox.min.js"></script>
<!-- Template Specisifc Custom Javascript File -->
<script src="<?php echo base_url(); ?>js/custom.js"></script>
<script src="<?php echo base_url(); ?>js/funciones_auxiliares.js"></script>
<!--Fullcalendar-->
<script src='<?= base_url(); ?>plugins/fullcalendar-3.4.0/lib/moment.min.js'></script>
<script src='<?= base_url(); ?>plugins/fullcalendar-3.4.0/fullcalendar.js'></script>
<script src='<?= base_url(); ?>plugins/fullcalendar-3.4.0/locale/es.js'></script>
<!--Chat-->
<script src='<?= base_url(); ?>plugins/simple_chat/js.js'></script>

<script>
    /**
     *Inicializar fullcalendar
     * */
    $(document).ready(function () {

        //Mensajes

        //Fullcalendar
        $("#calendar").fullCalendar({
            timezone: 'local',
            height: '650',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            navLinks: true,
            editable: true,
            selectable: true,
            eventLimit: true,
            /*events: {
             url: 'php/get-events.php',
             error: function() {
             $('#script-warning').show();
             }
             },
             loading: function(bool) {
             $('#loading').toggle(bool);
             },
             eventRender: function(event, el) {
             // render the timezone offset below the event title
             if (event.start.hasZone()) {
             el.find('.fc-title').after(
             $('<div class="tzo"/>').text(event.start.format('Z'))
             );
             }
             },*/
            dayClick: function (date) {
                console.log('dayClick', date.format());
            }
        });
        setInterval('updateClock()', 1000);

    });

    function updateClock() {
        var currentTime = new Date();
        var currentHours = currentTime.getHours();
        var currentMinutes = currentTime.getMinutes();
        var currentSeconds = currentTime.getSeconds();

        // Pad the minutes and seconds with leading zeros, if required
//        currentMinutes = ( currentMinutes == 12 ) ? currentHours - 12 : currentHours;

        // Convert an hours component of "0" to "12"
//        currentHours = ( currentHours == 0 ) ? 12 : currentHours;

        // Compose the string for display
        var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds;

        $("#reloj").html(currentTimeString);

    }

</script>
</html>