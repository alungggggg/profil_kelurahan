@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
    <!-- Foto -->
    <div class="fables-page-content container overflow-hidden">
        <div class="row">
            <div class="col-12 col-sm-4 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                <div class="image-container translate-effect-right">
                    <a href="#"><img src="{{ asset('/asset/image/profil.jpg') }}" alt=""
                            class="img-fluid w-100"></a>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                <div class="image-container translate-effect-right">
                    <a href="#"><img src="{{ asset('/asset/image/profil.jpg') }}" alt=""
                            class="img-fluid w-100"></a>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                <div class="image-container translate-effect-right">
                    <a href="#"><img src="{{ asset('/asset/image/profil.jpg') }}" alt=""
                            class="img-fluid w-100"></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-2 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                <div class="image-container circle-effect">
                    <a href="#"><img src="{{ asset('/asset/image/profil.jpg') }}" alt=""
                            class="img-fluid w-100"></a>
                </div>
            </div>
            <div class="col-12 col-lg-2 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                <div class="image-container circle-effect">
                    <a href="#"><img src="{{ asset('/asset/image/profil.jpg') }}" alt=""
                            class="img-fluid w-100"></a>
                </div>
            </div>
            <div class="col-12 col-lg-2 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                <div class="image-container circle-effect">
                    <a href="#"><img src="{{ asset('/asset/image/profil.jpg') }}" alt=""
                            class="img-fluid w-100"></a>
                </div>
            </div>
            <div class="col-12 col-lg-2 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                <div class="image-container circle-effect">
                    <a href="#"><img src="{{ asset('/asset/image/profil.jpg') }}" alt=""
                            class="img-fluid w-100"></a>
                </div>
            </div>
            <div class="col-12 col-lg-2 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                <div class="image-container circle-effect">
                    <a href="#"><img src="{{ asset('/asset/image/profil.jpg') }}" alt=""
                            class="img-fluid w-100"></a>
                </div>
            </div>
            <div class="col-12 col-lg-2 mb-4 wow fadeInDownBig" data-wow-duration="4s">
                <div class="image-container circle-effect">
                    <a href="#"><img src="{{ asset('/asset/image/profil.jpg') }}" alt=""
                            class="img-fluid w-100"></a>
                </div>
            </div>
        </div>

            <center><img id="aplikasi" width="50%" src="{{asset('/asset/image/apk.png')}}" class="rotateOut-effect mb-4 wow fadeInUpBig" data-wow-duration="4s"></center>
       </div>
<!-- End Foto -->

