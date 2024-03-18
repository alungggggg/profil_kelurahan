<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fk</title>
</head>

<body>

    <form action="">
        <input type="text" name="search" value="{{ $request }}">
        <button type="submit">search</button>
    </form>
    <a href="/fk/add">add</a>
    @if (session('message'))
        <div class="alert">{{ session('message') }}</div>
    @endif
    @if ($fks->count() === 0)
        tidak ada forum kemasyarakatan
    @else
        <table>
            <tr>
                <th>
                    Nama Lembaga
                </th>
                <th>
                    Logo
                </th>
                <th>
                    description
                </th>
                <th>
                    action
                </th>
            </tr>

            @foreach ($fks as $fk)
                <tr>
                    <td>{{ $fk->nama_lembaga }}</td>
                    <td>
                        <img src="{{ asset($fk->logo) }}" alt="" width="100px">
                    </td>
                    <td>{{ $fk->description }}</td>
                    <td>
                        <a href="/fk/update/{{ $fk->id }}">update</a>
                        <a href="/fk/delete/{{ $fk->id }}">delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
        current page : {{ $fks->currentPage() }} <br />
        total data : {{ $fks->total() }} <br />
        {{ $fks->links() }}
    @endif

</body>

</html>
