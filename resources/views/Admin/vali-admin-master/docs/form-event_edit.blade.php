@include('Admin/vali-admin-master/docs/inc.header')
    <main class="app-content">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Modifier un evenement</h3>
            <div class="tile-body">
            <form  method="POST" action="{{route('action_event.update', $event)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                  <label class="control-label col-md-3">Titre</label>
                  <div class="col-md-8">
                  <input class="form-control col-md-8" name="titre" type="text" value="{{$event->titre}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Sous-titre</label>
                  <div class="col-md-8">
                    <input class="form-control" name="sous_titre" type="text" value="{{$event->sous_titre}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Description</label>
                  <div class="col-md-8">
                    <textarea class="form-control" name="description" rows="4" >{{$event->description}}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Categorie</label>
                    <div class="col-md-8">
                    <select class="form-control" id="exampleSelect1" name="id_categorie">
                    @foreach($categories as $categorie)
                    <option value="{{$categorie->id}}"  >{{$categorie->nom}}</option>
                    @endforeach
                    </select>
                   
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Image</label>
                  <div class="col-md-8">
                    <input class="form-control" name="photo" type="file">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Date de debut</label>
                      <div class="col-md-8">
                          <input class="form-control" name="date_debut" id="demoDate" type="date" value="{{$event->date_debut}}">
                      </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Date de fin</label>
                      <div class="col-md-8">
                          <input class="form-control" name="date_fin" id="demoDate" type="date" value="{{$event->date_fin}}">
                      </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Heure</label>
                      <div class="col-md-8">
                          <input class="form-control" name="heure" id="demoDate" type="time" value="{{$event->heure}}">
                      </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Lieu</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-10" name="lieu" type="text" value="{{$event->lieu}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Ville</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-10" name="ville" type="text" value="{{$event->ville}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Prix</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" name="prix" type="number" value="{{$event->prix}}">
                    </div>
                </div>
                <div class="tile-footer">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-3">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Modifier</button>
                        &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Annuler</a>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
            
          </div>
        </div>
        
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    @include('Admin/vali-admin-master/docs/inc.script')
    <script src="{{asset('admin_assets/js/plugins/bootstrap-datepicker.min.js')}}"></script>
    <!-- <script type="text/javascript" src="js/plugins/select2.min.js"></script> -->
    <script src="{{asset('admin_assets/js/plugins/select2.min.js')}}"></script>
    <!-- <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script> -->
    <script src="{{asset('admin_assets/js/plugins/bootstrap-datepicker.min.js')}}"></script>
    <!-- <script type="text/javascript" src="js/plugins/dropzone.js"></script> -->
    <script src="{{asset('admin_assets/js/plugins/dropzone.js')}}"></script>
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
      <script type="text/javascript">
        $('#sl').on('click', function(){
          $('#tl').loadingBtn();
          $('#tb').loadingBtn({ text : "Signing In"});
        });
        
        $('#el').on('click', function(){
          $('#tl').loadingBtnComplete();
          $('#tb').loadingBtnComplete({ html : "Sign In"});
        });
        
        $('#demoDate').datepicker({
          format: "dd/mm/yyyy",
          autoclose: true,
          todayHighlight: true
        });
        
        $('#demoSelect').select2();
      </script>
  </body>
</html>