@extends('layouts.mainadmin')

@section('title', 'Perbarui LKK')

@section('content')
<div class="container mt-5">
    <form class="form-row form-group" action="" method="post" enctype="multipart/form-data">

        @csrf
        @method('put')
        <input class="form-control mb-4 py-3 pl-5 font-15" type="text" name="nama_lembaga" value="{{ $lkk->nama_lembaga }}">
        @error('nama_lembaga')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <img src="{{ asset($lkk->logo) }}" alt="" id="preview" style="width:100px">
        <input class="form-control mb-4 py-3 pl-5 font-15" type="file" name="logo" id="logo">
        @error('logo')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input class="form-control mb-4 py-5 pl-5 font-15" type="text" name="description" value="{{ $lkk->description }}">
        @error('description')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <button class="btn fables-second-background-color text-white" type="submit">Perbarui LKK</button>
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