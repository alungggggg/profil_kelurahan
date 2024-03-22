@extends('layouts.mainadmin')

@section('title', 'Perbarui Forum Kemasyarakatan')

@section('content')
<div class="container mt-5">
    <form class="form-row form-group" action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="">
            Nama Lembaga
        </label>
        @error('nama_lembaga')
            <div class="form-text col-lg-12" style="color: red; text-align: right">{{ $message }}</div>
        @enderror
        <input class="form-control mb-4 py-3 pl-5 font-15" type="text" name="nama_lembaga" value="{{ $fk->nama_lembaga }}">
        @error('logo')
            <div class="form-text col-lg-12" style="color: red; text-align: right">{{ $message }}</div>
        @enderror
        <img src="{{ asset($fk->logo) }}" alt="" id="preview" style="width:100px">
        <input class="form-control mb-4 py-3 pl-5 font-15" type="file" name="logo" id="logo">
        <label for="">
            Deskripsi
        </label>
        @error('description')
            <div class="form-text col-lg-12" style="color: red; text-align: right">{{ $message }}</div>
        @enderror
        <textarea class="form-control mb-4 py-5 pl-5 font-15" type="text" name="description" value="{{ $fk->description }}"></textarea>
        <button class="btn fables-second-background-color text-white" type="submit">Perbarui Forum Kemasyarakatan</button>
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