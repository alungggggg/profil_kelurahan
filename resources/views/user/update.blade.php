@extends('layouts.main')

@section('title', 'Perbarui LKK')

@section('content')
<div class="container mt-5">
    <form class="form-row form-group" action="" method="POST">
        @csrf
        @method('put')
        <input class="form-control mb-4 py-3 pl-5 font-15" type="text" name="name" value="{{ $user->name }}">
        @error('name')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input class="form-control mb-4 py-3 pl-5 font-15" type="email" name="email" value="{{ $user->email }}">
        @error('email')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <label for="">
            LKK/Forum Kemasyarakatan
        </label>
        <select class="form-control mb-4 py-3 pl-5 font-15" name="lkk">
            @foreach ($lkks as $lkk)
                <option value="{{ $lkk->id }}" @if ($user->lkk_id == $lkk->id) selected @endif>
                    {{ $lkk->nama_lembaga }}</option>
            @endforeach
        </select>
        @error('lkk')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <button class="btn fables-second-background-color text-white" type="submit">Perbarui User</button>
    </form>
</body>
</div>
@endsection