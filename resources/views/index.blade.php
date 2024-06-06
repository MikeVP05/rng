<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" >
    </head>
    <body>
        <div class="navbar">
            <div class="navbar-brand">
                <a href="/">
                    <img src="{{ asset('media/RNG_lion.png') }}">
                </a>
            </div>
            <div class="navbar-hrefs">
                <a class="navbar-href" href="/login">Inloggen</a>
                <a class="navbar-black" href="/register">Aanmelden</a>
            </div>
        </div>

        <div class="banner">
            <h3>RNG</h3>
            <h5>De bank voor jou</h5>
        </div>

        <div class="cards">
            <div class="card">
                <h2 class="header">Makkelijk geld kwijtraken</h2>
                <img src="{{ asset('media/transfer.png') }}">
            </div>
            <div class="card">
                <h2 class="header">Snel geld verliezen</h2>
                <img src="{{ asset('media/receive.png') }}">
            </div>
            <div class="card">
                <h2 class="header">Geen support</h2>
                <img src="{{ asset('media/support.png') }}">
            </div>
        </div>

        <div class="footer"> <h4>RNG 2024</h4> </div>
    </body>
</html>