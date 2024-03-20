@extends('layouts.main')

@section('title', $article->title . ' = ' . $article->lkk['nama_lembaga'])

@section('content')
    <div class="title">{{ $article->title }} - {{ $article->lkk['nama_lembaga'] }}</div>
    <div class="created_at">{{ $article->created_at }}</div>
    <img src="{{ asset($article->thumbnail) }}" alt="">
    <div class="description">{!! $article->content !!}</div>

    <div class="recomend">mungkin anda suka</div>
    @foreach ($articles as $articles)
        <div class="title">{{ $articles->title }}</div>
        <a href="/berita/{{ $articles->title }}">link</a>
        <img src="{{ asset($articles->thumbnail) }}" alt="">
    @endforeach
@endsection
