<?php
  session_start();
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Coordinador Institucional de Tutorias</title>

    <link rel="stylesheet" href="../../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../Estilos/style.css">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://kit.fontawesome.com/f397408f7a.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="nav-side-menu col-lg-2 col-md-3">
        <?php 
            echo '<div class="brand"><i class="fa fa-user-circle"></i> '. $_SESSION["Nombre"] .'</div>';
        ?>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="../index.php">
                        <i class="fa fa-user fa-lg"></i> Inicio
                    </a>
                </li>

                <li data-toggle="collapse" data-target="#anexos" class="collapsed">
                    <a href="#"><i class="fa fa-address-book fa-lg"></i> General <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="anexos">
                    <li class="active"><a href="#">Registrar personal-usuarios</a></li>
                    <li><a href="#">Subdirector Académico</a></li>
                    <li><a href="#">Coordinador Tutoría Institucional</a></li>
                    <li><a href="#">Coordinador Tutoría Departamental</a></li>
                    <li><a href="#">Jefes</a></li>
                    <li><a href="#">Tutores</a></li>
                    <li><a href="#">Alumnos</a></li>
                </ul>
                <li data-toggle="collapse" data-target="#catalogos" class="collapsed">
                    <a href="#"><i class="fa fa-address-book fa-lg"></i> Catálogos <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="catalogos">
                    <li><a href="../Catalogos/Carreras.php">Carreras</a></li>
                    <li><a href="../Catalogos/Materias.php">Materias</a></li>
                    <li><a href="../Catalogos/Departamentos.php">Departamentos</a></li>
                </ul>
                <li data-toggle="collapse" data-target="#datos" class="collapsed">
                    <a href="#"><i class="fa fa-address-book fa-lg"></i> Información general <span
                            class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="datos">
                    <li><a href="../Datos/Actividades.php">Actividades</a></li>
                    <li><a href="../Datos/TipoBeca.php">Tipo de Beca</a></li>
                    <li><a href="../Datos/ConQuienVives.php">Con quien vives</a></li>
                    <li><a href="#">Escolaridad origen</a></li>
                    <li><a href="#">Escolaridad</a></li>
                    <li><a href="#">Tipo PadreMadre</a></li>
                    <li><a href="#">Indicadores Psicofisiológicos</a></li>
                    <li><a href="#">Autopercerpciones</a></li>
                </ul>
                <li data-toggle="collapse" data-target="#registrar" class="collapsed">
                    <a href="#"><i class="fa fa-address-book fa-lg"></i> Datos personal/alumnos<span
                            class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="registrar">
                    <li><a href="RegistrarPersonal.php">Registrar personal-usuarios</a></li>
                    <li><a href="SubDirectorAcad.php">Subdirector Académico</a></li>
                    <li><a href="#">Coordinador Tutoría Institucional</a></li>
                    <li><a href="#">Coordinador Tutoría Departamental</a></li>
                    <li><a href="#">Jefes</a></li>
                    <li><a href="#">Tutores</a></li>
                    <li><a href="#">Alumnos</a></li>
                </ul>

                <li>
                    <a href="#"><i class="fa fa-vcard-o fa-lg"></i> Tutores </a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-envelope-open fa-lg"></i> Contacto </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-cog fa-lg"></i> Configuración
                    </a>
                </li>

                <li>
                    <a href="../Login/sesion-cerrar.php">
                        <i class="fa fa-power-off fa-lg"></i> Cerrar Sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Contenido -->
    <div class="container-fluid mt-5 p-5 mb-3 offset-lg-3 col-lg-8 offset-md-4 col-md-7 col-12"
        style="background-color: #ecf0f1;">
        <div class="row col-12 justify-content-center">
            <h3 class="col-12 text-center">Registrar usuarios</h3>
            <hr>
            <div id="divResultado"></div>
            <form id="formUsuario" class="form-row">
                <div class="col-12 text-center">
                    <label>Tipo de usuario</label>
                    <select id="opcTipoUsuarios" class="form-control form-control-sm col-lg-6 offset-lg-3"></select>
                </div>
                <div class="col-12 col-sm-6">
                    <label>Clave <small class="text-dark">ID Usuario</small></label>
                    <input type="text" id="Id" class="form-control form-control-sm" maxlength="4">
                    <input type="text" id="IdAlumno" class="form-control form-control-sm" maxlength="8">
                </div>
                <div class="col-12 col-sm-6">
                    <label>Nombre</label>
                    <input type="text" id="nombre" class="form-control form-control-sm" maxlength="40">
                </div>
                <div class="col-12 col-sm-6" id="divApellidoP">
                    <label>Apellido paterno</label>
                    <input type="text" id="apellidoP" class="form-control form-control-sm" maxlength="30">
                </div>
                <div class="col-12 col-sm-6" id="divApellidoM">
                    <label>Apellido materno</label>
                    <input type="text" id="apellidoM" class="form-control form-control-sm" maxlength="30">
                </div>
                <div class="col-12 col-sm-6">
                    <label>Contraseña</label>
                    <input type="password" id="password" class="form-control form-control-sm" maxlength="10">
                </div>
                <div class="col-12 col-sm-6">
                    <label>Correo electrónico</label>
                    <input type="text" id="email" class="form-control form-control-sm" maxlength="40">
                </div>
                <div class="col-12 col-sm-6" id="divDep">
                    <label>Departamento</label>
                    <select id="opcDepartamentos" class="form-control form-control-sm"></select>
                </div>
                <div class="col-12 col-sm-6" id="divTel">
                    <label>Teléfono</label>
                    <input type="tel" id="tel" class="form-control form-control-sm" maxlength="15">
                </div>
                <div class="col-12" id="divCursos">
                    <label>Cursos / Diplomados</label>
                    <textarea id="cursos" cols="30" rows="4" class="form-control form-control-sm" maxlength="200"></textarea>
                </div>
                <div class="col-12 mt-2">
                    <input type="submit" value="Registrar" class="btn btn-success">
                </div>
            </form>
            <!--<div class="col-12">
                <input type="button" value="Select 0" onclick="vaciarForm()" class="btn btn-info">
            </div>-->
        </div>
    </div>

    <script>
        $(document).ready(function () {
            retablecerForm();
            $.ajax({
                url: "Opciones/opcTipoUsuarios.php",
                type: "GET",
                success: function (response) {
                    $('#opcTipoUsuarios').prepend(response);
                }
            });
            $.ajax({
                url: "Opciones/opcDepartamentos.php",
                type: "GET",
                success: function (response) {
                    $('#opcDepartamentos').prepend(response);
                }
            });
            $("#opcTipoUsuarios").change(function () {
                limpiarForm();
                let tipoUsuario = $('#opcTipoUsuarios').val()
                //console.log(tipoUsuario);
                switch (tipoUsuario) {
                    case '0':
                        retablecerForm();
                        break;
                    case '1': case '2':
                        document.getElementById("Id").style.display = 'block';
                        document.getElementById("divDep").style.display = 'none';
                        document.getElementById("divTel").style.display = 'none';
                        document.getElementById("IdAlumno").style.display = 'none';
                        document.getElementById("divApellidoP").style.display = 'none';
                        document.getElementById("divApellidoM").style.display = 'none';
                        document.getElementById("divCursos").style.display = 'none';
                        break;
                    case '3':
                        document.getElementById("Id").style.display = 'block';
                        document.getElementById("divDep").style.display = 'block';
                        document.getElementById("divTel").style.display = 'block';
                        document.getElementById("IdAlumno").style.display = 'none';
                        document.getElementById("divApellidoP").style.display = 'none';
                        document.getElementById("divApellidoM").style.display = 'none';
                        document.getElementById("divCursos").style.display = 'none';
                        break;
                    case '4':
                        document.getElementById("Id").style.display = 'block';
                        document.getElementById("IdAlumno").style.display = 'none';
                        document.getElementById("divApellidoP").style.display = 'none';
                        document.getElementById("divApellidoM").style.display = 'none';
                        document.getElementById("divDep").style.display = 'block';
                        document.getElementById("divTel").style.display = 'none';
                        document.getElementById("divCursos").style.display = 'none';
                        break;
                    case '5':
                        document.getElementById("divDep").style.display = 'none';
                        document.getElementById("divTel").style.display = 'none';
                        document.getElementById("Id").style.display = 'none';
                        document.getElementById("IdAlumno").style.display = 'block';
                        document.getElementById("divApellidoP").style.display = 'block';
                        document.getElementById("divApellidoM").style.display = 'block';
                        document.getElementById("divCursos").style.display = 'none';
                        break;
                    case '6': //Tutor
                        document.getElementById("Id").style.display = 'block';
                        document.getElementById("IdAlumno").style.display = 'none';
                        document.getElementById("divApellidoP").style.display = 'block';
                        document.getElementById("divApellidoM").style.display = 'block';
                        document.getElementById("divDep").style.display = 'block';
                        document.getElementById("divTel").style.display = 'block';
                        document.getElementById("divCursos").style.display = 'block';
                        break;
                    default:
                        break;
                }
            })
        })
        $("#formUsuario").submit(function (e) {
            divResultado = document.getElementById("divResultado");
            e.preventDefault();
            console.log("Registrando usuario");
            let tipoUsuario = $('#opcTipoUsuarios option:selected').val();
            var postData = {
                        IdUsuario : $("#Id").val(),
                        tipoUsuario : tipoUsuario,
                        email : $("#email").val(),
                        password : $("#password").val(),
                        nombre : $("#nombre").val()
                    }
            switch (tipoUsuario) {
                /*case '1': case '2':
                    console.log("Coordinador - SubDirector");
                    postData = {
                        IdUsuario : $("#Id").val(),
                        tipoUsuario : tipoUsuario,
                        email : $("#email").val(),
                        password : $("#password").val(),
                        nombre : $("#nombre").val()
                    }
                    break;*/
                case '3':
                    postData.tel = $("#tel").val();
                    postData.IdDep = $('#opcDepartamentos option:selected').val();
                    break;

                case '4':
                    postData.IdDep = $('#opcDepartamentos option:selected').val();
                    break;

                case '6':
                    postData.apellidoP = $("#apellidoP").val();
                    postData.apellidoM = $("#apellidoM").val();
                    postData.tel = $("#tel").val();
                    postData.IdDep = $('#opcDepartamentos option:selected').val();
                    postData.cursos = $("#cursos").val();
                    break;
            
                default:
                    break;
            }
            $.post('Registrar/regUsuario.php', postData, function (response) {
                divResultado.innerHTML = response;
                vaciarForm();
                limpiarForm();
            });
        });
        function vaciarForm() {
            $("#opcTipoUsuarios").val("0");
        }
        function limpiarForm() {
            $("#Id").val("");
            $("#IdAlumno").val("");
            $("#nombre").val("");
            $("#apellidoP").val("");
            $("#apellidoM").val("");
            $("#password").val("");
            $("#email").val("");
            $("#opcDepartamentos").val("0");
            $("#tel").val("");
            $("#cursos").val("");
        }
        function retablecerForm() {
            document.getElementById("Id").style.display = 'block';
            document.getElementById("IdAlumno").style.display = 'none';
            document.getElementById("divDep").style.display = 'none';
            document.getElementById("divTel").style.display = 'none';
            document.getElementById("divApellidoP").style.display = 'none';
            document.getElementById("divApellidoM").style.display = 'none';
            document.getElementById("divCursos").style.display = 'none';
        }
    </script>

</body>

</html>