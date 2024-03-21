@extends('layouts.mainadmin')

@section('title', 'UMKM Ngampel')

@section('content')
<div class="container mt-5">
    <div class="container">
        <div class="row mt-5">
            @if (Auth::user()->role_id == 2)
                <div class="col-6 col-md-3 mb-4 mb-lg-5">
                    <div class="card fables-team-block fables-team-data-hover fables-second-border-color mb-4 mb-sm-0">
                        <img class="w-100" src="{{ asset('/asset/image/alam.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5><a href="/lkk" class="fables-team-name fables-second-hover-color team-name">LKK</a>
                            </h5>
                            <p class="fables-team-pos mt-2 mb-3 italic">Lembaga</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-lg-5">
                    <div class="card fables-team-block fables-team-data-hover fables-second-border-color mb-4 mb-sm-0">
                        <img class="w-100" src="{{ asset('/asset/image/alam.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5><a href="/fk" class="fables-team-name fables-second-hover-color team-name">FK</a>
                            </h5>
                            <p class="fables-team-pos mt-2 mb-3 italic">Forum</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-lg-5">
                    <div class="card fables-team-block fables-team-data-hover fables-second-border-color mb-4 mb-sm-0">
                        <img class="w-100" src="{{ asset('/asset/image/alam.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5><a href="/user" class="fables-team-name fables-second-hover-color team-name">USER</a>
                            </h5>
                            <p class="fables-team-pos mt-2 mb-3 italic">Pengguna</p>
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-6 col-md-3 mb-4 mb-lg-5">
                <div class="card fables-team-block fables-team-data-hover fables-second-border-color mb-4 mb-sm-0">
                    <img class="w-100" src="{{ asset('/asset/image/alam.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5><a href="/article" class="fables-team-name fables-second-hover-color team-name">ARTICLE</a>
                        </h5>
                        <p class="fables-team-pos mt-2 mb-3 italic">Berita Terkini</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-lg-5">
                <div class="card fables-team-block fables-team-data-hover fables-second-border-color mb-4 mb-sm-0">
                    <img class="w-100" src="{{ asset('/asset/image/alam.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5><a href="/umkm" class="fables-team-name fables-second-hover-color team-name">UMKM</a>
                        </h5>
                        <p class="fables-team-pos mt-2 mb-3 italic">Kelurahan Ngampel</p>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection