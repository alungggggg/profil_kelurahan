@extends('layouts.mainadmin')

@section('title', 'LKK')

@section('content')
    <div class="container mt-5">
        <form class="col-lg-12 row" action="">
            <input class="col-lg-10 form-control pl-5 font-15" type="text" name="search" value="{{ $request }}"
                placeholder="Masukkan kata kunci pencarian">
            <button class="col-lg-2 btn fables-second-background-color text-white" type="submit">CARI</button>
        </form>
        @if (session('message'))
            <div class="mt-4 alert alert-success" role="alert">{{ session('message') }}</div>
        @endif
        <a class="mt-4 btn fables-second-background-color text-white mb-4" href="/lkk/add">Tambah LKK</a>

        @if ($lkks->count() === 0)
            tidak ada lkk
        @else
            <table class="table table-responsive-lg">
                <tr class="table-secondary">
                    <th>
                        Nama Lembaga
                    </th>
                    <th>
                        Logo
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Action
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
                            <a class="btn fables-second-background-color text-white"
                                href="/lkk/update/{{ $lkk->id }}">Update</a>
                            <a class="btn table-danger text-black" href="/lkk/delete/{{ $lkk->id }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif

        <div class="btn btn-secondary">Current Page : {{ $lkks->currentPage() }} </div>
        <div class="btn btn-secondary">Total Data : {{ $lkks->total() }} </div><br /><br />
        {{ $lkks->links() }}
    </div>
@endsection
