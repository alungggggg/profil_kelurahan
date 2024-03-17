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
        <input type="text" name="nama_lembaga" value="{{ $fk->nama_lembaga }}">
        @error('nama_lembaga')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <img src="{{ asset($fk->logo) }}" alt="" id="preview" style="width:100px">
        <input type="file" name="logo" id="logo">
        @error('logo')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input type="text" name="description" value="{{ $fk->description }}">
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
