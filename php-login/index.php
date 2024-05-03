<!DOCTYPE html>
<html class="h-100">
<?php 
require_once './handleRole.php';
require_once './userscontroller.php';

// No es necesario iniciar sesión aquí si ya se ha iniciado en otro lugar del código

// Verificamos si el usuario está logueado
$logged_in = isset($_SESSION['logged_in']);

?>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ElectroIBC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        .retro {
            font-family: 'Press Start 2P', cursive;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <div class="container text-right pt-3">
            <?php 
            if ($logged_in) {
                echo '<a href="/php-login/logout.php" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">Logout</a>';
            } else {
                echo '<a href="/php-login/login.php" class="btn btn-secondary btn-sm" role="button" aria-disabled="true">Login</a>';
            }
            ?>
        </div>
    </header>
    <main role="main" class="flex-shrink-0">
        <div class="container text-center ">
            <div class="display-3 retro mt-5">ElectroIBC</div>
            <p class="lead text-muted">La tecnologia al teu abast</p>
        </div>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="card-deck" id="dataContent">

                    <div class="card shadow-sm col-sm-4 mb-4 p-0">
                        <div class="text-center m-3">
                            <img class="bd-placeholder-img img-fluid"
                                src="https://thumb.pccomponentes.com/w-530-530/articles/36/362381/1851-intel-core-i5-11400f-26-ghz.jpg"
                                height="225px">
                        </div>
                        <div class="card-body text-center">
                            <h4>Intel Core i5-11400F 2.6 GHz</h4>
                            <span class="badge text-white bg-success">20 productes en stock</span>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a class="btn btn-primary" role="button" href="showproduct.php?id=1">Més detalls</a>
                                </div>
                                <h4 class="text-muted"><span class="text-primary">120€</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-sm col-sm-4 mb-4 p-0">
                        <div class="text-center m-3">
                            <img class="bd-placeholder-img img-fluid"
                                src="https://thumb.pccomponentes.com/w-530-530/articles/22/222229/el2870-front-1400x1400.jpg"
                                height="225px">
                        </div>
                        <div class="card-body text-center">
                            <h4>Benq EL2870UE 28&quot; LED UltraHD 4K FreeSync</h4>
                            <span class="badge text-white bg-success">10 productes en stock</span>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a class="btn btn-primary" role="button" href="showproduct.php?id=2">Més detalls</a>
                                </div>
                                <h4 class="text-muted"><span class="text-primary">199.99€</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-sm col-sm-4 mb-4 p-0">
                        <div class="text-center m-3">
                            <img class="bd-placeholder-img img-fluid"
                                src="https://thumb.pccomponentes.com/w-530-530/articles/57/578970/1485-apple-iphone-13-256gb-medianoche-libre.jpg"
                                height="225px">
                        </div>
                        <div class="card-body text-center">
                            <h4>Apple iPhone 12 Pro Max 128GB Azul Pacífico Lliure</h4>
                            <span class="badge text-white bg-success">8 productes en stock</span>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a class="btn btn-primary" role="button" href="showproduct.php?id=3">Més detalls</a>
                                </div>
                                <h4 class="text-muted"><span class="text-primary">949.38€</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 d-none d-md-block"></div>
                    <div class="card shadow-sm col-sm-4 mb-4 p-0">
                        <div class="text-center m-3">
                            <img class="bd-placeholder-img img-fluid"
                                src="https://thumb.pccomponentes.com/w-530-530/articles/47/478952/1969-amazfit-gts-2-mini-smartwatch-meteor-black-59cdbb87-f639-41b4-93f1-21ba56092f4f.jpg"
                                height="225px">
                        </div>
                        <div class="card-body text-center">
                            <h4>Amazfit GTS 2 Mini SmartWatch Meteor Black</h4>
                            <span class="badge text-white bg-success">2 productes en stock</span>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a class="btn btn-primary" role="button" href="showproduct.php?id=4">Més detalls</a>
                                </div>
                                <h4 class="text-muted"><span class="text-primary">85.99€</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-sm col-sm-4 mb-4 p-0">
                        <div class="text-center m-3">
                            <img class="bd-placeholder-img img-fluid"
                                src="https://thumb.pccomponentes.com/w-530-530/articles/32/328475/1101-amd-ryzen-5-5600x-37ghz.jpg"
                                height="225px">
                        </div>
                        <div class="card-body text-center">
                            <h4>AMD Ryzen 5 5600X 3.7GHz</h4>
                            <span class="badge text-white bg-success">5 productes en stock</span>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a class="btn btn-primary" role="button" href="showproduct.php?id=5">Més detalls</a>
                                </div>
                                <h4 class="text-muted"><span class="text-primary">249.89€</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-sm col-sm-4 mb-4 p-0">
                        <div class="text-center m-3">
                            <img class="bd-placeholder-img img-fluid"
                                src="https://thumb.pccomponentes.com/w-530-530/articles/36/362838/1276-hp-omen-spacer-tkl-teclado-mecanico-gaming-inalambrico-cherry-mx-brown.jpg"
                                height="225px">
                        </div>
                        <div class="card-body text-center">
                            <h4>HP Omen Spacer TKL Teclado Mecánico Gaming</h4>
                            <span class="badge text-white bg-success">6 productes en stock</span>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a class="btn btn-primary" role="button" href="showproduct.php?id=6">Més detalls</a>
                                </div>
                                <h4 class="text-muted"><span class="text-primary">139.98€</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 d-none d-md-block"></div>
                </div>
            </div>
        </div>

        <div>
        <?php

      //  print_r(getUsers());
      //  foreach (getUsers() as $u) {
      //      echo 'ID: ' . $u['id'];
       //     echo 'Name: ' . $u['name'];
       //     echo 'Email: ' . $u['email'];
       //     echo 'Password: ' . $u['password'];
       //     echo 'Role: ' . $u['role'];
       // }

        ?>
        </div>
    </main>
</body>

</html>