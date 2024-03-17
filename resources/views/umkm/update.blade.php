<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update|UMKM</title>
</head>

<body>
    {{-- @dd($toko['image'])     --}}
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="namaToko" placeholder="nama toko" value="{{ $toko['nama_toko'] }}">
        @error('namaToko')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <img src="{{ asset($toko['image']) }}" alt="" id="preview" style="width:200px;">
        <input type="file" name="image" id="img">
        @error('image')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input type="text" name="description" placeholder="description" value="{{ $toko['description'] }}">
        @error('description')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input type="text" name="location" placeholder="location" value="{{ $toko['location'] }}">
        @error('location')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input type="text" name="nomor" placeholder="nomor" value="{{ $toko['nomor'] }}">
        @error('nomor')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <button type="submit">SUBMIT</button>
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


</html>
