<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Juegos y Accesorios</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logoini.ico') }}">

</head>

<body>
    <div class="wrapper">
        @include('sidebar.inicio')
        <div class="content">
            @include('navbar.header')
            <div class="body-content">
            <h2>Este es el apartado de Juegos y Accesorios</h2>
            <p>Hola!, sientete libre de poder explorar nuestra biblioteca con juegos del momento y clasicos, así como accesorios
               que te ayudaran a tener una mejor experiencia dentro y fuera del juego, vamos! 
            </p>

            <div class="line"></div>
            <div class="content">
          <h5 class="header display-5 text-center mt-5">Sección de Videojuegos</h5>
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/ff7.png') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">FINAL FANTASY VII REMAKE</h5>
                <p class="card-text">Solo PlayStation</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/gorod.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Call Of Duty Black Ops 3 </h5>
                <p class="card-text">Disponible para PlayStation, Pc y Xbox</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/forzahorizon5.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Forza Horizon 5</h5>
                <p class="card-text">Disponible para Pc y Xbox</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
      </div>

            <div class="line"></div>
        <div class="content">
          <h5 class="header display-5 text-center mt-5">Sección de Accesorios</h5>
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/hero2.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Logitech Hero G502 RGB</h5>
                <p class="card-text">Introduzca descripcion</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/kraken.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">HeadSets Gamer Razer Kraken </h5>
                <p class="card-text">Introduzca descripcion</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/corsairk55.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Bundle Teclado + Mouse Gaming Corsair K55</h5>
                <p class="card-text">Introduzca descripcion</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
      </div>
      <div class="line"></div>

            <h2>¿Que esperas?</h2>
            <p>Un mundo lleno de diversion y entretenimiento te espera.</p>
            <p>¿Estas listo?</p>
        @include('footer')
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>