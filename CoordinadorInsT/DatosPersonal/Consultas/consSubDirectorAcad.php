<?php
    include '../../../DataBase/Conexion.php';
    $sql="SELECT SD.IdSubdirector, SD.Nombre, U.Email FROM subdirectoracademico AS SD INNER JOIN usuarios AS U ON SD.IdSubdirector = U.IdUsuario ";
    $resultado = mysqli_query($enlace, $sql);
    ?>
        <div class="table-responsive">
        <table class="table table-bordered table-sm mt-3 col-12" >
            <thead class="thead-dark">
            <tr class="text-center">
                <th>Clave</th>
                <th>Nombre</th>
                <th>Correo electrónico</th>
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