@include('Admin/vali-admin-master/docs/inc.header')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Titre</th>
                      <th>description</th>
                      <th>categorie</th>
                      <th>lieu</th>
                      <th>photo</th>
                      <th>prix</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($events as $event)
                    <tr>
                      <td>{{$event->id}}</td>
                      <td>{{$event->titre}}</td>
                      <td>{{$event->description}}</td>
                      <td>{{$event->categ->nom}}</td>
                      <td>{{$event->lieu}}</td>
                      <td><img src="{{asset('storage/' . $event->photo)}}" class="img-responsive" style="width:10vh" ></td>
                      <td>{{$event->prix}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    @include('Admin/vali-admin-master/docs/inc.script')
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <!-- <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script> -->
    <script src="{{asset('admin_assets/js/plugins/jquery.dataTables.min.js')}}"></script>
    <!-- <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script> -->
    <script src="{{asset('admin_assets/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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