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
        @method('put')
        <input type="text" name="name" value="{{ $user->name }}">
        @error('name')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <input type="email" name="email" value="{{ $user->email }}">
        @error('email')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <label for="">
            LKK/Forum Kemasyarakatan
        </label>
        <select name="lkk">
            @foreach ($lkks as $lkk)
                <option value="{{ $lkk->id }}" @if ($user->lkk_id == $lkk->id) selected @endif>
                    {{ $lkk->nama_lembaga }}</option>
            @endforeach
        </select>
        @error('lkk')
            <div class="form-text">{{ $message }}</div>
        @enderror
        <button type="submit">submit</button>
    </form>
</body>

</html>