<!-- Sambutan -->
            <div class="row">
               <div class="col-12 col-lg-3 p-0 wow fadeInUpBig" data-wow-duration="4s">
                   <div class="">
                       <a href="#"><img src="{{asset('/asset/image/paklurah.png')}}" class="fables-logo w-100"></a>
                   </div>
               </div>
               <div class="col-12 col-lg-9 p-0 wow fadeInUpBig" data-wow-duration="4s">
                   <div class="image-container translate-effect-right">
                        <div class="p-6">
                                <h1 class="text-white font-29 semi-font wow fadeRightDownBig" data-wow-duration="4s""><center>KATA-KATA</center></h1>
                            </div>
                        <div class="p-4 container z-index position-relative fables-navigation fables-main-background-color">
                                <h1 class="p-1 text-white font-29 semi-font"><center>SAMBUTAN</center></h1>
                                <div class="font-14 text-white text-md-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                </div>
                            </div>                     
                    </div>
                    <center><a href="https://wa.me/6285175137514"><img width="100%" src="{{asset('/asset/image/kdr.png')}}"></a></center>
               </div>
            </div>

    <div class="fables-navigation fables-main-background-color py-3 py-lg-0">
        <h1 class="text-white font-29 semi-font mb-2">
            <center>BERITA TERKINI</center>
        </h1>
    </div>
    <div class="container py-4 py-lg-5">
        <div class="fables-team my-3">
            <div class="row wow fadeInDownBig" data-wow-duration="4s">
                @foreach ($articles as $article)
                    <div class="col-12 col-sm-4 col-md-4 mb-4 mb-lg-5">
                        <div class="image-container zoomIn-effect">
                            <a href="#"><img width="50%" src="{{ asset($article->thumbnail) }}"
                                    alt="alt image text"></a>
                        </div>
                        <h2 class="font-weight-bold mt-3 mb-2 font-18 semi-font"><a href="#"
                                class="fables-second-text-color fables-second-hover-color">{{ $article->title }}</a></h2>
                        <div class="fables-forth-text-color font-14 mb-2">
                            <span class="fables-icondata fables-main-text-color mr-1"></span>
                            <span class="mr-3"> {{ $article->created_at }} </span>
                        </div>
                        <p class="fables-forth-text-color font-14 mb-2">
                            {!! substr($article->content, 0, 8) !!}...
                            {!! $article->content !!}
                        </p>
                        <a href="/berita/{{ $article->title }}"
                            class="btn fables-second-text-color fables-main-hover-color p-0 mt-2">
                            <span class="underline">Read More</span>
                            <span class="fables-iconarrow-light ml-2"></span>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="fables-navigation fables-main-background-color py-3 py-lg-0 mb-4">
        <h1 id="statistik" class="text-white font-29 semi-font mb-2">
            <center>STATISTIK KELURAHAN</center>
        </h1>
    </div>
    <div class="row row py-4 py-lg-5">
        <div class="col-6 col-md-3 text-center">
            <div class="progressbar" data-animate="false">
                <div class="circle" data-percent="33" data-fill="{&quot;color&quot;: &quot;#42E563&quot;}">
                    <div style="color:#42E563; "></div>
                    <h3 class="fables-circle-head fables-main-text-color">Jumlah RT</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 text-center">
            <div class="progressbar" data-animate="false">
                <div class="circle" data-percent="11" data-fill="{&quot;color&quot;: &quot;#4252E5&quot;}">
                    <div style="color:#4252E5; "></div>
                    <h3 class="fables-circle-head fables-main-text-color">Jumlah RW</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 text-center">
            <div class="progressbar" data-animate="false">
                <div class="circle" data-percent="99" data-fill="{&quot;color&quot;: &quot;#AE42E5&quot;}">
                    <div style="color:#AE42E5; "></div>
                    <h3 class="fables-circle-head fables-main-text-color">Penduduk</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 text-center">
            <div class="progressbar" data-animate="false">
                <div class="circle" data-percent="55" data-fill="{&quot;color&quot;: &quot;#E54D42&quot;}">
                    <div style="color:#E54D42; "></div>
                    <h3 class="fables-circle-head fables-main-text-color">Jumlah KK</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
                <p class="fables-forth-text-color">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis cum aliquid quam, consequatur.
                    quisquam consectetur culpa commodi maxime in harum sunt nam. Minima, repellat aspernatur atque voluptate
                    dolores quos vel dolor! Debitis, consequatur, aliquid.
                </p>
            </div>
        </div>
        <div class="row mt-4 mt-md-5">
            <div class="col-6 col-md-3">
                <div class="fables-counter">
                    <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4"
                        data-count="33">0</h2>
                    <h3 class="font-14 semi-font fables-forth-text-color">Jumlah RT</h3>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="fables-counter">
                    <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4"
                        data-count="11">0</h2>
                    <h3 class="font-14 semi-font fables-forth-text-color">Jumlah RW</h3>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="fables-counter">
                    <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4"
                        data-count="99">0</h2>
                    <h3 class="font-14 semi-font fables-forth-text-color">Jumlah Penduduk</h3>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="fables-counter">
                    <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4"
                        data-count="55">0</h2>
                    <h3 class="font-14 semi-font fables-forth-text-color">Jumlah KK</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Youtube   -->
    <!-- <div class="container">
                                                       <div id="cd-timeline" class="cd-container gallery-timeline my-4 my-md-5">
                                                            <span class="fables-main-background-color line"></span>
                                                            <div class="cd-timeline-block">
                                                                <div class="cd-timeline-img"></div>
                                                                <div class="cd-timeline-content">
                                                                      <a href="#"><img src="{{ asset('/asset/image/kucing.jpg') }}" alt="" class="w-100"></a>
                                                                      <h2 class="font-15 semi-font px-3 mt-2"><a href="#" class="fables-second-text-color fables-main-hover-color fables-gallery-timeline-head">
                                                                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                      </a></h2>
                                                                      <p class="fables-forth-text-color fables-gallery-timeline-details">
                                                                         It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.
                                                                      </p>
                                                                    <span class="cd-date fables-second-text-color">VIDEO</span>
                                                                </div>
                                                            </div>

                                                            <div class="cd-timeline-block">
                                                                <div class="cd-timeline-img"></div>
                                                                <div class="cd-timeline-content">
                                                                      <a href="#"><img src="{{ asset('/asset/image/kucing.jpg') }}" alt="" class="w-100"></a>
                                                                      <h2 class="font-15 semi-font px-3 mt-2"><a href="#" class="fables-second-text-color fables-main-hover-color fables-gallery-timeline-head">
                                                                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                      </a></h2>
                                                                      <p class="fables-forth-text-color fables-gallery-timeline-details">
                                                                         It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.
                                                                      </p>
                                                     
                                                                    <span class="cd-date fables-second-text-color">VIDEO</span>
                                                                </div>
                                                            </div>

                                                            <div class="cd-timeline-block">
                                                               <div class="cd-timeline-img"></div>
                                                                <div class="cd-timeline-content">
                                                                      <a href="#"><img src="{{ asset('/asset/image/kucing.jpg') }}" alt="" class="w-100"></a>
                                                                      <h2 class="font-15 semi-font px-3 mt-2"><a href="#" class="fables-second-text-color fables-main-hover-color fables-gallery-timeline-head">
                                                                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                      </a></h2>
                                                                      <p class="fables-forth-text-color fables-gallery-timeline-details">
                                                                         It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.
                                                                      </p>
                                                     
                                                                    <span class="cd-date fables-second-text-color">VIDEO</span>
                                                                </div>
                                                            </div>

                                                            <div class="cd-timeline-block">
                                                                <div class="cd-timeline-img"></div>
                                                               <div class="cd-timeline-content">
                                                                      <a href="#"><img src="{{ asset('/asset/image/kucing.jpg') }}" alt="" class="w-100"></a>
                                                                      <h2 class="font-15 semi-font px-3 mt-2"><a href="#" class="fables-second-text-color fables-main-hover-color fables-gallery-timeline-head">
                                                                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                      </a></h2>
                                                                      <p class="fables-forth-text-color fables-gallery-timeline-details">
                                                                         It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.
                                                                      </p>
                                                     
                                                                    <span class="cd-date fables-second-text-color">VIDEO</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>   -->
    <!-- end video youtube -->

    <div class="fables-navigation fables-main-background-color py-3 py-lg-0">
        <h1 id="informasi" class="text-white font-29 semi-font mb-2">
            <center>INFORMASI</center>
        </h1>
    </div>
    <div class="container mt-2">
        <div class="row overflow-hidden">
            <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay=".5s">
                <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                    <span
                        class="fables-iconmap-icon fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                    <h2 class="font-16 semi-font fables-main-text-color my-3">Kantor Kelurahan Ngampel</h2>
                    <p class="font-14 fables-forth-text-color">
                        Jl. Ngampel Raya No.63, Mrican, Kec. Mojoroto, Kota Kediri, Jawa Timur 64112</p>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay=".8s">
                <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                    <span
                        class="fables-iconphone fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                    <h2 class="font-16 semi-font fables-main-text-color my-3">Hubungi Kami</h2>
                    <p class="font-14 fables-forth-text-color text-truncate">ngampel.kelurahan@gmail.com</p>
                    <p class="font-14 fables-forth-text-color">(0354) 7411320</p>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay="1.1s">
                <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                    <span
                        class="fables-iconshare-icon fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                    <h2 class="font-16 semi-font fables-main-text-color my-3">Jam Pelayanan</h2>
                    <p class="font-14 fables-forth-text-color">
                        Senin-Jumat (07.30-15.30) Khusus Hari Sabtu, Minggu, dan Tanggal Merah LIBUR</p>
                </div>
            </div>
        </div>
    </div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1976.5011412398067!2d111.99479688462607!3d-7.7895813068743385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78512bc80409f5%3A0x1955aefff12bfbee!2sKantor%20Kelurahan%20Ngampel!5e0!3m2!1sid!2sid!4v1710143158328!5m2!1sid!2sid"
        width="100%" height="380" style="border:0;" allowfullscreen></iframe>
@endsection
