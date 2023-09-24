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
    <title>Retos programacion</title>
</head>
<body>
    <?php
        include "naveg.php";
    ?>
    <br>
    
    <div class="container text-center">
        <div class="row justify-content-center text-center">
            <h1>Retos de programación</h1>
            <p>A continuación encontrarás una serie de retos de programación diseñados para que muestres tus habilidades como desarrollador de software. Por tanto, te invitamos a que busques el reto de acuerdo a tu ciclo y lo desarrolles. Una vez finalizado, envía una copia del certificado a tu docente de Tecnología.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <a href="https://studio.code.org/s/mc/lessons/1/levels/1" style="text-decoration: none; color: black;" class="justify-content-center">
                    <div class="card justify-content-center" style="width: 18rem;">
                        <img src="./assets/retoMinecraft.png" class="card-img-top" alt="Reto Minecraft">
                        <div class="card-body">
                            <h5 class="card-title">Reto 3° a 5° - Minecraft Adventurer</h5>
                            <p class="card-text">Demuestra tus habilidades en fundamentos de programación a través de un reto al mejor estilo de Minecraft.</p>
                        </div>
                    </div>
                </a> 
            </div>
            <br>
            <div class="col-sm-4">
            <a href="https://codecombat.com/play/ai-league-hoc?hour_of_code=true" style="text-decoration: none; color: black;" class="justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="./assets/codecombat.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Reto 6° a 8° - CodeCombat</h5>
                        <p class="card-text">Muestra las habilidades que has aprendido durante las clases sobre Python y demuestra que eres un(a) teso(a).</p>
                    </div>
                </div>
                </a> 
            </div>
            <br>
            <div class="col-sm-4">
            <a href="https://codecombat.com/play/hoc-2018?hour_of_code=true" style="text-decoration: none; color: black;">
                <div class="card" style="width: 18rem;">
                    <img src="./assets/codecombat2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Reto 9° a 11° - CodeCombat Intermedio</h5>
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