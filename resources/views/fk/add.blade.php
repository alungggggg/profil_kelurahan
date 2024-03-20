@extends('layouts.mainadmin')

@section('title', 'Tambah Forum Kemasyarakatan')

@section('content')
<div class="container mt-5">
    <form class="form-row form-group" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <input class="form-control mb-4 py-3 pl-5 font-15" type="text" name="nama_lembaga" value="{{ old('nama_lembaga') }}" placeholder="Masukkan Nama Lembaga">
        @error('nama_lembaga')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <img src="" alt="" id="preview" width="75px">
        <input class="form-control mb-4 py-3 pl-5 font-15" type="file" name="logo" id="logo" placeholder="Masukkan Logo">
        @error('logo')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input class="form-control mb-4 py-5 pl-5 font-15" type="text" name="description" value="{{ old('description') }}" placeholder="Masukkan Deskripsi">
        @error('description')
            <div class="form-text">{{ $message }}</div>
        @enderror

        <button class="btn fables-second-background-color text-white" type="submit">Tambah Forum Kemasyarakatan</button>
    </form>
    @push('scripts')
        <script>
            const reader = new FileReader();
            const fileInput = document.getElementById("logo");
            const img = document.getElementById("preview");
            reader.onload = e => {
                img.src = e.target.result;
            }
            fileInput.addEventListener('change', e => {
                const f = e.target.files[0];
                reader.readAsDataURL(f);
            })
        </script>
    @endpush
    @stack('scripts')
</div>
@endsection
