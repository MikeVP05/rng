<div class="navbar">
    <div class="navbar-brand">
        <a href="/">
            <img src="{{ asset('media/RNG_lion.png') }}">
        </a>
    </div>
    @if (!Request::routeIs('login') && !Request::routeIs('register'))  
        <div class="navbar-hrefs">
            @if (Auth::check())
                <a class="navbar-href" href="/dashboard">Dashboard</a>
                <a class="navbar-href" href="/logout">Afmelden</a>
            @else
                <a class="navbar-href" href="/login">Inloggen</a>
                <a class="navbar-black" href="/register">Aanmelden</a>
            @endif
        </div>
    @endif
</div>
