<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La mia Prima Pagina in Laravel</title>
</head>
<body>
    <h1>Il mio nome è:  {{$nome}} {{$cognome}}</h1> 
    <!-- @for ($i = 0; $i < 10; $i++)
        <h1>The current value is {{ $i }}</h1> 
    @endfor -->

    <a href="{{ route ('forum') }}">Forum</a>
    <a href="{{ route ('blog') }}">Blog</a>
    <a href="{{ route ('community') }}">Community</a>
    <a href="{{ route ('about') }}">About</a>
</body>
</html>