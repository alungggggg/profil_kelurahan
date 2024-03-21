@extends('layouts.mainadmin')

@section('title', 'Artikel')

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
        @if (Auth::user()->role_id == 1)
            <a class="mt-4 btn fables-second-background-color text-white mb-4" href="/article/add">Tambah Artikel</a>
        @endif
        @if ($articles->count() === 0)
            tidak ada artikel
        @else
            <table class="table table-responsive-lg mt-3">
                <tr class="table-secondary">
                    <th>
                        Judul
                    </th>
                    <th>
                        Thumbnail
                    </th>
                    <th>
                        LKK
                    </th>
                    <th>
                        Publish At
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                @foreach ($articles as $article)
                    <tr>
                        <td>
                            {{ $article->title }}
                        </td>
                        <td>
                            <img src="{{ asset($article->thumbnail) }}" style="width:100px">
                        </td>
                        <td>
                            {{ $article->lkk['nama_lembaga'] }}
                        </td>
                        <td>
                            {{ $article->created_at }}
                        </td>

                        <td>
                            <a class="btn fables-second-background-color text-white"
                                href="/article/update/{{ $article->id }}">Update</a>
                            <a class="btn table-danger text-black" href="/article/delete/{{ $article->id }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            current page : {{ $articles->currentPage() }} <br />
            total data : {{ $articles->total() }} <br />
            {{ $articles->links() }}
        @endif

    </div>
@endsection
