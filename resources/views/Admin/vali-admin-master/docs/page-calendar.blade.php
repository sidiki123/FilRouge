@include('Admin/vali-admin-master/docs/inc.header')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-calendar"></i> Calendar</h1>
          <p>Full Calander page for managing events</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Calendar</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile row">
            <div class="col-md-3">
              <div id="external-events">
                <h4 class="mb-4">Draggable Events</h4>
                <div class="fc-event">My Event 1</div>
                <div class="fc-event">My Event 2</div>
                <div class="fc-event">My Event 3</div>
                <div class="fc-event">My Event 4</div>
                <div class="fc-event">My Event 5</div>
                <p class="animated-checkbox mt-20">
                  <label>
                    <input id="drop-remove" type="checkbox"><span class="label-text">Remove after drop</span>
                  </label>
                </p>
              </div>
            </div>
            <div class="col-md-9">
              <div id="calendar"></div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    @include('Admin/vali-admin-master/docs/inc.script')
    <!-- Page specific javascripts-->
    <!-- <script type="text/javascript" src="js/plugins/moment.min.js"></script> -->
    <script src="{{asset('admin_assets/js/plugins/moment.min.js')}}"></script>
    <!-- <script type="text/javascript" src="js/plugins/jquery-ui.custom.min.js"></script> -->
    <script src="{{asset('admin_assets/js/plugins/jquery-ui.custom.min.js')}}"></script>
    <!-- <script type="text/javascript" src="js/plugins/fullcalendar.min.js"></script> -->
    <script src="{{asset('admin_assets/js/plugins/fullcalendar.min.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function() {
      
      	$('#external-events .fc-event').each(function() {
      
      		// store data so the calendar knows to render an event upon drop
      		$(this).data('event', {
      			title: $.trim($(this).text()), // use the element's text as the event title
      			stick: true // maintain when user navigates (see docs on the renderEvent method)
      		});
      
      		// make the event draggable using jQuery UI
      		$(this).draggable({
      			zIndex: 999,
      			revert: true,      // will cause the event to go back to its
      			revertDuration: 0  //  original position after the drag
      		});
      
      	});
      
      	$('#calendar').fullCalendar({
      		header: {
      			left: 'prev,next today',
      			center: 'title',
      			right: 'month,agendaWeek,agendaDay'
      		},
      		editable: true,
      		droppable: true, // this allows things to be dropped onto the calendar
      		drop: function() {
      			// is the "remove after drop" checkbox checked?
      			if ($('#drop-remove').is(':checked')) {
      				// if so, remove the element from the "Draggable Events" list
      				$(this).remove();
      			}
      		}
      	});
      
      
      });
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>