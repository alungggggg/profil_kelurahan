@extends('layouts.mainadmin')

@section('title', 'Perbarui LKK')

@section('content')
    <div class="container mt-5">
        <form class="form-row form-group" action="" method="POST">
            @csrf
            @method('put')
            <label for="">
                Masukkan Nama Pengguna
            </label>
            @error('name')
                <div class="form-text col-lg-12" style="color: red; text-align: right">{{ $message }}</div>
            @enderror
            <input class="form-control mb-4 py-3 pl-5 font-15" type="text" name="name" value="{{ $user->name }}">
            <label for="">
                Masukkan Alamat Email
            </label>
            @error('email')
                <div class="form-text col-lg-12" style="color: red; text-align: right">{{ $message }}</div>
            @enderror
            <input class="form-control mb-4 py-3 pl-5 font-15" type="email" name="email" value="{{ $user->email }}">
            <label for="">
                LKK/Forum Kemasyarakatan
            </label>
            @error('lkk')
                <div class="form-text col-lg-12" style="color: red; text-align: right">{{ $message }}</div>
            @enderror
            <select class="form-control mb-4 pl-5 font-15" name="lkk">
                <option disabled>LKK</option>
                @foreach ($lkks->where('role_id', '=', 1) as $lkk)
                    <option value="{{ $lkk->id }}" @if ($lkk->id == $lkk->id) selected @endif>
                        {{ $lkk->nama_lembaga }}</option>
                @endforeach
                <option disabled>Forum Kemasyarakatan</option>
                @foreach ($lkks->where('role_id', '=', 2) as $fk)
                    <option value="{{ $fk->id }}" @if ($fk->id == $fk->id) selected @endif>
                        {{ $fk->nama_lembaga }}</option>
                @endforeach
            </select>
            <button class="btn fables-second-background-color text-white" type="submit">Perbarui User</button>
        </form>
        </body>
    </div>
@endsection
