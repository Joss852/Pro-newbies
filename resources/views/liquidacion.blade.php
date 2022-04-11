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
    <title>Consolas</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logoini.ico') }}">

</head>

<body>
    <div class="wrapper">
        @include('sidebar.inicio')
        <div class="content">
            @include('navbar.header')
  		      <div class="body-content">
              
            <h8>Liquidaciones</h8>
            <p>Aqui encontraras las liquidaciones </p>

            <div class="line"></div>
            <div class="">
          <h8 class="header display-5 text-center mt-5">Consolas con 20% off</h8>
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/xboxone.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h8 class="card-title">Consola Xbox Series S 512 GB Blanco</h8>
                <p class="card-text">Microsoft</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$5,799</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/nintendo.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h8 class="card-title">Nintendo Consola Switch Gris 32GB </h8>
                <p class="card-text">Nintendo</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$5,299</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/play.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h8 class="card-title">Consola PlayStation 5 825 GB</h8>
                <p class="card-text">Sony</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$12,499</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/one1.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h8 class="card-title">Microsoft Xbox One S 1TB Standard color blanco</h8>
                <p class="card-text">Microsoft</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$11,099</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/play4.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h8 class="card-title">PlayStation 4 Ps4 1T</h8>
                <p class="card-text">Sony</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$6,599</small>
              </div>
            </div>
          </div>
      </div>

            <div class="line"></div>
            <div class="">
          <h8 class="header display-5 text-center mt-5">Controles 15% of</h8>
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/control1.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h8 class="card-title">Control Inalámbrico Xbox One Elite 2 Negro</h8>
                <p class="card-text">Microsoft</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$899</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/control2.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h8 class="card-title">Controles Joy-Con Izquierdo y Derecho para Nintendo Switch, color Rojo/Azul Neón - Standard Edition </h8>
                <p class="card-text">Nintendo</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$999</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/control3.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h8 class="card-title">Control Inalámbrico PlayStation 4 DualShock 4 Glacier White</h8>
                <p class="card-text">Sony</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$899</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/control4.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h8 class="card-title">Control Inalambrico DualShock Para PlayStation 5</h8>
                <p class="card-text">Sony</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$1,109</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/control5.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h8 class="card-title">Control Xbox Microsoft Forza Horizon 5</h8>
                <p class="card-text">Microsoft</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$1,399</small>
              </div>
            </div>
          </div>
      </div>
            <div class="line"></div>
            <h2>¿Que esperas?</h2>
            <p>Un mundo lleno de diversion y entretenimiento te espera.</p>
            <p>¿Estas listo?</p>
        @include('footer')
            
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