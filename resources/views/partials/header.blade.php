<header>
    <div class="header">
        <div class="container">
            <p>DC POWER VISA®</p>
            <p>ADDITIONAL DC SITES ></p>
        </div>
    </div>
    

    <div class="nav-bar container">
        <ul class="list">
            <li class="container-logo">
                <img src="{{ url('/images/dc-logo.png') }}" alt="">
            </li>
            <li>
                <a href="#">CHARACTERS</a>
            </li>
            <li>
                <a @if(Route::currentRouteName() == 'comics') class="active" @endif href="{{ route('comics')}}">COMICS</a>
            </li>
            <li>
                <a href="#">MOVIES</a>
            </li>
            <li>
                <a href="#">TV</a>
            </li>
            <li>
                <a href="#">GAMES</a>
            </li>
            <li>
                <a href="#">VIDEOS</a>
            </li>
            <li>
                <a href="#">FANS</a>
            </li>
            <li>
                <a href="#">NEWS</a>
            </li>
            <li>
                <a href="#">SHOP</a>
            </li>
            <li>
                <input type="text">
            </li>
        </ul>
    </div>

    <div class="img-header">

    </div>
</header>