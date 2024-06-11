<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
    <title>Document</title>
</head>
<body>
    @include('templates.navbar')
    
        <form class="form" method="POST" action=" {{ route('register') }} ">
            @csrf
            <h1>Aanmelden</h1>
            <div>
                <input type="text" name="firstname" placeholder="Voornaam">
                <input type="text" name="lastname" placeholder="Achternaam">
            </div>
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Wachtwoord">
            <button type="submit">Inloggen</button>
        </form>

    @include('templates.footer')
</body>
</html>