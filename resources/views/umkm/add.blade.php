@extends('layouts.mainadmin')

@section('title', 'Tambah UMKM')

@section('content')
<div class="container mt-5">
    <form class="form-row form-group" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <input class="form-control mb-4 py-3 pl-5 font-15" type="text" name="namaToko" value="{{ old('namaToko') }}" placeholder="Masukkan Nama Toko">
        @error('namaToko')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <img src="" alt="" id="preview" style="width:75px">
        <input class="form-control mb-4 py-3 pl-5 font-15" type="file" name="image" id="img" placeholder="Masukkan Logo">
        @error('image')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <textarea class="form-control mb-4 py-5 pl-5 font-15" type="text" name="description" value="{{ old('description') }}" placeholder="Masukkan Deskripsi"></textarea>
        @error('description')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input class="form-control mb-4 py-3 pl-5 font-15" type="text" name="location" value="{{ old('location') }}" placeholder="Masukkan Lokasi Toko">
        @error('location')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input class="form-control mb-4 py-3 pl-5 font-15" type="text" name="nomor" value="{{ old('nomor') }}" placeholder="Masukkan No. Telephon">
        @error('location')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <button class="btn fables-second-background-color text-white" type="submit">Tambah UMKM</button>
    </form>
    @push('scripts')
        <script>
            const reader = new FileReader();
            const fileInput = document.getElementById("img");
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