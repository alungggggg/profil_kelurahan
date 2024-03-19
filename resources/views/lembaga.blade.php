@extends('layouts.main')

@section('title', 'Perbarui Forum Kemasyarakatan')

@section('content')
{{-- @dd($lkks->count()) --}}
@foreach ($lkks as $lkk)
    {{ $lkk->nama_lembaga }}
    {{ $lkk->article }}
    <br>
@endforeach
@endsection