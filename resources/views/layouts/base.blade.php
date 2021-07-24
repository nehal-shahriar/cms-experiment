<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <title>Xortech</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}" />
    <link href="https://allfont.net/allfont.css?fonts=agency-fb" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- ****************************change****************************************** -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- **********************change************************************************ -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blogListMedia.css') }}">
    @livewireStyles

</head>

<body>
    <!-- =================Menu Part Starts============== -->

    <nav id="navbar-example" class="navbar navbar-expand-lg navbar-light ">

        <div class="container">

            <!-- =====Logo Part Starts=================== -->
            <a class="navbar-brand logo" href="#"><img src="{{ asset('images/logo.png') }}" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>

            </button>
            <!-- =========Logo Part Ends==================== -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#banner">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#PortFolio">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#Work">Showcase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#team">Team</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#blog">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#contact">Contact</a>
                    </li>
                    <li>
                        @if(Route::has('login'))
                        @auth
                        @if(Auth::user()->utype === 'ADM')
                    <li class="menu-item menu-item-has-children parent">
                        <a title="My Account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="submenu curency">
                            <li class="menu-item">
                                <a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
                            </li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <li class="menu-item">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>

                            </form>
                        </ul>
                    </li>
                    @else
                    <li class="menu-item menu-item-has-children parent">
                        <a title="My Account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="submenu curency">
                            <li class="menu-item">
                                <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                            </li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <li class="menu-item">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>

                            </form>
                        </ul>
                    </li>
                    @endif
                    @else
                    <li class="menu-item"><a title="Register or Login" href="{{ route('login')}}">Login</a></li>
                    <li class="menu-item"><a title="Register or Login" href="{{ route('register')}}">Register</a></li>
                    @endif
                    @endif
                    </li>


                </ul>

            </div>
        </div>
    </nav>
    {{ $slot }}

    <section id="footer">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-4 ">
                    <div class="footer-logo ">
                        <a class="navbar-brand logo " href="# "><img src="{{ asset('images/logo.png') }}" class="img-fluid w-100 ">
                        </a>
                    </div>
                    <div class="footer-paragraph ">
                        <p>
                            Authentic and innovative. Built to the smallest detail with a focus on usability and performance.
                        </p>
                    </div>


                </div>
                <div class="col-lg-4 ">
                    <div class="ml-5 ">
                        <div class="footer-text ">
                            <h3>
                                Sitemap
                            </h3>
                        </div>
                        <div class="siteMap-list mt-4 ">
                            <ul>
                                <li>
                                    <a href="# ">Home</a>
                                </li>

                                <li>
                                    <a href="#about ">About us</a>
                                </li>

                                <li>
                                    <a href="#Work ">Work showcase</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="#team ">Cross functional team</a>
                                </li>
                                <li>
                                    <a href="#blog ">Latest blog</a>
                                </li>

                                <li>
                                    <a href="#contact ">Let's talk</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="ml-2 ">
                        <div class="footer-text ">
                            <h3>
                                Get in Touch
                            </h3>
                            <div class="socialmedia ">
                                <i class="fa fa-linkedin " aria-hidden="true "></i>
                                <i class="fa fa-facebook " aria-hidden="true "></i>
                                <i class="fa fa-twitter " aria-hidden="true "></i>
                                <!-- <i class="fa fa-envelope-o " aria-hidden="true "></i> -->
                            </div>
                            <p><i class="fa fa-phone " aria-hidden="true "></i>+880 1970 426798</p>
                            <p><i class="fa fa-map-marker " aria-hidden="true "></i>Dhaka, Bangladesh</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="back-to-top">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>
    <section id="copy-right">
        <div class="container">
            <div class="copyRight">

                <p><span>&#169;</span>2020 Xortech</p>

            </div>
        </div>

    </section>
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    @livewireScripts
</body>

</html>