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
@foreach ($umkms as $umkm)
    {{ $umkm }}<br>
@endforeach


@if ($request != null)
    <br>current page : {{ $umkms->currentPage() }} <br />
    total data : {{ $umkms->total() }} <br />
    {{ $umkms->links() }}
@endif
</div>
@endsection