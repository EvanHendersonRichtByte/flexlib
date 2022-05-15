<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

    <title>FlexLib</title>

</head>

<body>
    <nav class="flex justify-center p-4 bg drop-shadow-xl">
        <a class="ml-4" href="/dashboard">Dashboard</a>
        <a class="ml-4" href="/books">Books</a>
        <a class="ml-4" href="/profile">Profile</a>
    </nav>
</body>

</html>