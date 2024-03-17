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
    @if (session('message'))
        <div class="alert">{{ session('message') }}</div>
    @endif
    <form action="" method="GET">
        <input type="text" name="search" value="{{ $request }}">
        <button type="submit">search</button>
    </form>
    <a href="/umkm/add">add</a>
    <table>
        <tr>
            <th>nama toko</th>
            <th>image</th>
            <th>desciption</th>
            <th>location</th>
            <th>nomor</th>
            <th>action</th>
        </tr>
        @foreach ($umkms as $umkm)
            <tr>
                <td>{{ $umkm->nama_toko }}</td>
                <td><img src="{{ asset($umkm->image) }}" alt="" style="width:75px"></td>
                <td>{{ $umkm->description }}</td>
                <td>{{ $umkm->location }} </td>
                <td>{{ $umkm->nomor }}</td>
                <td>
                    <a href="/umkm/update/{{ $umkm->id }}">update</a>
                    <a href="/umkm/delete/{{ $umkm->id }}">delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    current page : {{ $umkms->currentPage() }} <br />
    total data : {{ $umkms->total() }} <br />
    {{ $umkms->links() }}
</body>

</html>
