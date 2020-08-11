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
    <!-- Menu -->
    <div class="nav-side-menu col-lg-2 col-md-3">
        <?php 
            echo '<div class="brand"><i class="fa fa-user-circle"></i> '. $_SESSION["Nombre"] .'</div>';
        ?>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="#">
                        <i class="fa fa-user fa-lg"></i> Mi Perfil
                    </a>
                </li>
                <li data-toggle="collapse" data-target="#anexos" class="collapsed">
                    <a href="#"><i class="fa fa-address-book fa-lg"></i> General <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="anexos">
                    <li><a href="#">Carreras</a></li>
                    <li><a href="#">Materias</a></li>
                    <li><a href="#">Departamentos y Jefes</a></li>
                    <li><a href="#">Actividades</a></li>
                    <li><a href="#">Tipo Beca</a></li>
                    <li><a href="#">Con quien vives</a></li>
                    <li><a href="#">Escolaridad origen</a></li>
                    <li><a href="#">Escolaridad</a></li>
                    <li><a href="#">Tipo PadreMadre</a></li>
                    <li><a href="#">Indicadores Psicofisiológicos</a></li>
                    <li><a href="#">Autopercerpciones</a></li>
                    <li class="active"><a href="#">Registrar personal-usuarios</a></li>
                    <li><a href="#">Subdirector Académico</a></li>
                    <li><a href="#">Coordinador Tutoría Institucional</a></li>
                    <li><a href="#">Coordinador Tutoría Departamental</a></li>
                    <li><a href="#">Jefes</a></li>
                    <li><a href="#">Tutores</a></li>
                    <li><a href="#">Alumnos</a></li>
                </ul>
                <li data-toggle="collapse" data-target="#catalogos" class="collapsed active">
                    <a href="#"><i class="fa fa-address-book fa-lg"></i> Consultar <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="catalogos">
                    <li class="active"><a href="Carreras.php">Carreras</a></li>
                    <li><a href="Materias.php">Materias</a></li>
                    <li><a href="Departamentos.php">Departamentos</a></li>
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
                    <a href="../../Login/sesion-cerrar.php">
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
            <h3 class="col-12 text-center">Carreras</h3>
            <hr>
            <div id="consCarreras"></div>
        </div>
    </div>
    <!-- Tabla carreras -->
    <script>
        $(document).ready(function () {
            $.ajax({
                url: "Consultas/consCarreras.php",
                type: "GET",
                success: function (response) {
                    $('#consCarreras').html(response);
                }
            });
        })
    </script>

</body>

</html>