<?php
    include "../../../DataBase/Conexion.php";
    $sql = "SELECT IdCarrera, NombreCarrera FROM carreras ORDER BY NombreCarrera";
    $resultado = mysqli_query($enlace, $sql);
?>
    <select name="" id="opcCarrera" class="form-control form-control-sm">
        <option value="0">Seleccione una carrera...</option>
<?php
        while ($row = mysqli_fetch_row($resultado)) {
            echo "<option value=".$row[0].">".$row[1]."</option>";
        }
    echo "</select>";
?>   

    