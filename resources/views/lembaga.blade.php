@extends('layouts.main')

@section('title', 'Perbarui Forum Kemasyarakatan')

@section('content')
    {{-- @dd($lkks->count()) --}}

    @foreach ($lkks as $lkk)
        <div class="title">{{ $lkk->nama_lembaga }}</div>
        <img src="{{ asset($lkk->logo) }}" alt="" width="100px">
        <div class="description">{{ $lkk->description }}</div>
        <a href="/lembaga/{{ $lkk->nama_lembaga }}">detail</a>
    @endforeach

    @foreach ($fks as $fk)
        <div class="title">{{ $fk->nama_lembaga }}</div>
        <img src="{{ asset($fk->logo) }}" alt="" width="100px">
        <div class="description">{{ $fk->description }}</div>
    @endforeach
@endsection
