<?php
    include '../../../DataBase/Conexion.php';
    $sql="SELECT C.PlanEducativo, C.NombreCarrera, D.ConceptoDepto FROM carreras AS C INNER JOIN departamentos AS D ON C.IdDepartamento = D.IdDepartamento ORDER BY D.ConceptoDepto";
    $resultado = mysqli_query($enlace, $sql);
    ?>
        <div class="table-responsive">
        <table class="table table-bordered table-sm mt-3 col-12" >
            <thead class="thead-dark">
            <tr class="text-center">
                <th>Plan educativo</th>
                <th>Carrera</th>
                <th>Departamento</th>
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