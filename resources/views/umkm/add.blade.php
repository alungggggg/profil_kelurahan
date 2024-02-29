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
        <input type="text" name="namaToko" placeholder="nama toko">
        <input type="file" name="image">
        <input type="text" name="description">
        <input type="text" name="location">
        <input type="text" name="nomor">
        <button type="submit">SUBMIT</button>
    </form>
</body>

</html>
