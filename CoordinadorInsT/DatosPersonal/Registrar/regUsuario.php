<?php 
    include "../../../DataBase/Conexion.php";
    $tipoUsuario = $_POST["tipoUsuario"];
    $IdUsuario = $_POST["IdUsuario"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $nombre = $_POST["nombre"];

    $bandera = false;

    $sql = "INSERT INTO usuarios(IdUsuario, IdTipoUsuario, Email, Contrasena) VALUES ('$IdUsuario', '$tipoUsuario', '$email', '$password')";
    $resultado = mysqli_query($enlace, $sql);
    if ($resultado) {
        //echo "Usuario registrado!";
        switch ($tipoUsuario) {
            case '1':
                $sql = "INSERT INTO coordinatutoriainstitucion(IdCorrdinaTutoriaInstitucion, Nombre) VALUES ('$IdUsuario', '$nombre')";
                $resultado = mysqli_query($enlace, $sql);
                if ($resultado) {
                    //echo "Coordinador de tutoria Registrado!";
                    $bandera = true;
                }
                break;
            case '2':
                $sql = "INSERT INTO subdirectoracademico(IdSubdirector, Nombre) VALUES ('$IdUsuario','$nombre')";
                $resultado = mysqli_query($enlace, $sql);
                if ($resultado) {
                    //echo "SubDirector Academico Registrado!";
                    $bandera = true;
                }
                break;
            case '3':
                $IdDep = $_POST["IdDep"];
                $tel = $_POST["tel"];
                $sql = "INSERT INTO `jefes`(`IdJefe`, `IdDepartamento`, `NombreJefe`, `Telefono`) VALUES ('$IdUsuario','$IdDep','$nombre','$tel')";
                $resultado = mysqli_query($enlace, $sql);
                if ($resultado) {
                    $bandera = true;
                }
                break;
            case '4':
                $IdDep = $_POST["IdDep"];
                //$tel = $_POST["tel"];
                $sql = "INSERT INTO `coordinatutoriadepto`(`IdCoordinaTutoriaDepto`, `IdDepartamento`, `Nombre`) VALUES ('$IdUsuario','$IdDep','$nombre')";
                $resultado = mysqli_query($enlace, $sql);
                if ($resultado) {
                    $bandera = true;
                }
                break;
            case '6':    
                $IdDep = $_POST["IdDep"];
                $tel = $_POST["tel"];
                $apellidoP = $_POST["apellidoP"];
                $apellidoM = $_POST["apellidoM"];
                $cursos = $_POST["cursos"];
                $sql = "INSERT INTO `tutores`(`IdTutor`, `IdDepartamento`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Telefono`, `Cursos_Diplomados`) VALUES ('$IdUsuario','$IdDep','$nombre','$apellidoP','$apellidoM','$tel','$cursos')";
                $resultado = mysqli_query($enlace, $sql);
                if ($resultado) {
                    $bandera = true;
                }
                break;
            default:
                # code...
                break;
        }
        if ($bandera) {
            echo '<div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Usuario registrado exitosamente!</strong>
                </div>';
        }else{
            echo '<div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error al registrar el usuario!</strong>
                </div>';
        }
    }
    //echo $tipoUsuario;
?>