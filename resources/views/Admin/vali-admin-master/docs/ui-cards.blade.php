@include('Admin/vali-admin-master/docs/inc.header')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-laptop"></i> Cards</h1>
          <p>Material design inspired cards</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">UI</li>
          <li class="breadcrumb-item"><a href="#">Cards</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Card Title</h3>
            <div class="tile-body">Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.</div>
            <div class="tile-footer"><a class="btn btn-primary" href="#">Link</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">All Items</h3>
              <p><a class="btn btn-primary icon-btn" href=""><i class="fa fa-plus"></i>Add Item	</a></p>
            </div>
            <div class="tile-body">
              <b>Card with action button </b><br>
              Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.
              
              
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">All Items</h3>
              <div class="btn-group"><a class="btn btn-primary" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-primary" href="#"><i class="fa fa-lg fa-edit"></i></a><a class="btn btn-primary" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
            </div>
            <div class="tile-body">
              <b>Card with button group </b><br>
              Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.
              
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <div class="overlay">
              <div class="m-loader mr-4">
                <svg class="m-circular" viewBox="25 25 50 50">
                	<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
                </svg>
              </div>
              <h3 class="l-text">Loading</h3>
            </div>
            <div class="tile-title-w-btn">
              <h3 class="title">All Items</h3>
              <p><a class="btn btn-primary icon-btn" href=""><i class="fa fa-plus"></i>Add Item	</a></p>
            </div>
            <div class="tile-body">
              <b>Card with action button </b><br>
              Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    @include('Admin/vali-admin-master/docs/inc.script')
    <!-- Page specific javascripts-->
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