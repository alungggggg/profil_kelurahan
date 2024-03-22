@extends('layouts.mainadmin')

@section('title', 'Tambah Artikel')

@section('content')
<div class="container mt-5">
    <form class="form-row form-group" action="" method="post" enctype="multipart/form-data">
        @csrf
        @error('title')
            <div class="form-text" style="color: red;">{{ $message }}</div>
        @enderror
        <input class="form-control mb-4 py-3 pl-5 font-15" type="text" placeholder="Masukkan Judul" name="title" aria-label="default input example"
            value="{{ old('title') }}">
        @error('thumbnail')
            <div class="form-text" style="color: red;">{{ $message }}</div>
        @enderror
        <img src="" id="preview" alt="" width="75px">
        <input class="form-control mb-4 py-3 pl-5 font-15" type="file" name="thumbnail" id="thumbnail">
        @error('description')
            <div class="form-text" style="color: red;">{{ $message }}</div>
        @enderror
        <textarea id="editor" type="text" name="description" value="{{ old('description') }}"></textarea>
        <button class="btn fables-second-background-color text-white" type="submit">Tambah Artikel</button>
    </form>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
        const reader = new FileReader();
        const fileInput = document.getElementById("thumbnail");
        const img = document.getElementById("preview");
        reader.onload = e => {
            img.src = e.target.result;
        }
        fileInput.addEventListener('change', e => {
            const f = e.target.files[0];
            reader.readAsDataURL(f);
        })
    </script>
</div>
@endsection