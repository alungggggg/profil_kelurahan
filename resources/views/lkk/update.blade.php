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
        <input type="text" name="nama_lembaga" value="{{ $lkk->nama_lembaga }}">
        <img src="{{ asset($lkk->logo) }}" alt="" style="width:100px">
        <input type="file" name="logo">
        <input type="text" name="description" value="{{$lkk->description}}">
        <button type="submit">submit</button>
    </form>
</body>

</html>
