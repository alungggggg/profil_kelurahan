@extends('layouts.main')

@section('title', 'LKK')

@section('content')
<div class="container mt-5">
    <form class="col-lg-12 row" action="">
        <input class="col-lg-10 form-control pl-5 font-15" type="text" name="search" value="{{ $request }}" placeholder="Masukkan kata kunci pencarian">
        <button class="col-lg-2 btn fables-second-background-color text-white" type="submit">CARI</button>
    </form>
    <a class="mt-4 btn fables-second-background-color text-white" href="/lkk/add">Tambah LKK</a>
    @if (session('message'))
        <div class="mt-4 alert alert-success" role="alert">{{ session('message') }}</div>
    @endif
    @if ($lkks->count() === 0)
        tidak ada lkk
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

            @foreach ($lkks as $lkk)
                <tr>
                    <td>{{ $lkk->nama_lembaga }}</td>
                    <td>
                        <img src="{{ asset($lkk->logo) }}" alt="" width="75px">
                    </td>
                    <td>{{ $lkk->description }}</td>
                    <td>
                        <a href="/lkk/update/{{ $lkk->id }}">update</a>
                        <a href="/lkk/delete/{{ $lkk->id }}">delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

    current page : {{ $lkks->currentPage() }} <br />
    total data : {{ $lkks->total() }} <br />
    {{ $lkks->links() }}
</div>
@endsection