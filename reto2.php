<?php
    include "conexion.php";
    $user = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/logoExpobotica.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    <title>Reto Diseño 3D</title>
</head>
<body>
    <?php
        include "naveg.php";
    ?>
    <br>
    <div class="container text-center">
        <div class = "row">
            <div class="col">
            <h1>Retos de Diseño 3D</h1>
            <p>Aquí encontrarás una serie de acertijos que debes resolver de forma individual.</p>
            <p>Toma un lapicero y en una hoja de papel vas a escribir las respuestas a la serie de retos que verás 
                en los siguientes videos.</p>
            <p>Cuando termines todos los retos, debes tomar fotografías de las respuestas y debes subirlas a la 
                plataforma Classroom en la actividad "Retos de lógica".</p>
            </div>
            <div class="col">
            <iframe width="500" height="300" src="https://www.youtube.com/embed/CCiGLGjzrTc" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br>
                <iframe width="500" height="300" src="https://www.youtube.com/embed/E1jyJIcx3cU" title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                    gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <br>
                    <iframe width="500" height="300" src="https://www.youtube.com/embed/WTC9VFL27zc" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                        clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
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