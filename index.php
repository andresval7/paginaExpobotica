<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/logoExpobotica.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    <title>Expobotica 2023</title>
</head>
<body >
    
    <?php
        include "naveg.php";
    ?>
    <br>
    <div class="container text-center">
        <div class = "row justify-content-around">
            <div class="col-lg-4 justify-content-center align-self-center">
                <h1>Expobótica 2023</h1>
                <h2>09 de Noviembre</h2>
                <p>Aquí encontrarás la programación de las actividades de la expobótica 2023 del Colegio San ignacio.</p>
                <p>Durante este día tendremos una muestra de los mejores proyectos de tecnología y emprendimiento 
                desarrollados durante el año por los estudiantes de la institución.</p>
            </div>
            <div class="col-md-auto justify-content-center p-2">
                <?php
                    include "carousel.php";
                ?>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <a href="./cronotic.php" style="text-decoration: none; color: black;" class="justify-content-center">
                    <div class="card justify-content-center" style="width: 18rem;">
                        <img src="./assets/card1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cronograma de visitas</h5>
                            <p class="card-text">Aquí encontrarás una guía detallada del cronograma de visitas de los estudiantes de primaria y bachillerato.</p>
                        </div>
                    </div>
                </a> 
            </div>
            <br>
            <div class="col-sm-4">
            <a href="./reto2.php" style="text-decoration: none; color: black;" class="justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="./assets/tinkercad.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Reto de diseño 3D sede infantil</h5>
                        <p class="card-text">Muestra las habilidades que has aprendido durante las clases y demuestra que eres un(a) teso(a) para el diseño 3D.</p>
                    </div>
                </div>
                </a> 
            </div>
            <br>
            <div class="col-sm-4">
            <a href="./reto1.php" style="text-decoration: none; color: black;">
                <div class="card" style="width: 18rem;">
                    <img src="./assets/programar.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Retos de programación - sede mayores</h5>
                        <p class="card-text">Aquí tendrás la oportunidad de demostrar tus habilidades para la programación. Demuestranos que tu serás el próximo Mark Zuckenberg.</p>
                    </div>
                </div>
                </a> 
            </div>
        </div>
        <br>
         
    </div>

    <br>
    <br>
   <!-- Footer-->
   <footer class="container text-center">
        <div class="imageninicio">
                <img src="./assets/escudo-home.png" class="img-fluid" alt="tiendas-login" id="tiendas-login">
        </div>
    </footer>

      <script src="./assets/bootstrap.bundle.min.js"></script>
</body>
</html>