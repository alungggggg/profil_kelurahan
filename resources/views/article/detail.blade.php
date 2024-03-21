@extends('layouts.mainadmin')

@section('title', 'Tambah Forum Kemasyarakatan')

@section('content')
<div class="container mt-5">
{{-- @dd($article->content); --}}
{!! $article->content !!}
</div>
@endsection