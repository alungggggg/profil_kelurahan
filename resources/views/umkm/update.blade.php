@extends('layouts.main')

@section('title', 'Perbarui LKK')

@section('content')
<div class="container mt-5">
    {{-- @dd($toko['image'])     --}}
    <form class="form-row form-group" action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input class="form-control mb-4 py-3 pl-5 font-15" type="text" name="namaToko" placeholder="nama toko" value="{{ $toko['nama_toko'] }}">
        @error('namaToko')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <img src="{{ asset($toko['image']) }}" alt="" id="preview" style="width:200px;">
        <input class="form-control mb-4 py-3 pl-5 font-15" type="file" name="image" id="img">
        @error('image')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input class="form-control mb-4 py-3 pl-5 font-15" type="text" name="description" placeholder="description" value="{{ $toko['description'] }}">
        @error('description')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input class="form-control mb-4 py-3 pl-5 font-15" type="text" name="location" placeholder="location" value="{{ $toko['location'] }}">
        @error('location')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input class="form-control mb-4 py-3 pl-5 font-15" type="text" name="nomor" placeholder="nomor" value="{{ $toko['nomor'] }}">
        @error('nomor')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <button class="btn fables-second-background-color text-white" type="submit">Perbarui UMKM</button>
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
</body>
@endsection