<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <input class="form-control" type="text" placeholder="title" name="title" aria-label="default input example"
            value="{{ $article->title }}">
        @error('title')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <img src="{{ asset($article->thumbnail) }}" alt="" style="width: 200px">
        <input type="file" name="thumbnail">
        @error('thumbnail')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <textarea id="editor" type="text" name="description">
            {{ $article->content }}
        </textarea>
        @error('description')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <button type="submit">SUBMIT</button>
    </form>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
