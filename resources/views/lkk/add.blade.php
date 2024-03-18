<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nama_lembaga" value="{{ old('nama_lembaga') }}">
        @error('nama_lembaga')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <img src="" alt="" id="preview" style="width:75px">
        <input type="file" name="logo" id="logo">
        @error('logo')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input type="text" name="description" value="{{ old('description') }}">
        @error('description')
            <div class="form-text">{{ $message }}</div>
        @enderror

        <button type="submit">submit</button>
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
</body>

</html>
