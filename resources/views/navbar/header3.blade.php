<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ route('inicio') }}"><img style="width:70px" src="{{asset('images/logoini.ico')}}">Pro-NewBie</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">

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
                    <a href="{{ route('login')}}" class="nav-item nav-link">
                        <ion-icon name="log-in-outline"></ion-icon>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>