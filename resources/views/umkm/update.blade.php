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
        <img src="{{ asset($toko['image']) }}" alt="" style="width:200px;">
        <input type="file" name="image">
        <input type="text" name="description" placeholder="description" value="{{ $toko['description'] }}">
        <input type="text" name="location" placeholder="location" value="{{ $toko['location'] }}">
        <input type="text" name="nomor" placeholder="nomor" value="{{ $toko['nomor'] }}">
        <button type="submit">SUBMIT</button>
    </form>
</body>

</html>
