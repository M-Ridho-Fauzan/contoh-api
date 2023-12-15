<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All</title>
</head>

<body>
    <h1>News Articles</h1>

    @foreach ($articles as $index => $article)
        <div>
            <a href="{{ route('news.show', $index) }}">
                <h2>{{ $article['title'] }}</h2>
            </a>
            <p>{{ $article['description'] }}</p>
        </div>
    @endforeach
</body>

</html>
