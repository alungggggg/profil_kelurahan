<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        @foreach ($articles as $article)
            <li>
                <div class="title">
                    {{ $article->title }}
                </div>
                <a href="/article/update/{{ $article->id }}">update</a>
                <a href="/article/delete/{{ $article->id }}">delete</a>
            </li>
        @endforeach
    </ul>

</body>

</html>
