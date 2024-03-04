<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMKM</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="namaToko" placeholder="nama toko" value="{{ old('namaToko') }}">
        @error('namaToko')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input type="file" name="image">
        @error('image')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input type="text" name="description" value="{{ old('description') }}">
        @error('description')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input type="text" name="location" value="{{ old('location') }}">
        @error('location')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input type="text" name="nomor" value="{{ old('nomor') }}">
        @error('location')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <button type="submit">SUBMIT</button>
    </form>
</body>

</html>
