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
    <a href="{{ $article['url'] }}" target="_blank">Read more</a>
</body>

</html>
