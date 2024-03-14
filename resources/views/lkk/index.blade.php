<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LKK</title>
</head>

<body>
    <form action="">
        <input type="text" name="search" value="{{ $request }}">
        <button type="submit">search</button>
    </form>
    <a href="/lkk/add">add</a>
    @if (session('message'))
        <div class="alert">{{ session('message') }}</div>
    @endif
    @if ($lkks->count() === 0)
        tidak ada lkk
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

            @foreach ($lkks as $lkk)
                <tr>
                    <td>{{ $lkk->nama_lembaga }}</td>
                    <td>
                        <img src="{{ asset($lkk->logo) }}" alt="" width="75px">
                    </td>
                    <td>{{ $lkk->description }}</td>
                    <td>
                        <a href="/lkk/update/{{ $lkk->id }}">update</a>
                        <a href="/lkk/delete/{{ $lkk->id }}">delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

    current page : {{ $lkks->currentPage() }} <br />
    total data : {{ $lkks->total() }} <br />
    {{ $lkks->links() }}

</body>

</html>
