@extends('layouts.mainadmin')

@section('title', 'Perbarui LKK')

@section('content')
<div class="container mt-5">
    <form class="form-row form-group" action="" method="POST">
        @csrf
        <label for="">New Password</label>
        <input class="form-control mb-4 py-3 pl-5 font-15" type="password" name="password">
        @error('password')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <label for="">Confirm Password</label>
        <input class="form-control mb-4 py-3 pl-5 font-15" type="password" name="confirmPass">
        @error('confirmPass')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <button class="btn fables-second-background-color text-white" type="submit">Simpan Perubahan Kata Sandi</button>
    </form>

</div>
@endsection