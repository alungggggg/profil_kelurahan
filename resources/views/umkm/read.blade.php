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
        @if ($umkms->count() === 0)
            <div class="alert alert-danger">tidak ada lkk </div>
        @else
            <table class="table table-responsive-lg">
                <tr class="table-secondary">
                    <th>Nama Toko</th>
                    <th>Logo</th>
                    <th>Desciption</th>
                    <th>Location</th>
                    <th>Nomor HP</th>
                    <th>instagram</th>
                    <th>facebook</th>
                    <th>Action</th>
                </tr>
                @foreach ($umkms as $umkm)
                    <tr>
                        <td>{{ $umkm->nama_toko }}</td>
                        <td><img src="{{ asset($umkm->image) }}" alt="" style="width:75px"></td>
                        <td>{{ $umkm->description }}</td>
                        <td>{{ substr($umkm->location, 0, 50) }}... </td>
                        <td>{{ $umkm->nomor }}</td>
                        <td>
                            @if (!$umkm->instagram)
                                Null
                            @else
                                had
                            @endif
                        </td>
                        <td>
                            @if (!$umkm->facebook)
                                Null
                            @else
                                had
                            @endif
                        </td>
                        <td>
                            <a class="btn fables-second-background-color text-white"
                                href="/umkm/update/{{ $umkm->id }}">Update</a>
                            <a class="btn table-danger text-black" href="/umkm/delete/{{ $umkm->id }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif

        <div class="btn btn-secondary">Current Page : {{ $umkms->currentPage() }} </div>
        <div class="btn btn-secondary">Total Data : {{ $umkms->total() }} </div><br /><br />
        {{ $umkms->links() }}
    </div>
@endsection
