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
               <div class="col-12 col-lg-1">
                <a class="navbar-brand" href="#"></a>
                             
                </div> 
                <div class="col-12 col-lg-1">
                <a class="image-container img-fluid" href="#"><img width="139%" src="{{asset('/asset/image/navngampel.png')}}"></a>
                </div> 
                   <div class="col-12 col-lg-10">                       
                       <nav class="navbar fables-main-background-color navbar-expand-md btco-hover-menu py-lg-2">
         
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fables-iconmenu-icon text-white font-16"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="fablesNavDropdown"> 

                                <ul class="navbar-nav mx-auto fables-nav">   
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/dashboard" id="sub-nav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Beranda
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                            <li><a class="dropdown-item" href="/dashboard#aplikasi">Aplikasi Online Kediri</a></li>
                                            <li><a class="dropdown-item" href="/dashboard#statistik">Statistik Kependudukan</a></li>
                                            <li><a class="dropdown-item" href="/dashboard#informasi">Informasi Lembaga</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/profil" id="sub-nav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Profil
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                            <li><a class="dropdown-item" href="/profil">Visi Misi</a></li>
                                            <li><a class="dropdown-item" href="/profil">Anggota</a></li>
                                            <li><a class="dropdown-item" href="/profil">Kontak</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Lembaga
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav2">

                                            <li><a class="dropdown-item dropdown-toggle" href="#">LKK</a>
                                                <ul class="dropdown-menu">  
                                                @foreach ($fks as $fk)
                                                    <li><a class="dropdown-item" href="#">{{ $fk->nama_lembaga }}</a>
                                                @endforeach
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item dropdown-toggle" href="#">Forum Kemasyarakatan</a>
                                                <ul class="dropdown-menu"> 
                                                    @foreach ($fks as $fk)
                                                        <li><a class="dropdown-item"
                                                                href="#">{{ $fk->nama_lembaga }}</a>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/pelayanan" id="sub-nav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pelayanan
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                            <li><a class="dropdown-item" href="/pelayanan">Surat Keterangan</a></li>
                                            <li><a class="dropdown-item" href="/pelayanan">Surat Kelahiran</a></li>
                                            <li><a class="dropdown-item" href="/pelayanan">Surat Kematian</a></li>
                                            <li><a class="dropdown-item" href="/pelayanan">Surat Pindah</a></li>
                                            <li><a class="dropdown-item" href="/pelayanan">KTP (Baru)</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="sub-nav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Berita
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link btn-danger" href="#" id="sub-nav3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            UMKM
                                        </a>
                                    </li>
                                </ul> 
                            </div>
                    </div>                    
                </nav>                

            </div>
        </div>
    </div>

    @yield('content')

    <div class="copyright fables-main-background-color mt-0 border-0 white-color">
        <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
            <li><a href="#" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-pinterest-square"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>
        <p class="mb-0">Copyright © Kelurahan Ngampel ~ PKL UNP Kediri 2024</p>
    </div>

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
