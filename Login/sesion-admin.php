<?php 
    session_start();    
    
    include '../DataBase/Conexion.php';
    $usuario = $_POST['usuario'];
    $password =  $_POST['password'];

    //$sql = "SELECT Usuario, Nombre, TipoUsuario FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$password'";
    //$sql = "SELECT IdUsuario, Contrasena FROM usuarios WHERE IdUsuario = '$usuario' AND Contrasena = '$password'";
    $sql = "SELECT U.IdUsuario, U.IdTipoUsuario, TP.Descripcion, CAI.Nombre, U.Contrasena FROM usuarios AS U INNER JOIN tipousuario AS TP ON U.IdUsuario = TP.IdTipoUsuario INNER JOIN coordinatutoriainstitucion AS CAI ON U.IdUsuario = CAI.IdCorrdinaTutoriaInstitucion WHERE IdUsuario = '$usuario' AND Contrasena = '$password'";
    //echo $sql;
    $resultado = mysqli_query($enlace, $sql);
    $row = mysqli_fetch_array($resultado);
    if ($row[0] != "" && $row[4] != "") {
        $_SESSION['IdUsuario'] = $row[0];
        $_SESSION['Nombre'] = $row[3];
        //$_SESSION['tipoUsuario'] = $row[2];
        echo "1";
    }
    else{
        /*echo "<div class='alert alert-dismissible alert-danger'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>El correo o la contraseña son incorrectos.</strong>
            </div>";*/
    }
?>
