<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-outline-dark"">
            <i class=" fas fa-align-left"></i>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>
        <a class="navbar-brand" href="{{ route('inicio') }}"><img style="width:70px" src="{{asset('images/logoini.ico')}}">Pro-NewBie</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: space-between;">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="mx-4 hover:underline sm:mx-3 sm:mt-0" href="{{ route('products.list')}}">Comprar Ahora</a>
                </li>
                <li class="mx-4 nav-item">
                    <a href="{{ route('cart.list') }}" class="flex items-center">
                        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        {{ Cart::getTotalQuantity()}}
                    </a>
                </li>
                <li class="nav-item">
                    <div class="input-group search-box">
                        <input type="text" id="search" class="form-control" placeholder="Buscar...">
                        <div class="input-group-append">
                            <button class="btn" type="button">
                                <ion-icon name="search-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                </li>
                <li class="nav-item active">
                    <a href="https://www.facebook.com/Weeb-Gaming-112608314561910" class="nav-item nav-link">
                        <ion-icon name="logo-facebook"></ion-icon></i>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="https://twitter.com/ManchaGamer1" class="nav-item nav-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="{{ url('/logout') }}" class="nav-item nav-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Salir">
                        <ion-icon name="log-out-outline" style="cursor:pointer"></ion-icon>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>