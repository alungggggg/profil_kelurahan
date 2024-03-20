@extends('layouts.mainadmin')

@section('title', 'User')

@section('content')
<div class="container mt-5">
    @if (session('message'))
        <div class="mt-4 alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <form class="col-lg-12 row" action="" method="GET">
        <input class="col-lg-10 form-control pl-5 font-15" type="text" name="search" value="{{ $request }}" placeholder="Masukkan kata kunci pencarian">
        <button class="col-lg-2 btn fables-second-background-color text-white" type="submit">CARI</button>
    </form>
    <a class="mt-4 btn fables-second-background-color text-white mb-4" href="/user/add">Tambah User</a>

    @if ($users->count() === 0)
        tidak ada user
    @else
        <table class="table table-responsive-lg">
            <tr class="table-secondary">
                <th>Name</th>
                <th>Email</th>
                <th>LKK</th>
                <th></th>
                <th>Action</th>
                <th></th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->lkk_id }}</td>
                    <td><a class="btn fables-second-background-color text-white" href="user/update/{{ $user->id }}">Update</a></td>
                    <td><a class="btn table-danger text-black" href="user/delete/{{ $user->id }}">Delete</a></td>
                    <td><a class="btn table-success text-black" href="user/update/password/{{ $user->id }}">Ganti Password</a></td>
                </tr>
            @endforeach
        </table>
        current page : {{ $users->currentPage() }} <br />
        total data : {{ $users->total() }} <br />
        {{ $users->links() }}
    @endif

</div>
@endsection