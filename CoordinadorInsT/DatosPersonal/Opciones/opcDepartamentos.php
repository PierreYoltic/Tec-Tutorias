<?php 
    include "../../../DataBase/Conexion.php";
    $sql = "SELECT IdDepartamento, ConceptoDepto FROM departamentos";
    //echo $sql;
    $resultado = mysqli_query($enlace, $sql);
    //echo "<option value=0>Selecciona una opción...</option>";
    while ($row = mysqli_fetch_row($resultado)) {
        echo "<option value=".$row[0].">".$row[1]."</option>";
    }
?>