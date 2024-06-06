<div class="navbar">
    <div class="navbar-brand">
        <a href="/">
            <img src="{{ asset('media/RNG_lion.png') }}">
        </a>
    </div>
    <div class="navbar-hrefs">
        @if(Auth::check())
            <a class="navbar-href" href="/dashboard">Dashboard</a>
            <a class="navbar-href" href="/logout">Uitloggen</a>
        @else
            <a class="navbar-href" href="/login">Inloggen</a>
            <a class="navbar-black" href="/register">Aanmelden</a>
        @endif
    </div>
</div>