@extends('layouts.main')

@section('title', 'Lembaga')
@section('content')
    <div class="title">{{ $lembaga->nama_lembaga }}</div>
    <img src="{{ asset($lembaga->logo) }}" alt="" width="100px">
    <div class="nama-lembaga">{{ $lembaga->nama_lembaga }}</div>

    <div class="recomend">
        <h3>berita terkini</h3>
        @foreach ($articles as $article)
            <div class="title">{{ $article->title }}</div>
            <a href="/berita/{{ $article->title }}">link</a>
            <img src="{{ asset($article->thumbnail) }}" alt="">
        @endforeach
    </div>
@endsection
