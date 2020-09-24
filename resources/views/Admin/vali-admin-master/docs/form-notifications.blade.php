@include('Admin/vali-admin-master/docs/inc.header')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-bell-o"></i> Form Notifications</h1>
          <p>Jquery Plugins to notify user status about some action.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Form Notifications</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Bootstrap Notify</h3>
              <p><a class="btn btn-primary icon-btn" href="http://bootstrap-notify.remabledesigns.com/" target="_blank"><i class="fa fa-file"></i>Docs</a></p>
            </div>
            <div class="tile-body">
              <p>This plugin can be used to notify user about status of some action which he has performed.</p>
              <h4>Demo</h4><a class="btn btn-info" id="demoNotify" href="#">Sample Notification</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">SweetAlert</h3>
              <p><a class="btn btn-primary icon-btn" href="http://t4t5.github.io/sweetalert/" target="_blank"><i class="fa fa-file"></i>Docs</a></p>
            </div>
            <div class="tile-body">
              <p>This plugin can be used as the replacement of native javascript alert, confirm and prompt functions.</p>
              <h4>Demo</h4><a class="btn btn-info" id="demoSwal" href="#">Sample Alert</a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    @include('Admin/vali-admin-master/docs/inc.script')
    <!-- Page specific javascripts-->
    <!-- <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script> -->
    <script src="{{asset('admin_assets/js/plugins/bootstrap-notify.min.js')}}"></script>
    <!-- <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script> -->
    <script src="{{asset('admin_assets/js/plugins/sweetalert.min.js')}}"></script>
    <script type="text/javascript">
      $('#demoNotify').click(function(){
      	$.notify({
      		title: "Update Complete : ",
      		message: "Something cool is just updated!",
      		icon: 'fa fa-check' 
      	},{
      		type: "info"
      	});
      });
      $('#demoSwal').click(function(){
      	swal({
      		title: "Are you sure?",
      		text: "You will not be able to recover this imaginary file!",
      		type: "warning",
      		showCancelButton: true,
      		confirmButtonText: "Yes, delete it!",
      		cancelButtonText: "No, cancel plx!",
      		closeOnConfirm: false,
      		closeOnCancel: false
      	}, function(isConfirm) {
      		if (isConfirm) {
      			swal("Deleted!", "Your imaginary file has been deleted.", "success");
      		} else {
      			swal("Cancelled", "Your imaginary file is safe :)", "error");
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