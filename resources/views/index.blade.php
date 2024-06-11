<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" >
    </head>
    <body>
        @include('templates.navbar')

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

        @include('templates.footer')
    </body>
</html>