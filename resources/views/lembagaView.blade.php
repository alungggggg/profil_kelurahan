@extends('layouts.main')

@section('title', 'Lembaga')
@section('content')
<div class="container mt-5">
<h1 class="font-29 semi-font fables-second-text-color"><center><div class="title">{{ $lembaga->nama_lembaga }}</div></center></h1>
    <center><img src="{{ asset($lembaga->logo) }}" alt="" style="width:50%;"></center>
    <div class=" mt-4 mb-1 description ">{{ $lembaga->description }}</div><br />


<div class="fables-navigation fables-main-background-color py-3 py-lg-0 mt-4 mb-4 recomended">
    <h1 class="text-white font-29 semi-font"><center>REKOMENDASI BERITA TERKINI</center></h1>
</div>
<div class="row wow fadeInDownBig" data-wow-duration="4s">            
    @foreach ($articles as $articles)
    <div class="col-12 col-sm-4 col-md-4 mb-4 mb-lg-5"> 
              <div class="image-container zoomIn-effect">
                  <a href="#"><img style="width:225px; height:225px; overflow:hidden; position:relative;" src="{{ asset($articles->thumbnail) }}" alt="alt image text"></a> 
              </div>
              <h2 class="font-weight-bold mt-3 mb-2 font-18 semi-font"><a href="/berita/{{ $articles->title }}" class="fables-second-text-color fables-second-hover-color">{{ $articles->title }}</a></h2>
            </div>   
    @endforeach 
</div>
</div>
@endsection