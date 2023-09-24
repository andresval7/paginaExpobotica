<?php

    
    //Datos de webhost:
    /*
    $servidorDB = "localhost";
    $nombreDB = "id19513855_proyecto";
    $usuarioDB = "id19513855_andresv";
    $passwordDB = "CRtX{>W1HV-\#N=O";
    */
    
    $servidorDB = "localhost";
    $nombreDB = "proyectoprueba";
    $usuarioDB = "root";
    $passwordDB = "";
    
    try{
        $conexion = new PDO("mysql: host=$servidorDB; dbname=$nombreDB", $usuarioDB, $passwordDB);
        // probando la conexion
        /*
        $respuesta = $conexion->prepare("select * from usuarios");
        $respuesta -> execute();
        $usuarios = $respuesta->fetch(PDO::FETCH_ASSOC);

        
        foreach($respuesta as $res){
            $usuarios[]=$res;
        }
        
        echo $usuarios["Nombre"];
        */
    }
    catch(PDOException $ex){
        print "Error de conexión: ". $ex->getMessage();
        die();
    }
   
?>