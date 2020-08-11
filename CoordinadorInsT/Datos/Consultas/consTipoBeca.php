<?php
    include '../../../DataBase/Conexion.php';
    $sql="SELECT IdTipoBeca, Concepto FROM TipoBeca";
    $resultado = mysqli_query($enlace, $sql);
    ?>
        <div class="table-responsive">
        <table class="table table-bordered table-sm mt-3 col-12" >
            <thead class="thead-dark">
            <tr class="text-center">
                <th>No.</th>
                <th>Becas</th>
            </tr>
            </thead>
    <?php

    while($row = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td class='text-center'>". $row[0] . "</td>";
        echo "<td>". $row[1] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
?>
