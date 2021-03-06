@include('Admin/vali-admin-master/docs/inc.header')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Form Samples</h1>
          <p>Sample forms</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="tile">
            <h3 class="tile-title">Enregistrer une categorie</h3>
            <div class="tile-body">
              <form method="POST" action="{{ route('store_categ') }}">
                @csrf
                <div class="form-group">
                  <label class="control-label">Nom</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nom" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

             
                <div class="tile-footer">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enregistrer</button>
                  &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </form>
            </div>
            
          </div>
        </div>
        <div class="clearix"></div>
        <div class="col-md-8">
            <div class="col-md-12">
                <div class="tile">
                  <h3 class="tile-title">Striped Table</h3>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Nom</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($categories as $categorie)
                      <tr>
                        <td>{{$categorie->id}}</td>
                        <td>{{$categorie->nom}}</td>
                        <td>
                            <button class="btn btn-primary" type=""><i class="fa fa-fw fa-lg fa-check-circle"></i>Modifier</button>
                            <button class="btn btn-primary" type=""><i class="fa fa-fw fa-lg fa-check-circle"></i>Suppimer</button>
                        </td>
                      </tr>
                      @endforeach
                     
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Enregistrer un evenement</h3>
            <div class="tile-body">
            <form  method="POST" action="{{route('store_event')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                  <label class="control-label col-md-3">Titre</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" name="titre" type="text">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Sous-titre</label>
                  <div class="col-md-8">
                    <input class="form-control" name="sous_titre" type="text">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Description</label>
                  <div class="col-md-8">
                    <textarea class="form-control" name="description" rows="4"></textarea>
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
                          <input class="form-control" name="date_debut" id="demoDate" type="date">
                      </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Date de fin</label>
                      <div class="col-md-8">
                          <input class="form-control" name="date_fin" id="demoDate" type="date">
                      </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Heure</label>
                      <div class="col-md-8">
                          <input class="form-control" name="heure" id="demoDate" type="time">
                      </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Lieu</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-10" name="lieu" type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Ville</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-10" name="ville" type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Prix</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" name="prix" type="number">
                    </div>
                </div>
                <div class="tile-footer">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-3">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>
                        &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
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

{{-- <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">Vertical Form</h3>
      <div class="tile-body">
        <form method="POST" action="{{ route('register_agence_store') }}">
          @csrf
          <div class="form-group">
            <label class="control-label">Nom</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label class="control-label">Adresse mail</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
            @enderror
          </div>
          <div class="form-group">
            <label class="control-label">Mot de passe</label>
            <input class="form-control" rows="4" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="form-group">
            <label class="control-label">Confirmer le mot de passe</label>
            <input class="form-control" rows="4" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="tile-footer">
            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enregistrer</button>
            &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
          </div>
        </form>
      </div>
      
    </div>
  </div> --}}