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
            <h2>Bienvenido al apartado de programas</h2>
            <p>Aqui podrás encontrar distintos programas para tu pc </p>

            <div class="line"></div>
            <div class="">
          <h5 class="header display-5 text-center mt-5">Personal y empresarial</h5>
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/personal.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Microsoft 365 Personal</h5>
                <p class="card-text">Microsoft</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$1,199</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/familia.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Microsoft 365 Familia </h5>
                <p class="card-text">Microsoft</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$1,749</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/fyp.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Office Hogar y Empresas 2021</h5>
                <p class="card-text">Microsoft</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$6,499</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/op2.png') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Office Profesional 2021</h5>
                <p class="card-text">Microsoft</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$11,099</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/a.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Avast Ultimate</h5>
                <p class="card-text">Avast</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$699</small>
              </div>
            </div>
          </div>
      </div>

            <div class="line"></div>
            <div class="">
          <h5 class="header display-5 text-center mt-5">Edición y video</h5>
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/core.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">CorelDRAW Graphics Suite 2021</h5>
                <p class="card-text">CorelDRAW</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$4,714</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/Fil.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Wondershare Filmora </h5>
                <p class="card-text">Filmora</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$1,500</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/ad.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Adobe Photoshop Elements 2021 PC/Mac (Digital Download)</h5>
                <p class="card-text">Adober</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$1,299</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/adobe.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Adobe Illustrator</h5>
                <p class="card-text">Adobe</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$1,109</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/affinity.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Affinity</h5>
                <p class="card-text">Affinity</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$999</small>
              </div>
            </div>
          </div>
      </div>
        


            <h2>¿Que esperas?</h2>
            <p>Un mundo lleno de diversion y entretenimiento te espera.</p>
            <p>¿Estas listo?</p>
        @include('footer')

            </div>
        </div>
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