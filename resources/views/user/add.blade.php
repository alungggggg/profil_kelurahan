<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}">
        @error('nama')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input type="password" name="password">
        @error('password')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <label for="">LKK / Forum Kemasyarakatan</label>
        <select name="lkk">
            <option disabled>LKK</option>
            @foreach ($lkks->where('role_id', '=', 1) as $lkk)
                <option value="{{ $lkk->id }}" @if ($lkk->id == old('lkk')) selected @endif>
                    {{ $lkk->nama_lembaga }}</option>
            @endforeach
            <option disabled>Forum Kemasyarakatan</option>
            @foreach ($lkks->where('role_id', '=', 2) as $fk)
                <option value="{{ $fk->id }}" @if ($fk->id == old('lkk')) selected @endif>
                    {{ $fk->nama_lembaga }}</option>
            @endforeach
        </select>
        @error('lkk')
            <div class="form-text">{{ $message }}</div>
        @enderror

        <button type="submit">submit</button>
    </form>
</body>

</html>
