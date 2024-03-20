@extends('layouts.mainadmin')

@section('title', 'Forum Kemasyarakatan')

@section('content')
<div class="container mt-5">
    <form class="col-lg-12 row" action="">
        <input class="col-lg-10 form-control pl-5 font-15" type="text" name="search" value="{{ $request }}" placeholder="Masukkan kata kunci pencarian">
        <button class="col-lg-2 btn fables-second-background-color text-white" type="submit">CARI</button>
    </form>
    <a class="mt-4 btn fables-second-background-color text-white" href="/fk/add">Tambah Forum Kemasyarakatan</a>
    @if (session('message'))
        <div class="mt-4 alert alert-success" role="alert">{{ session('message') }}</div>
    @endif
    @if ($fks->count() === 0)
        tidak ada forum kemasyarakatan
    @else
        <table>
            <tr>
                <th>
                    Nama Lembaga
                </th>
                <th>
                    Logo
                </th>
                <th>
                    description
                </th>
                <th>
                    action
                </th>
            </tr>

            @foreach ($fks as $fk)
                <tr>
                    <td>{{ $fk->nama_lembaga }}</td>
                    <td>
                        <img src="{{ asset($fk->logo) }}" alt="" width="100px">
                    </td>
                    <td>{{ $fk->description }}</td>
                    <td>
                        <a href="/fk/update/{{ $fk->id }}">update</a>
                        <a href="/fk/delete/{{ $fk->id }}">delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
        current page : {{ $fks->currentPage() }} <br />
        total data : {{ $fks->total() }} <br />
        {{ $fks->links() }}
    @endif
</div>
@endsection