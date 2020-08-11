<?php
    include "../../../DataBase/Conexion.php";
    $idDep = $_POST["idDep"];
    $idJefe = $_POST["idJefe"];
    $idJefeAnt = $_POST["idJefeAnt"];

    $sql = "UPDATE jefes SET IdDepartamento = 0 WHERE IdJefe = '$idJefeAnt'";
    $resultado = mysqli_query($enlace, $sql);
    echo $resultado;

    $sql = "UPDATE jefes SET IdDepartamento = '$idDep' WHERE IdJefe = '$idJefe'";
    $resultado = mysqli_query($enlace, $sql);
    echo $resultado;
?>