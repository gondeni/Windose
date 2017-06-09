</div>
</body>
<!--JavaScript JQuery-->
<script src="<?php echo base_url(); ?>lib/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>lib/jquery/jquery-migrate.min.js"></script>
<!--Fullcalendar-->
<script src='<?= base_url(); ?>plugins/fullcalendar-3.4.0/lib/moment.min.js'></script>
<script src='<?= base_url(); ?>plugins/fullcalendar-3.4.0/fullcalendar.js'></script>
<script src='<?= base_url(); ?>plugins/fullcalendar-3.4.0/locale/es.js'></script>

<script>
    /**
     *Inicializar fullcalendar
     * */
    $(document).ready(function () {
        $("#calendar").fullCalendar({
            timezone: 'local',
            height:'650',
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
            dayClick: function(date) {
                console.log('dayClick', date.format());
            }
        });
    });

</script>
</html>