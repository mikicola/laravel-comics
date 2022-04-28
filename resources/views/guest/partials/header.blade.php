<header>
    <div class="upper-header">
        <div class="container"></div>
    </div>

    <div class="header container">
        <a href="{{ route('home') }}">
            <img src="./images/dc-logo.png" alt="logo DC">
        </a>
        <nav>
            <ul>
                <li class="{{ Route::current()->getName() == 'characters' ? 'active' : '' }}"><a href="{{ route('characters') }}">characters</a></li>
                <li class="{{ Route::current()->getName() == 'comics' ? 'active' : '' }}"><a href="#">comics</a></li>
                <li class="{{ Route::current()->getName() == 'movies' ? 'active' : '' }}"><a href="#">movies</a></li>
                <li class="{{ Route::current()->getName() == 'tv' ? 'active' : '' }}"><a href="#">tv</a></li>
                <li class="{{ Route::current()->getName() == 'games' ? 'active' : '' }}"><a href="#">games</a></li>
                <li class="{{ Route::current()->getName() == 'collectibles' ? 'active' : '' }}"><a href="#">collectibles</a></li>
                <li class="{{ Route::current()->getName() == 'videos' ? 'active' : '' }}"><a href="#">videos</a></li>
                <li class="{{ Route::current()->getName() == 'fans' ? 'active' : '' }}"><a href="#">fans</a></li>
                <li class="{{ Route::current()->getName() == 'news' ? 'active' : '' }}"><a href="#">news</a></li>
                <li class="{{ Route::current()->getName() == 'shop' ? 'active' : '' }}"><a href="#">shop</a></li>
            </ul>
        </nav>
    </div>
</header>
