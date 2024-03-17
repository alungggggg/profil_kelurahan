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
        <div class="alert">
            {{ session('message') }}
        </div>
    @endif
    <form action="" method="GET">
        <input type="text" name="search" value="{{ $request }}">
        <button type="submit">search</button>
    </form>
    <a href="/user/add">add</a>

    @if ($users->count() === 0)
        tidak ada user
    @else
        <table>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>lkk</th>
                <th>action</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->lkk_id }}</td>
                    <td><a href="user/update/{{ $user->id }}">update</a></td>
                    <td><a href="user/delete/{{ $user->id }}">delete</a></td>
                    <td><a href="user/update/password/{{ $user->id }}">ganti password</a></td>
                </tr>
            @endforeach
        </table>
        current page : {{ $users->currentPage() }} <br />
        total data : {{ $users->total() }} <br />
        {{ $users->links() }}
    @endif

</body>

</html>
