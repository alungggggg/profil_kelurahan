@extends('layouts.mainadmin')

@section('title', 'Tambah User')

@section('content')
    <div class="container mt-5">
        <form class="form-row form-group" action="" method="POST">
            @csrf
            @error('nama')
                <div class="form-text" style="color: red;">{{ $message }}</div>
            @enderror
            <input class="form-control mb-4 py-3 pl-5 font-15" type="text" name="name" value="{{ old('name') }}"
                placeholder="Masukkan Nama Pengguna">
            @error('email')
                <div class="form-text" style="color: red;">{{ $message }}</div>
            @enderror
            <input class="form-control mb-4 py-3 pl-5 font-15" type="email" name="email" value="{{ old('email') }}"
                placeholder="Masukkan Alamat Email">
            @error('password')
                <div class="form-text" style="color: red;">{{ $message }}</div>
            @enderror
            <input class="form-control mb-4 py-3 pl-5 font-15" type="password" name="password"
                placeholder="Masukkan Password">
            @error('lkk')
                <div class="form-text" style="color: red;">{{ $message }}</div>
            @enderror
            <label for="">LKK / Forum Kemasyarakatan</label>
            <select  class="form-control mb-4 py-3 pl-5 font-15" name="lkk">
                <option disabled>LKK</option>
                @foreach ($lkks as $lkk)
                    <option value="{{ $lkk->id }}" @if ($lkk->id == old('lkk')) selected @endif>
                        {{ $lkk->nama_lembaga }}</option>
                @endforeach
                <option disabled>Forum Kemasyarakatan</option>
                @foreach ($lkks->where('role_id', '=', 2) as $fk)
                    <option value="{{ $fk->id }}" @if ($fk->id == old('lkk')) selected @endif>
                        {{ $fk->nama_lembaga }}</option>
                @endforeach
            </select>
            
            <button class="btn fables-second-background-color text-white" type="submit">Tambah User</button>
        </form>
    </div>
@endsection
