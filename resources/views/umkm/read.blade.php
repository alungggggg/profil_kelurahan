@extends('layouts.mainadmin')

@section('title', 'UMKM Kelurahan Ngampel')

@section('content')
<div class="container mt-5">
    @foreach ($umkms as $umkm)
        {{ $umkm->nama_toko }}<br>
        {{ $umkm->description }}<br>
        <a href="{{ $umkm->location }}">lokasi</a>
        <a href="https://wa.me/{{ $umkm->nomor }}">Beli disini</a>
    @endforeach

    @if (session('message'))
        <div class="mt-4 alert alert-success" role="alert">{{ session('message') }}</div>
    @endif
    <form class="col-lg-12 row" action="" method="GET">
        <input class="col-lg-10 form-control pl-5 font-15" type="text" name="search" value="{{ $request }}" placeholder="Masukkan kata kunci pencarian">
        <button class="col-lg-2 btn fables-second-background-color text-white" type="submit">CARI</button>
    </form>
    <a class="mt-4 btn fables-second-background-color text-white" href="/umkm/add">Tambah UMKM</a>
    <table>
        <tr>
            <th>nama toko</th>
            <th>image</th>
            <th>desciption</th>
            <th>location</th>
            <th>nomor</th>
            <th>action</th>
        </tr>
        @foreach ($umkms as $umkm)
            <tr>
                <td>{{ $umkm->nama_toko }}</td>
                <td><img src="{{ asset($umkm->image) }}" alt="" style="width:75px"></td>
                <td>{{ $umkm->description }}</td>
                <td>{{ $umkm->location }} </td>
                <td>{{ $umkm->nomor }}</td>
                <td>
                    <a href="/umkm/update/{{ $umkm->id }}">update</a>
                    <a href="/umkm/delete/{{ $umkm->id }}">delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    current page : {{ $umkms->currentPage() }} <br />
    total data : {{ $umkms->total() }} <br />
    {{ $umkms->links() }}
</div>
@endsection