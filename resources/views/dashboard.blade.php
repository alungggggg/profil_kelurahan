<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">

    <title> Beranda </title>
    
    <!-- animate.css-->  
    <link href="{{asset('/asset/vendor/animate.css-master/animate.min.css')}}" rel="stylesheet">
    <!-- Load Screen -->
    <link href="{{asset('/asset/vendor/loadscreen/css/spinkit.css')}}" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="{{asset('/asset/vendor/fontawesome/css/fontawesome-all.min.css')}}" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="{{asset('/asset/custom/css/fables-icons.css')}}" rel="stylesheet"> 
    <!-- Bootstrap CSS --> 
    <link href="{{asset('/asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/asset/vendor/bootstrap/css/bootstrap-4-navbar.css')}}" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="{{asset('/asset/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css')}}" rel="stylesheet">
    <!-- Video Background -->
    <link href="{{asset('/asset/vendor/video-background/video-background.css')}}" rel="stylesheet"> 
    <!-- FANCY BOX -->
    <link href="{{asset('/asset/vendor/fancybox-master/jquery.fancybox.min.css')}}" rel="stylesheet"> 
    <!-- RANGE SLIDER -->
    <link href="{{asset('/asset/vendor/range-slider/range-slider.css')}}" rel="stylesheet">
    <!-- OWL CAROUSEL  --> 
    <link href="{{asset('/asset/vendor/owlcarousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/asset/vendor/owlcarousel/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="{{asset('/asset/custom/css/custom.css')}}" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="{{asset('/asset/custom/css/custom-responsive.css')}}" rel="stylesheet">
    
  
    
     
</head>


<body>

<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="post" action="#" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." /> 
                </div>
                <div class="col-2 mt-3">
                     <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>
         
</div>
    
<!-- Loading Screen -->
<div id="ju-loading-screen">
  <div class="sk-double-bounce">
    <div class="sk-child sk-double-bounce1"></div>
    <div class="sk-child sk-double-bounce2"></div>
  </div>
</div>

<!-- Start Fables Navigation -->
<div class="">
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
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Beranda
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                            <li><a class="dropdown-item" href="#">Aplikasi Online Kediri</a></li>
                                            <li><a class="dropdown-item" href="#">Statistik Kependudukan</a></li>
                                            <li><a class="dropdown-item" href="#">Informasi Lembaga</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Profil
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                            <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                                            <li><a class="dropdown-item" href="#">Anggota</a></li>
                                            <li><a class="dropdown-item" href="#">Kontak</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Lembaga
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav2">

                                            <li><a class="dropdown-item dropdown-toggle" href="#">LKK</a>
                                                <ul class="dropdown-menu">  
                                                    <li><a class="dropdown-item" href="#">LPMK</a>
                                                    <li><a class="dropdown-item" href="#">RT/RW</a>
                                                    <li><a class="dropdown-item" href="#">PKK</a>
                                                    <li><a class="dropdown-item" href="#">KARTAR</a>
                                                    <li><a class="dropdown-item" href="#">POSYANDU</a>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item dropdown-toggle" href="#">Forum Kemasyarakatan</a>
                                                <ul class="dropdown-menu">  
                                                    <li><a class="dropdown-item" href="#">FPRB</a>
                                                    <li><a class="dropdown-item" href="#">Kelurahan Sehat</a>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pelayanan
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                            <li><a class="dropdown-item" href="#">Surat Keterangan</a></li>
                                            <li><a class="dropdown-item" href="#">Surat Kelahiran</a></li>
                                            <li><a class="dropdown-item" href="#">Surat Kematian</a></li>
                                            <li><a class="dropdown-item" href="#">Surat Pindah</a></li>
                                            <li><a class="dropdown-item" href="#">KTP (Baru)</a></li>
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
</div> <br>
<!-- /End Fables Navigation -->  

