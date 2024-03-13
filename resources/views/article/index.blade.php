<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="text" name="search" value="{{ $request }}">
        <button type="submit">search</button>
    </form>
    <a href="/article/add">add</a>
    @if ($articles->count() === 0)
        tidak ada artikel
    @else
        <table>
            <tr>
                <th>
                    judul
                </th>
                <th>
                    thumbnail
                </th>
                <th>
                    lkk
                </th>
                <th>
                    publish at
                </th>
            </tr>
            @foreach ($articles as $article)
                <tr>
                    <td>
                        {{ $article->title }}
                    </td>
                    <td>
                        <img src="{{ asset($article->thumbnail) }}" style="width:100px">
                    </td>
                    <td>
                        {{ $article->lkk['nama_lembaga'] }}
                    </td>
                    <td>
                        {{ $article->created_at }}
                    </td>

                    <td>
                        <a href="/article/update/{{ $article->id }}">update</a>
                        <a href="/article/delete/{{ $article->id }}">delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
        current page : {{ $articles->currentPage() }} <br />
        total data : {{ $articles->total() }} <br />
        {{ $articles->links() }}
    @endif

</body>

</html>
