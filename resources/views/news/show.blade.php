<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $article['title'] }}</title>
</head>

<body>
    <h1>{{ $article['title'] }}</h1>
    <p>{{ $article['content'] }}</p>
    <p>Author: {{ $article['author'] }}</p>
    <p>Published At: {{ $article['publishedAt'] }}</p>
    <p>Source: {{ $article['source']['name'] }}</p>
    @if (isset($article['urlToImage']))
        <img src="{{ $article['urlToImage'] }}" alt="{{ $article['title'] }}" style="max-width: 100%;">
    @endif
    <a href="{{ $article['url'] }}" target="_blank">Read more</a>
    <!-- Add more details as needed -->
</body>

</html>
