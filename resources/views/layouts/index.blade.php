<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title -->
        <title>Roberto - Hotel &amp; Resort HTML Template</title>

        <!-- Favicon -->
        <link rel="icon" href="{{asset('img/core-img/favicon.png')}}">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
        <link rel="stylesheet" href="{{asset('module/default-assets/classy-nav.css')}}">
        <link rel="stylesheet" href="{{asset('module/style.css')}}">
        <link rel="stylesheet" href="{{asset('module/animate.css')}}">
        <link rel="stylesheet" href="{{asset('module/bootstrap-datepicker.min.css')}}">
        <link rel="stylesheet" href="{{asset('module/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('module/all.css')}}">
        <link rel="stylesheet" href="{{asset('module/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('module/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('module/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('module/owl.carousel.min.css')}}">
        
        <script src="{{asset('js/app.js')}}"></script>
    </head>

    <body>

        <!-- Header Area Start -->
        <header class="header-area">
            <!-- Search Form -->
                <div class="search-form d-flex align-items-center">
                    <div class="container">
                        <form action="index.html" method="get">
                            <input class="mr-5" type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                            <button class="ml-5" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                
            <!-- Top Header Area Start -->
            <div class="top-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <div class="top-header-content">
                                <a href="#"><i class="fa fa-phone"></i> <span>(123) 456-789-1230</span></a>
                                <a href="#"><i class="fab fa-mailchimp"></i> <span>info.colorlib@gmail.com</span></a>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="top-header-content">
                                <!-- Top Social Area -->
                                <div class="top-social-area ml-auto">
                                    <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fab fa-tripadvisor" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Header Area End -->

            <!-- Main Header Start -->
            <div class="main-header-area">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">
                        <!-- Classy Menu -->
                        <nav class="classy-navbar justify-content-between" id="robertoNav">

                            <!-- Logo -->
                            <a class="nav-brand" href="{{route('couverture')}}"><img src="{{asset('./img/core-img/logo.png')}}" alt=""></a>

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">
                                <!-- Menu Close Button -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>
                                <!-- Nav Start -->
                                <div id="nav" class="classynav">
                                    <ul>
                                        <li class="active"><a href="{{route('home')}}"> <i class="fa fa-home"/></i> Accueil</a></li>
                                        <li><a href="{{route('voiture.index')}}"><i class="fa fa-car"/></i> Voiture</a></li>
                                        <li><a href="{{route('contact')}}"><i class="fa fa-phone"/></i> Contact</a></li>
                                        <li><a href="#"><i class="fa fa-list"/></i> Categorie de voiture <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                @foreach (AllCategorie() as $categorie)
                                                    <li><a href="{{route('recherche.categorie',['recherche' => $categorie->name])}}">{{$categorie->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        @guest
                                            <li><a href="{{ route('login') }}">Connexion</a></li>
                                            <li><a href="{{ route('register') }}">Inscription</a></li>
                                        @else
                                            <li> <a href="#"> <i class="fa fa-user"></i> {{ Auth::user()->name }}</a> 
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href="{{route('dashboard')}}">Tableau de bord</a>
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endguest
                                        <li>
                                            <div class="search-btn ml-4">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End -->
        
        @yield('content')
        

        <!-- Footer Area Start -->
        <footer class="footer-area mt-5 section-padding-80-0">
            <!-- Main Footer Area -->
            <div class="main-footer-area">
                <div class="container">
                    <div class="row align-items-baseline justify-content-between">
                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-footer-widget mb-80">
                                <!-- Footer Logo -->
                                <a href="#" class="footer-logo"><img src="{{asset('./img/core-img/logo.png')}}" alt=""></a>

                                <h4>+12 345-678-9999</h4>
                                <span>Info.colorlib@gmail.com</span>
                                <span>856 Cordia Extension Apt. 356, Lake Deangeloburgh, South Africa</span>
                            </div>
                        </div>

                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-footer-widget mb-80">
                                <!-- Widget Title -->
                                <h5 class="widget-title">Our Blog</h5>

                                <!-- Single Blog Area -->
                                <div class="latest-blog-area">
                                    <a href="#" class="post-title">Freelance Design Tricks How</a>
                                    <span class="post-date"><i class="fa fa-clock" aria-hidden="true"></i> Jan 02, 2019</span>
                                </div>

                                <!-- Single Blog Area -->
                                <div class="latest-blog-area">
                                    <a href="#" class="post-title">Free Advertising For Your Online</a>
                                    <span class="post-date"><i class="fa fa-clock" aria-hidden="true"></i> Jan 02, 2019</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-4 col-lg-2">
                            <div class="single-footer-widget mb-80">
                                <!-- Widget Title -->
                                <h5 class="widget-title">Links</h5>

                                <!-- Footer Nav -->
                                <ul class="footer-nav">
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Room</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Career</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-8 col-lg-4">
                            <div class="single-footer-widget mb-80">
                                <!-- Widget Title -->
                                <h5 class="widget-title">Subscribe Newsletter</h5>
                                <span>Subscribe our newsletter gor get notification about new updates.</span>

                                <!-- Newsletter Form -->
                                <form action="index.html" class="nl-form">
                                    <input type="email" class="form-control" placeholder="Enter your email...">
                                    <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copywrite Area -->
            <div class="container">
                <div class="copywrite-content">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-8">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This apps is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Stevy</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-tripadvisor" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->
        <script src="{{asset('js/app.js')}}"></script>
    </body>

</html>