@extends('layouts.main')

@section('title', 'Berita')

@section('content')
    @foreach ($articles as $article)
        <div class="title">{{ $article->title }}</div>
        <img src="{{ asset($article->thumbnail) }}" alt="">
        <div class="Content">{!! $article->content !!}</div>
        <a href="/berita/{{ $article->title }}">link</a>
    @endforeach
@endsection
