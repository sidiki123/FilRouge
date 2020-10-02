

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" href="{{asset('admin_assets/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <title>Connexion -EVTICKET</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1></h1>
      </div>
        <div class="login-box">
         <!-- <form class="login-form" action="index.html"> -->
         <form class="login-form" method="POST" action="{{ route('register') }}">
         @csrf
         
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Creation de compte-Visiteur</h3>
          
          {{-- <input type="hidden" name="role" value="visiteur"> --}}
{{--          

          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
          </div>

          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
          </div> --}}

          <div class="form-group">
            <label class="control-label">Nom d'utilisateur</label>
            <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
             @enderror
          </div>
          <div class="form-group">
            <label class="control-label">Confirmer votre mot de passe</label>
            <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
             @enderror
          </div>
              
            
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Creer</button>
          </div>
         </form>
        </div>
    </section>
    <!-- Essential javascripts for application to work-->
    @include('Admin/vali-admin-master/docs/inc.script')
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>