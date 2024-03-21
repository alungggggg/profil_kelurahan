@extends('layouts.mainadmin')

@section('title', 'UMKM Ngampel')

@section('content')
<div class="container mt-5">
<form class="col-lg-12 row" action="" method="GET">
    <input class="col-lg-10 form-control pl-5 font-15" type="text" name="search" value="{{ $request }}" placeholder="Masukkan kata kunci pencarian">
    <button class="col-lg-2 btn fables-second-background-color text-white" type="CARI">CARI</button>
</form>
@if ($umkms->count() == 0)
    tidak ada umkm
@endif
<table class="table table-responsive-lg">
        <tr class="table-secondary">
            <th>Nama Toko</th>
            <th>Logo</th>
            <th>Desciption</th>
            <th>Location</th>
            <th>Nomor HP</th>
        </tr>
@foreach ($umkms as $umkm)
    <div class="nama-toko">{{ $umkm->nama_toko }}</div>
    <img src="{{ asset($umkm->image) }}" alt="">
    <div class="description">{{ $umkm->description }}</div>
    <a href="{{ $umkm->location }}">lokasi</a>
    <a href="wa.me/{{ $umkm->nomor }}">nomor </a>
    <br>
@endforeach
</table>

@if ($request != null)
    <br>current page : {{ $umkms->currentPage() }} <br />
    total data : {{ $umkms->total() }} <br />
    {{ $umkms->links() }}
@endif
</div>
@endsection