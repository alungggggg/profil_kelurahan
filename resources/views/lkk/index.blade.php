<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LKK</title>
</head>

<body>
    @foreach ($lkks as $lkk)
        {{ $lkk->nama_lembaga }}
        {{ $lkk->logo }}
        {{ $lkk->description }}
    @endforeach
</body>

</html>