<!-- Foto -->
        <div class="fables-page-content container overflow-hidden">
           <div class="row">
               <div class="col-12 col-sm-4 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                   <div class="image-container translate-effect-right">
                       <a href="#"><img src="{{asset('/asset/image/profil.jpg')}}" alt="" class="img-fluid w-100"></a>
                   </div>
               </div>
               <div class="col-12 col-sm-4 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                   <div class="image-container translate-effect-right">
                       <a href="#"><img src="{{asset('/asset/image/profil.jpg')}}" alt="" class="img-fluid w-100"></a>
                   </div>
               </div>
               <div class="col-12 col-sm-4 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                   <div class="image-container translate-effect-right">
                       <a href="#"><img src="{{asset('/asset/image/profil.jpg')}}" alt="" class="img-fluid w-100"></a>
                   </div>
               </div>
            </div>

            <div class="row">               
                <div class="col-12 col-lg-2 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                   <div class="image-container circle-effect">
                       <a href="#"><img src="{{asset('/asset/image/profil.jpg')}}" alt="" class="img-fluid w-100"></a>
                   </div>
               </div>
               <div class="col-12 col-lg-2 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                   <div class="image-container circle-effect">
                       <a href="#"><img src="{{asset('/asset/image/profil.jpg')}}" alt="" class="img-fluid w-100"></a>
                   </div>
               </div>
               <div class="col-12 col-lg-2 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                   <div class="image-container circle-effect">
                       <a href="#"><img src="{{asset('/asset/image/profil.jpg')}}" alt="" class="img-fluid w-100"></a>
                   </div>
               </div>
               <div class="col-12 col-lg-2 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                   <div class="image-container circle-effect">
                       <a href="#"><img src="{{asset('/asset/image/profil.jpg')}}" alt="" class="img-fluid w-100"></a>
                   </div>
               </div>
               <div class="col-12 col-lg-2 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                   <div class="image-container circle-effect">
                       <a href="#"><img src="{{asset('/asset/image/profil.jpg')}}" alt="" class="img-fluid w-100"></a>
                   </div>
               </div>
               <div class="col-12 col-lg-2 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                   <div class="image-container circle-effect">
                       <a href="#"><img src="{{asset('/asset/image/profil.jpg')}}" alt="" class="img-fluid w-100"></a>
                   </div>
               </div>
            </div>

            <center><img width="50%" src="{{asset('/asset/image/apk.png')}}" class="rotateOut-effect mb-4 wow fadeInUpBig" data-wow-duration="4s"></center>
       </div>
<!-- End Foto -->

<!-- Sambutan -->
            <div class="row">
               <div class="col-12 col-lg-3 p-0 wow fadeInLeftBig" data-wow-duration="4s">
                   <div class="image-container img-fluid">
                       <a href="#"><img width="100%" src="{{asset('/asset/image/paklurah.png')}}"></a>
                   </div>
               </div>
               <div class="col-12 col-lg-9 p-0 wow fadeInRightBig" data-wow-duration="4s">
                   <div class="mb-5 image-container translate-effect-right">
                        <div class="p-6">
                                <h1 class="text-white font-29 semi-font"><center>KATA-KATA</center></h1>
                            </div>
                        <div class="p-4 container z-index position-relative fables-navigation fables-main-background-color">
                                <h1 class="p-1 text-white font-29 semi-font"><center>SAMBUTAN</center></h1>
                                <div class="font-14 text-white text-md-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                </div>
                            </div>                     
                    </div>
                    <center><img width="70%" src="{{asset('/asset/image/kdr.png')}}"></center>
               </div>
            </div>
<div class="fables-navigation fables-main-background-color py-3 py-lg-0">
    <h1 class="text-white font-29 semi-font mb-2"><center>BERITA TERKINI</center></h1>
