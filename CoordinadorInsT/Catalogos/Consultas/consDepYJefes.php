<?php
    include '../../../DataBase/Conexion.php';
    
    ?>
        <div class="table-responsive">
        <table class="table table-bordered table-sm mt-3 col-12" >
            <thead class="thead-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Jefe</th>
                <th>Departamento</th>
                <th>Teléfono</th>
            </tr>
            </thead>
            <a href=""></a>
    <?php

    $sql="SELECT J.IdJefe, J.NombreJefe, D.ConceptoDepto, J.Telefono, D.IdDepartamento FROM departamentos AS D INNER JOIN jefes AS J ON D.IdDepartamento = J.IdDepartamento WHERE D.IdDepartamento != 0 ORDER BY D.ConceptoDepto";
    $resultado = mysqli_query($enlace, $sql);
    while($row = mysqli_fetch_array($resultado)){
        echo "<tr id='". $row[4] ."'>";
        echo "<td>". $row[0] . "</td>";
        echo "<td>". $row[1] . "</td>";
        echo "<td> <a href='#' class='updDF text-info'>". $row[2] . "</a></td>";
        echo "<td>". $row[3] . "</td>";
        /*echo "<td><input type='button' value='Modificar' class='updDF btn btn-info btn-sm'></td>";*/
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
?>