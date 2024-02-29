{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMKM Kelurahan ngampel</title>
</head>

<body>
    @foreach ($umkms as $umkm)
        {{ $umkm->nama_toko }}<br>
        {{ $umkm->description }}<br>
        <a href="{{ $umkm->location }}">lokasi</a>
        <a href="https://wa.me/{{ $umkm->nomor }}">Beli disini</a>
    @endforeach
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($umkms as $umkm)
        <div class="nama-toko">
            {{ $umkm->nama_toko }}
        </div>
        <div class="description">
            {{ $umkm->description }}
        </div>
        <div class="location">{{ $umkm->location }}</div>
        <div class="noHp">{{ $umkm->nomor }}</div>
    @endforeach
</body>

</html>
