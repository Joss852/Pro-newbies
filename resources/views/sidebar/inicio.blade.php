<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Pro Newbie</h3>
    </div>

    <ul class="list-unstyled components">
        <p>¡Tecnología y más!</p>
        <li class="active">
            <a href="{{ route('inicio') }}">Inicio</a>
        </li>
        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Categorias</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{ route('juegosyacc') }}">Juegos y accesorios</a>
                </li>
                <li>
                    <a href="{{ route('consolas') }}">Consolas</a>
                </li>
                <li>
                    <a href="{{ route('programas') }}">Programas</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Ofertas!</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="{{ route('rebajas') }}">Rebajas</a>
                </li>
                <li>
                    <a href="{{ route('promociones') }}">Promociones</a>
                </li>
                <li>
                    <a href="{{ route('liquidaciones') }}">Liquidaciones</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('products.list') }}">Comprar</a>
        </li>
        <li>
            <a href="{{ route('nosotros') }}">Contactanos</a>
        </li>
    </ul>

</nav>