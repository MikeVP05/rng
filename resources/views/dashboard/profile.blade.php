<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

    <title>Profiel</title>
</head>
<body>
    @include('templates.navbar')
    @if(Auth::check())
        <h1>Welkom {{ Auth::user()->name }}</h1>
        <p>Email: {{ Auth::user()->email }}</p>
        <p>Balans: {{ Auth::user()->balance }}</p>
    @else
        <h1>U bent niet ingelogd</h1>
    @endif
    @include('templates.footer')

</body>
</html>