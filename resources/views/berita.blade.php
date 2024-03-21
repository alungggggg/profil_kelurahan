@extends('layouts.main')

@section('title', 'Berita')

@section('content')
<div class="container mt-5">
<table class="table table-responsive-lg">
            <tr class="table-secondary">
                <th>
                    Judul
                </th>
                <th>
                    Thumbnail
                </th>
                <th>
                    Deskripsi
                </th>
                <th>
                    Halaman
                </th>
            </tr>
    @foreach ($articles as $article)
    <tr>
                    
        <td><div class="title">{{ $article->title }}</div></td>
        <td><img src="{{ asset($article->thumbnail) }}" alt="" style="width:100px"></td>
        <td><div class="Content">{!! $article->content !!}</div></td>
        <td><a class="btn fables-second-background-color text-white" href="/berita/{{ $article->title }}">Link</a></td>
    @endforeach
</table>
</div>
@endsection
