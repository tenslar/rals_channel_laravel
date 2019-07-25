<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>{{ $name }}</h1>
<h2>{{ $temp_name }}</h2>
<p><a href="{{ url('/thread/add') }}">戻る</a> </p>
</body>
</html>
