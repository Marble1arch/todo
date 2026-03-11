<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
@auth
<x-navigation></x-navigation>
    <p>Sveiks, {{ Auth::user()->first_name}}</p>
    <form action="logout">
        @csrf
        @method ('destroy')
        <button>Logout</button>
    </form>
@endauth
</body>
</html>