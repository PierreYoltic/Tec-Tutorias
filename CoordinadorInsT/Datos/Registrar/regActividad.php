<?php
    include "../../../DataBase/Conexion.php";
    $concepto = $_POST["concepto"];

    $sql = "INSERT INTO Actividades (Concepto) VALUES ('$concepto')";
    $resultado = mysqli_query($enlace, $sql);
    echo $resultado;
?>