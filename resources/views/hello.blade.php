<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>Hello</h1>
<form action="{{ url('/thread/add') }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="name" value placeholder="なんJ">
    <input type="text" name="temp_name" value placeholder="風吹けば名無し">
    <input type="submit" name="送信">
</form>
</body>
</html>
