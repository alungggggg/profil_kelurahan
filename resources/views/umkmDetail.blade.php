@extends('layouts.main')

@section('title', 'UMKM Ngampel')

@section('content')
    <div class="nama-toko">{{ $umkm->nama_toko }}</div>
    <img src="{{ asset($umkm->image) }}" alt="">
    <div class="description">
        {{ $umkm->description }}
    </div>
    <a href="{{ $umkm->location }}">lokasi</a>
    <a href="https://wa.me/{{ $umkm->nomor }}">lokasi</a>
@endsection
