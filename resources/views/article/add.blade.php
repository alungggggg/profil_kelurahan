<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <input class="form-control" type="text" placeholder="title" name="title" aria-label="default input example"
            value="{{ old('title') }}">
        @error('title')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <img src="" id="preview" alt="" width="75px">
        <input type="file" name="thumbnail" id="thumbnail">
        @error('thumbnail')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <textarea id="editor" type="text" name="description" value="{{ old('description') }}"></textarea>
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
</body>

</html>
