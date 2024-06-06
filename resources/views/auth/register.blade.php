<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <title>Document</title>
</head>
<body>
    @include('templates.navbar')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="email" name="email" placeholder="E-mail">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Register</button>
    </form>
    {{  $errors->first('email'); }}
    {{  $errors->first('username'); }}
    {{  $errors->first('password'); }}
</body>
</html>