</div>
  <div class="container py-4 py-lg-5">
    <div class="fables-team my-3">  
            <div class="row wow fadeInDownBig" data-wow-duration="4s">
            <div class="col-12 col-sm-4 col-md-4 mb-4 mb-lg-5"> 
              <div class="image-container zoomIn-effect">
                  <a href="#"><img width="50%" src="{{asset('/asset/image/kucing.jpg')}}" alt="alt image text"></a> 
              </div>
              <h2 class="mt-3 mb-2 font-18 semi-font"><a href="#" class="fables-main-text-color fables-second-hover-color">Getting to Another Level of Design</a></h2>
              <div class="fables-forth-text-color font-14 mb-2">                                  
                  <span class="fables-icondata fables-second-text-color mr-1"></span> 
                  <span class="mr-3"> 09 November, 2018 </span>
                  <span class="fables-iconcomment fables-second-text-color mr-1"></span> 
                  <a href="" class="fables-forth-text-color fables-second-hover-color position-relative z-index">2</a> 
              </div>
              <p class="fables-forth-text-color font-14 mb-2">
                  When you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality. the choices are versatile Assuming that you will goWhen you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality.
              </p>
              <a href="" class="btn btn-link fables-main-text-color fables-second-hover-color fables-cat-blog-btn ">Read More</a>  
            </div>
            <div class="col-12 col-sm-4 col-md-4 mb-4 mb-lg-5">
                <div class="image-container zoomIn-effect">
                    <a href="#"><img width="50%" src="{{asset('/asset/image/kucing.jpg')}}" alt="alt image text"></a> 
                </div> 

              <h2 class="mt-3 mb-2 font-18 semi-font"><a href="#" class="fables-main-text-color fables-second-hover-color">Getting to Another Level of Design</a></h2>
              <div class="fables-forth-text-color font-14 mb-2">                                  
                  <span class="fables-icondata fables-second-text-color mr-1"></span> 
                  <span class="mr-3"> 09 November, 2018 </span>
                  <span class="fables-iconcomment fables-second-text-color mr-1"></span> 
                  <a href="" class="fables-forth-text-color fables-second-hover-color position-relative z-index">2</a> 
              </div>
              <p class="fables-forth-text-color font-14 mb-2">
                  When you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality. the choices are versatile Assuming that you will goWhen you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality.
              </p>
              <a href="" class="btn btn-link fables-main-text-color fables-second-hover-color fables-cat-blog-btn ">Read More</a>  
            </div>
            <div class="col-12 col-sm-4 col-md-4 mb-4 mb-lg-5"> 
              <div class="image-container zoomIn-effect">
                  <a href="#"><img width="50%" src="{{asset('/asset/image/kucing.jpg')}}" alt="alt image text"></a> 
              </div>
              <h2 class="mt-3 mb-2 font-18 semi-font"><a href="#" class="fables-main-text-color fables-second-hover-color">Getting to Another Level of Design</a></h2>
             <div class="fables-forth-text-color font-14 mb-2">                                  
                  <span class="fables-icondata fables-second-text-color mr-1"></span> 
                  <span class="mr-3"> 09 November, 2018 </span>
                  <span class="fables-iconcomment fables-second-text-color mr-1"></span> 
                  <a href="" class="fables-forth-text-color fables-second-hover-color position-relative z-index">2</a> 
              </div>
              <p class="fables-forth-text-color font-14 mb-2">
                  When you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality. the choices are versatile Assuming that you will goWhen you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality.
              </p>
              <a href="" class="btn btn-link fables-main-text-color fables-second-hover-color fables-cat-blog-btn ">Read More</a> 
            </div> 
        </div>
    </div>
</div>
<div class="fables-navigation fables-main-background-color py-3 py-lg-0 mb-4">
    <h1 class="text-white font-29 semi-font mb-2"><center>VIDEO</center></h1>
</div>
        <div class="fables-page-content container overflow-hidden">
           <div class="row">
               <div class="col-12 col-sm-4 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                   <div class="image-container translate-effect-right">
                       <a href="#"><img src="{{asset('/asset/image/profil.jpg')}}" alt="" class="img-fluid w-100"></a>
                   </div>
               </div>
               <div class="col-12 col-sm-4 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                   <div class="image-container translate-effect-right">
                       <a href="#"><img src="{{asset('/asset/image/profil.jpg')}}" alt="" class="img-fluid w-100"></a>
                   </div>
               </div>
               <div class="col-12 col-sm-4 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                   <div class="image-container translate-effect-right">
                       <a href="#"><img src="{{asset('/asset/image/profil.jpg')}}" alt="" class="img-fluid w-100"></a>
                   </div>
               </div>
            </div>
        </div>
<!-- End Sambutan -->
<script src="{{asset('/asset/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/asset/vendor/loadscreen/js/ju-loading-screen.js')}}"></script>
<script src="{{asset('/asset/vendor/jquery-circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('/asset/vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('/asset/vendor/timeline/jquery.timelify.js')}}"></script>
<script src="{{asset('/asset/vendor/WOW-master/dist/wow.min.js')}}"></script>
<script src="{{asset('/asset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/asset/vendor/bootstrap/js/bootstrap-4-navbar.js')}}"></script>
<script src="{{asset('/asset/vendor/owlcarousel/owl.carousel.min.js')}}"></script> 
<script src="{{asset('/asset/vendor/fancybox-master/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('/asset/vendor/video-background/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{asset('/asset/custom/js/custom.js')}}"></script>  
 
    
</body>