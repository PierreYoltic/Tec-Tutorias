<?php
    $host = "localhost";        //Dirección o IP del servidor MySQL
    $puerto = "8080";           //Puerto del servidor MySQL
    $usuario = "root";          //Nombre de usuario del servidor MySQL
    $contrasena = "";           //Contraseña del usuario
    $baseDeDatos = "Tutorias";//Nombre de la base de datos

    $enlace = mysqli_connect($host, $usuario, $contrasena, $baseDeDatos);
    if(!$enlace){
        echo "Error: No se pudo conectar a MySQL. " . PHP_EOL;
        echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "Error de depuración: " . mysqli_connect_error() . PHP_EOL;
    }
?>