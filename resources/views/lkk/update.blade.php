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
        @error('nama_lembaga')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <img src="{{ asset($lkk->logo) }}" alt="" style="width:100px">
        <input type="file" name="logo">
        @error('logo')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input type="text" name="description" value="{{ $lkk->description }}">
        @error('description')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <select name="role_id">
            <option value="1">LKK</option>
            <option value="2">Forum Kemasyarakatan</option>
        </select>
        @error('role_id')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <button type="submit">submit</button>
    </form>
</body>

</html>
