<?php 
    include "../../../DataBase/Conexion.php";
    $IdDep = $_GET["IdDep"];
    $sql = "SELECT IdJefe, NombreJefe FROM jefes WHERE IdDepartamento != $IdDep AND IdDepartamento = 0";
    //echo $sql;
    $resultado = mysqli_query($enlace, $sql);
    while ($row = mysqli_fetch_row($resultado)) {
        echo "<option value=".$row[0].">".$row[1]."</option>";
    }
?>