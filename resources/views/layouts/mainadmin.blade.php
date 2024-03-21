<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">

    <title> Halaman @yield('title') </title>

    <!-- animate.css-->
    <link href="{{ asset('/asset/vendor/animate.css-master/animate.min.css') }}" rel="stylesheet">
    <!-- Load Screen -->
    <link href="{{ asset('/asset/vendor/loadscreen/css/spinkit.css') }}" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="{{ asset('/asset/vendor/fontawesome/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="{{ asset('/asset/custom/css/fables-icons.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('/asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/asset/vendor/bootstrap/css/bootstrap-4-navbar.css') }}" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="{{ asset('/asset/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css') }}" rel="stylesheet">
    <!-- TIMELINE-->
    <link rel="stylesheet" href="{{ asset('/asset/vendor/timeline/timeline.css') }}">
    <!-- FANCY BOX -->
    <link href="{{ asset('/asset/vendor/fancybox-master/jquery.fancybox.min.css') }}" rel="stylesheet">
    <!-- RANGE SLIDER -->
    <link href="{{ asset('/asset/vendor/range-slider/range-slider.css') }}" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="{{ asset('/asset/vendor/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/asset/vendor/owlcarousel/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="{{ asset('/asset/custom/css/custom.css') }}" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="{{ asset('/asset/custom/css/custom-responsive.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Loading Screen -->
    <div id="ju-loading-screen">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Start Fables Navigation -->
    <div class="navbarr">
        <div class="">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <nav class="navbar fables-main-background-color navbar-expand-md btco-hover-menu py-lg-2">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="fables-iconmenu-icon text-white font-16"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="fablesNavDropdown">

                            <ul class="navbar-nav mx-auto fables-nav">
                                @if (Auth::user()->role_id == 2)
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/fk" id="sub-nav1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Forum
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                            <li><a class="dropdown-item" href="/fk">Forum Kemasyarakatan</a></li>
                                            <li><a class="dropdown-item" href="/fk/add">Tambah Forum</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/lkk" id="sub-nav2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            LKK
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                            <li><a class="dropdown-item" href="/lkk">Data Lembaga</a></li>
                                            <li><a class="dropdown-item" href="/lkk/add">Tambah LKK</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/user" id="sub-nav1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            User
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                            <li><a class="dropdown-item" href="/user">Data User</a></li>
                                            <li><a class="dropdown-item" href="/user/add">Tambah User</a></li>
                                        </ul>
                                    </li>
                                @endif

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/umkm" id="sub-nav1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        UMKM
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                        <li><a class="dropdown-item" href="/umkm">Data UMKM</a></li>
                                        <li><a class="dropdown-item" href="/umkm/add">Tambah UMKM</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/article" id="sub-nav1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Artikel
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                        <li><a class="dropdown-item" href="/article">Data Artikel</a></li>
                                        <li><a class="dropdown-item" href="/article/add">Tambah Artikel</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                </div>
                </nav>

            </div>
        </div>
    </div>

    @yield('content')

    <script src="{{ asset('/asset/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/asset/vendor/loadscreen/js/ju-loading-screen.js') }}"></script>
    <script src="{{ asset('/asset/vendor/jquery-circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('/asset/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('/asset/vendor/timeline/jquery.timelify.js') }}"></script>
    <script src="{{ asset('/asset/vendor/WOW-master/dist/wow.min.js') }}"></script>
    <script src="{{ asset('/asset/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/asset/vendor/bootstrap/js/bootstrap-4-navbar.js') }}"></script>
    <script src="{{ asset('/asset/vendor/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/asset/vendor/timeline/timeline.js') }}"></script>
    <script src="{{ asset('/asset/vendor/timeline/modernizr.js') }}"></script>
    <script src="{{ asset('/asset/vendor/fancybox-master/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('/asset/vendor/video-background/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('/asset/custom/js/custom.js') }}"></script>
    <script src="{{ asset('/asset/vendor/jquery-circle-progress/circle.js') }}"></script>

</body>

</html>
