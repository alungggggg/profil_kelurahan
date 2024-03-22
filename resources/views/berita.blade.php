@extends('layouts.main')

@section('title', 'Berita')

@section('content')

<div class="container mt-5">
    <div class="row container mb-0 mb-md-5">
    @foreach ($articles as $article)
           <div class="col-12 col-sm-6 col-lg-3 fables-product-block">
               <div class="card rounded-0 mb-4">
                   <div class="row">
                       <div class="fables-product-img col-12">
                          <center><img style="width:225px; height:225px; overflow:hidden; position:relative;" class="card-img-top rounded-0" src="{{ asset($article->thumbnail) }}" alt="dress fashion"></center>
                          <div class="fables-img-overlay">                                          
                              <ul class="nav fables-product-btns">
                                  <li><a href="" class="fables-product-btn"><span class="fables-iconeye"></span></a></li>
                                  <li><a href="" class="fables-product-btn"><span class="fables-iconcompare"></span></a></li>
                                  <li><button class="fables-product-btn"><span class="fables-iconheart"></span></button></li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-body col-12">
                        <h5 class="card-title mx-3">
                            <a href="#" class="font-15 font-weight-bold fables-second-text-color my-2 mx-3">{{ $article->title }}</a>
                        </h5>
                        <p class="card-text fables-fifth-text-color font-15 mx-3">{!! $article->content !!}</p>
                        <p class="fables-product-info"><a  href="/berita/{{ $article->title }}" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 p-2 px-4"> 
                        <span class="fables-btn-value">DETAIL</span></a></p>
                      </div>
                   </div>
                </div>
           </div> 
           @endforeach          
     </div>
</div>
@endsection