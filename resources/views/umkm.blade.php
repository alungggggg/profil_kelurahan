@extends('layouts.main')

@section('title', 'UMKM Ngampel')

@section('content')

    <div class="container mt-5">
        <form class="col-lg-12 row" action="" method="GET">
            <input class="col-lg-10 form-control pl-5 font-15 mb-4" type="text" name="search" value="{{ $request }}"
                placeholder="Masukkan kata kunci pencarian">
            <button class="col-lg-2 btn fables-second-background-color text-white mb-4" type="CARI">CARI</button>
        </form>
        @if ($umkms->count() == 0)
            tidak ada umkm
        @endif
        <div class="row container mb-0 mb-md-5">
            @foreach ($umkms as $umkm)
                <div class="col-12 col-sm-6 col-lg-3 fables-product-block">
                    <div class="card rounded-0 mb-4">
                        <div class="row">
                            <div class="fables-product-img col-12">
                                <center><img style="width:225px; height:225px; overflow:hidden; position:relative;"
                                        class="card-img-top rounded-0" src="{{ asset($umkm->image) }}" alt="dress fashion">
                                </center>
                                <div class="fables-img-overlay">
                                    <ul class="nav fables-product-btns">
                                        <li><a href="" class="fables-product-btn"><span
                                                    class="fables-iconeye"></span></a></li>
                                        <li><a href="" class="fables-product-btn"><span
                                                    class="fables-iconcompare"></span></a></li>
                                        <li><button class="fables-product-btn"><span
                                                    class="fables-iconheart"></span></button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body col-12">
                                <h5 class="card-title mx-3">
                                    <a href="#"
                                        class="font-15 font-weight-bold fables-second-text-color my-2 mx-3">{{ $umkm->nama_toko }}</a>
                                </h5>
                                <p class="card-text fables-fifth-text-color font-15 mx-3 mb-2">
                                    {{ substr($umkm->description, 0, 100) }}@if (strlen($umkm->description) > 100)
                                        ...
                                    @endif
                                </p>
                                <a class="btn fables-second-background-color text-white" href="{{ $umkm->location }}"
                                    target="_blank">Location</a>
                                <a class="btn btn-success text-white" href="https://wa.me/{{ $umkm->nomor }}"
                                    target="_blank">Order
                                    Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>



        @if ($request != null)
            <br>current page : {{ $umkms->currentPage() }} <br />
            total data : {{ $umkms->total() }} <br />
            {{ $umkms->links() }}
        @endif
    </div>
@endsection
