<div class="navbar d-flex">
    <nav>
        <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}">HOME</a>
        <a href="{{ route('prodotti') }}" class="{{ Route::currentRouteName() === 'prodotti' ? 'active' : ''}}">PRODOTTI</a>
        <a href="{{ route('contatti') }}" class="{{ Route::currentRouteName() === 'contatti' ? 'active' : ''}}">CONTATTI</a>
</nav>
</div>