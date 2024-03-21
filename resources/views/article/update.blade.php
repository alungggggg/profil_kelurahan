@extends('layouts.mainadmin')

@section('title', 'Update Artikel')

@section('content')
<div class="container mt-5">
    <form class="form-row form-group" action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')  
        <button class="btn fables-second-background-color text-white mb-4" type="submit">Update Artikel</button>      
        <label for="">
            Judul Artikel
        </label>
        <input class="form-control mb-4 py-3 pl-5 font-15" type="text" placeholder="title" name="title" aria-label="default input example"
            value="{{ $article->title }}">
        @error('title')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <img src="{{ asset($article->thumbnail) }}" alt="" id="preview" style="width: 200px">
        <input class="form-control mb-4 py-3 pl-5 font-15" type="file" name="thumbnail" id="thumbnail">
        @error('thumbnail')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <textarea class="col-lg-12 form-control mb-4 py-3 pl-5 font-15" id="editor" type="text" name="description">
            {{ $article->content }}
        </textarea>
        @error('description')
            <div class="form-text">{{ $message }}</div>
        @enderror
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