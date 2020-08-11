<?php
    include '../../../DataBase/Conexion.php';
    $idCarrera = $_GET['idCarrera'];
    $sql="SELECT NombreMateria, Creditos, Unidades FROM materias WHERE IdCarrera = '$idCarrera'";
    $resultado = mysqli_query($enlace, $sql);
    ?>
        <div class="table-responsive">
        <table class="table table-bordered table-sm mt-3" >
            <thead class="thead-dark">
            <tr class="text-center">
                <th>Materias</th>
                <th>Creditos</th>
                <th>Unidades</th>
            </tr>
            </thead>
    <?php

    while($row = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>". $row[0] . "</td>";
        echo "<td>". $row[1] . "</td>";
        echo "<td>". $row[2] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
?>