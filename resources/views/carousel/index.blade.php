@extends('layouts.mainadmin')

@section('title', 'Forum Kemasyarakatan')

@section('content')
    <a href="/carousel-image/add">add</a>
    @if (session('message'))
        <div class="mt-4 alert alert-success" role="alert">{{ session('message') }}</div>
    @endif
    @if ($carousels->count() === 0)
        <div class="alert alert-danger">tidak ada carousel image</div>
    @else
        <table>
            <tr>
                <th>No.</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($carousels as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ $item->image }}" alt="" width="100px"></td>
                    <td>
                        <a href="/carousel-image/update/{{ $item->id }}">update</a>
                        <a href="/carousel-image/delete/{{ $item->id }}">delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
