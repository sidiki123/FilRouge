<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EVTICKET | plateforme evenementiel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

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
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{route('home')}}">Accueil</a></li>
                                <li ><a href="{{route('about')}}">A propos</a></li>
                                <li><a href="{{route('discography')}}">Evenements</a></li>
                                <li><a href="{{route('tours')}}">A la une</a></li>
                                <li><a href="{{route('videos')}}">Videos</a></li>
                                <!-- <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./about.html">About</a></li>
                                        <li><a href="./blog.html">Blog</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> -->
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('page-login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                   
                                        
                                        <li><a class="primary-btn">register</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ route('page-register') }}" >Visiteur</a></li>
                                                <li><a href="{{ route('page-register') }}" >Agence</a></li>
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
                                            {{ __('Logout') }}
                                        </a>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Dashboard') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                       
                                    </ul>
    
                                   
                                </li>
                            @endguest
                            
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
