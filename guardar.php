<?php
    include "conexion.php";
    $mensaje = "";

    if(!empty($_POST["nombre"]) && !empty($_POST["documento"]) && !empty($_POST["user_mail"]) && !empty($_POST["password"]))
    {
        $consulta = $conexion->prepare('Select Correo from usuarios where Correo = :user_mail');
        $consulta ->bindParam(':user_mail', $_POST["Correo"]);
        $consulta->execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

        if($resultado)
        {
            $mensaje = "El correo se encuentra registrado, debes iniciar sesión";
        }
        else{
            $sql = "Insert into usuarios (Nombre, Documento, Correo, Contrasena) values (?,?,?,?)";
            $guardar = $conexion->prepare($sql);
            $guardar->bindParam(1, $_POST["nombre"]);
            $guardar->bindParam(2, $_POST["documento"]);
            $guardar->bindParam(3, $_POST["user_mail"]);
            $guardar->bindParam(4, $_POST["password"]);
            
            if($guardar->execute()){
                $mensaje="Usuario registrado exitosamente";
                header('Location: index.php');
            }
        }


    }
    else{
        $mensaje = "Se deben llenar todos los campos";
    }



?>