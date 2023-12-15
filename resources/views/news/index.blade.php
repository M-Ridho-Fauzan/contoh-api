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
            <p>Author: {{ $article['author'] }}</p>
            <p>Published At: {{ $article['publishedAt'] }}</p>
            <p>Source: {{ $article['source']['name'] }}</p>
            @if (isset($article['urlToImage']))
                <img src="{{ $article['urlToImage'] }}" width="300" alt="{{ $article['title'] }}"
                    style="max-width: 100%;">
            @endif
            <!-- Add more details as needed -->
        </div>
    @endforeach
</body>

</html>
