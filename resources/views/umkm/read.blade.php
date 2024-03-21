@extends('layouts.mainadmin')

@section('title', 'UMKM Kelurahan Ngampel')

@section('content')
    <div class="container mt-5">

        @if (session('message'))
            <div class="mt-4 alert alert-success" role="alert">{{ session('message') }}</div>
        @endif
        <form class="col-lg-12 row" action="" method="GET">
            <input class="col-lg-10 form-control pl-5 font-15" type="text" name="search" value="{{ $request }}"
                placeholder="Masukkan kata kunci pencarian">
            <button class="col-lg-2 btn fables-second-background-color text-white" type="submit">CARI</button>
        </form>
        <a class="mt-4 btn fables-second-background-color text-white mb-4" href="/umkm/add">Tambah UMKM</a>
        <table class="table table-responsive-lg">
            <tr class="table-secondary">
                <th>Nama Toko</th>
                <th>Logo</th>
                <th>Desciption</th>
                <th>Location</th>
                <th>Nomor HP</th>
                <th>Action</th>
            </tr>
            @foreach ($umkms as $umkm)
                <tr>
                    <td>{{ $umkm->nama_toko }}</td>
                    <td><img src="{{ asset($umkm->image) }}" alt="" style="width:100px"></td>
                    <td>{{ $umkm->description }}</td>
                    <td>{{ $umkm->location }} </td>
                    <td>{{ $umkm->nomor }}</td>
                    <td>
                        <a class="btn fables-second-background-color text-white"
                            href="/umkm/update/{{ $umkm->id }}">Update</a>
                        <a class="btn table-danger text-black" href="/umkm/delete/{{ $umkm->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
        current page : {{ $umkms->currentPage() }} <br />
        total data : {{ $umkms->total() }} <br />
        {{ $umkms->links() }}
    </div>
@endsection
