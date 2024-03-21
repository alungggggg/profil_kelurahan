@extends('layouts.main')

@section('title', 'Lembaga')

@section('content')
<div class="container mt-5">
    {{-- @dd($lkks->count()) --}}
<div class="row wow fadeInDownBig" data-wow-duration="4s">
    @foreach ($lkks as $lkk)
    <div class="col-12 col-sm-4 col-md-4 mb-4 mb-lg-5"> 
              <div class="image-container zoomIn-effect">
                  <a href="#"><img width="50%" src="{{ asset($lkk->logo) }}" alt="alt image text"></a> 
              </div>
              <center><h2 class="font-weight-bold mt-3 mb-2 font-18 semi-font"><a href="/lembaga/{{ $lkk->nama_lembaga }}" class="fables-second-text-color fables-second-hover-color">{{ $lkk->nama_lembaga }}</a></h2></center>
              <p class="fables-forth-text-color font-14 mb-2">{{ $lkk->description }}</p>
              <a class="btn fables-second-background-color text-white" href="/lembaga/{{ $lkk->nama_lembaga }}">Detail</a>
            </div>
    @endforeach
</div>
<div class="row wow fadeInDownBig" data-wow-duration="4s">
    @foreach ($fks as $fk)
    <div class="col-12 col-sm-4 col-md-4 mb-4 mb-lg-5"> 
            <div class="image-container zoomIn-effect">
                <a href="#"><img width="50%" src="{{ asset($fk->logo) }}" alt="alt image text"></a> 
              </div>
              <center><h2 class="font-weight-bold mt-3 mb-2 font-18 semi-font"><a href="/lembaga/{{ $lkk->nama_lembaga }}" class="fables-second-text-color fables-second-hover-color">{{ $fk->nama_lembaga }}</a></h2></center>
              <p class="fables-forth-text-color font-14 mb-2">{{ $fk->description }}</p>
              <a class="btn fables-second-background-color text-white" href="/lembaga/{{ $lkk->nama_lembaga }}">Detail</a>
            </div>
    @endforeach
</div>
</div>
@endsection
