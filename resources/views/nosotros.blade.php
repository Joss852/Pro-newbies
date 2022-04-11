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
    <title>Nosotros</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logoini.ico') }}">

</head>

<body>
    <div class="wrapper">
        @include('sidebar.nosotros')
        <div class="content">
            @include('navbar.header')
            <div class="body-content">
            <h2>Nuestro equipo</h2>
            <p>Nuestra empresa esta conformada por amantes de la tecnologia y los videojuegos. Solo los expertos en
                en el entretenimiento y lo ultimo de la tecnologia, dispuestos a tu alcance para consultarlos en caso de dudas o sugerencias.</p>
            <p>Estamos certificados por nuestras empresas y proveedores que otorgamos la mejor calidad y cuidado a todos us productos,
                si algo no te convence, hecha un vistaso a sus tarjetas!.</p>
            <div class="line"></div>
            <div class="wrapper">
                <div class="izq">
                    <h2>Contactanos en nuestras redes sociales</h2>
                    <a href="https://twitter.com/ManchaGamer1" class="nav-item nav-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                        @ManchaGamer1
                    </a>
                    <a href="https://www.facebook.com/Weeb-Gaming-112608314561910" class="nav-item nav-link">
                        <ion-icon name="logo-facebook"></ion-icon></i>
                        @Weeb-Gaming
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=+524421730559&text=Quiero%20mas%20detalles" class="nav-item nav-link">
                        <h4>Tambien puedes contactarnos por medio de nuestro numero telefonico</h4>
                        <ion-icon name="call-outline"></ion-icon>
                        442-494-9136
                    </a>
                </div>
                <div class="der">
                    <h2>Puedes encontrarnos en nuestro establecimiento</h2>
                    <iframe style="display:block;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3736.022183719286!2d-100.27439104646083!3d20.546273226983164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1639019085959!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="line"></div>

            <h2>De la comunidad para la comunidad</h2>
            <p>Recopilamos las opiniones de la comunidad de los videojuegos para brindarte los productos ent endencia antes que cualquier otro.
                Ofrecemos todo al mejor precio y con el tiempo de entrega mas rapido posible, todo para que comiences a disfrutar de momentos
                inolvidables junto a tus amigos o propia comunidad</p>
            </div>
        @include('footer')

        </div>
    </div>







    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    
</body>

</html>