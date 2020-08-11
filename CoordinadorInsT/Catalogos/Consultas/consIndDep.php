<?php 
    include '../../../DataBase/Conexion.php';
    $idDepartamento = $_GET['idDep'];
    $sql = "SELECT D.IdDepartamento, D.ConceptoDepto, J.IdJefe, J.NombreJefe, J.Telefono FROM departamentos AS D INNER JOIN jefes AS J ON D.IdDepartamento = J.IdDepartamento WHERE D.IdDepartamento = '$idDepartamento'";
    $resultado = mysqli_query($enlace, $sql);
    $json = array();
    while ($row = mysqli_fetch_array($resultado)) {
        $json[] = array(
            'idDep' => $row[0],
            'conDep' => $row[1],
            'idJefe' => $row[2],
            'nomJefe' => $row[3],
            'tel' => $row[4]
        );
    }
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
?>