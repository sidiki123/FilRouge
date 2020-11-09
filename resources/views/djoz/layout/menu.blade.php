<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>EVTICKET | plateforme evenementiel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('assets/img/EVTICKET.png')}}" type="image/x-icon">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">    
       

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">  
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"  type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/barfiller.css')}}"  type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/nowfont.css')}}"  type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/rockville.css')}}"  type="text/css">
    <link rel="stylesheet" href="{{asset('assets/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-1">
                    <div class="header__logo">
                    <a href="{{route('accueil')}}"><img src="{{asset('assets/img/Ev.png')}}" alt="" height="60vh"></a>
                    </div>
                </div>
                <div class="col-lg-11 col-md-11">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                            <li class="{{set_active_route('accueil')}}"><a href="{{route('accueil')}}">Accueil</a></li>
                            <li class="{{set_active_route('tours')}}"><a href="{{route('tours')}}">A la une</a></li>
                            <li class="{{set_active_route('discography')}}"><a href="{{route('discography')}}">Evenements</a></li>
                            <li class="{{set_active_route('about')}}"><a href="{{route('about')}}">A propos</a></li>
                            
                                
                                
                                {{-- <li><a href="{{route('videos')}}">Videos</a></li> --}}
                                <!-- <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./about.html">About</a></li>
                                        <li><a href="./blog.html">Blog</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> -->
                                @guest
                                <li>
                                    <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                                </li>
                                @if (Route::has('register'))
                                   {{-- 74437847 --}}
                                        
                                        <li><a class="primary-btn">Creer un compte</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ route('register') }}" >Visiteur</a></li>
                                                <li><a href="{{ route('register_agence') }}" >Agence</a></li>
                                            </ul>
                                        </li>
                                  
                                @endif
                            @else
                                <li>
                                
                                    <a class="primary-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" id="navbarDropdown" class="nav-link dropdown-toggle "  aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Se deconnecter') }}
                                        </a>
                                       
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        
                                    </li>
                                    @can('access')
                                    <li><a href="{{ route('dashboard') }}">
                                            {{ __('Tableau de bord') }}
                                        </a>
                                    </li>
                                    @endcan
                                    </ul>
    
                                   
                                </li>
                            @endguest
                            
                            <li ><a class="text-warning"><i class="fa fa-shopping-cart fa-lg"></i> <span class="badge badge-pill badge-pack" style="background-color:black">{{Cart::count()}}</span> </a>
                                <ul class="dropdown">
                                        <li><a href="{{ route('cart.index') }}" >Voir le panier</a></li>
                                        <li><a href="{{ route('vider_panier') }}" >Vider le panier</a></li>
                                </ul>
                            </li>

                        </ul>
                           
                        </nav>
                        
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->
{{-- 
    Powerpoint

    Presentation du candidat
    Le plan
    Description du projet
    Les technologies utilisées
    Les outils de travail collaboratif --}}
