<?php

$report = isset($_GET['report']) ? $_GET['report'] : 'report_1';
$report = explode('?', $report);
$report = $report[0];

// $_SESSION['report'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?PHP echo BOOTSTRAP ?>">
    <!-- Styles  -->
    <link rel="stylesheet" href="<?PHP echo URL ?>/public/css/admin.css">
    <link rel="stylesheet" href="<?PHP echo URL ?>/public/css/menuTeacher.css">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Apprender</title>
</head>

<body>
    <!--------------------- Header  ------------------------------>
    <?PHP require_once "views/components/header.php" ?>



    <!--------------------- Menu  ------------------------------>
    <div class="wrapper">
        <input type="checkbox" id="btn" hidden>
        <label for="btn" class="menu-btn">
            <i class="fas fa-bars"></i>
            <i class="fas fa-times"></i>
        </label>
        <nav id="sidebar" style="background:linear-gradient(to right, #30127b, #2d8daa, #275891)">
            <div class="title">
                Menu
            </div>
            <ul class="list-items">
                <!-- Inicio  -->
                <li>
                    <a href="<?PHP echo constant('URL') ?>app">
                        <ion-icon name="home-outline"></ion-icon>Inicio
                    </a>
                </li>
                <!-- Cursos 
            <li>
                <a href="<?PHP echo constant('URL') ?>courses">
                    <ion-icon name="information-outline"></ion-icon>Cursos
                </a>
            </li> -->
                <!-- Perfil  -->
                <li>
                    <a href="<?PHP echo constant('URL') ?>profile">
                        <ion-icon name="paw-outline"></ion-icon>perfil
                    </a>
                </li>
                <!-- Cerrar Sesion  -->
                <li>
                    <a href="<?PHP echo constant('URL') . "app/closeSession" ?>">
                        <ion-icon name="cierre-sesion"></ion-icon>Cerrar Sesion
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    </div>

    <!-- card (se cambio por una lista desplegable) -->
    <!-- <div class="card">
            <p>Los tres Cursos más solicitados</p>
            <a href="<?php echo URL ?>app">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        

        <div class="card">
            <p>Profesor con más estudiantes inscritos en un curso elegido</p>
            <a href="<?php echo URL ?>app?report=report_2">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div></div> 

        <div class="card">
            <p>Cursos con mayor inscripción entre los meses elegidos</p>
            <a href="<?php echo URL ?>app?report=report_3">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div>

        <div class="card">
            <p>Cursos con menor inscripción entre los meses elegidos</p>
            <a href="<?php echo URL ?>app?report=report_4">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div>

        <div class="card">
            <p>Cantidad de matrículas entre los meses elegidos</p>
            <a href="<?php echo URL ?>app?report=report_5">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div>

        <div class="card">
            <p>usuarios registrados en un año elegido</p>
            <a href="<?php echo URL ?>app?report=report_6">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div>-->


    <!--------------------- Form  ------------------------------>

    <section class="container-fluid mb-4 mt-3 pb-4 pt-2 bg-dark text-white rounded-3" style="background:linear-gradient(to right, #30127b, #2d8daa, #275891); width:800px">
        <!-------------------------------- Report --------------------->
        <div class="contenedor">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="dropdown mx-2">
                    <button class="btn btn-secondary dropdown-toggle  " type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        Reportes
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark mt-3" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="<?php echo URL ?>app">Los tres Cursos más solicitados</a></li>
                        <li><a class="dropdown-item" href="<?php echo URL ?>app?report=report_2">Profesor con más estudiantes inscritos en un curso elegido</a></li>
                        <li><a class="dropdown-item" href="<?php echo URL ?>app?report=report_3">Cursos con mayor inscripción entre los meses elegidos</a></li>
                        <li><a class="dropdown-item" href="<?php echo URL ?>app?report=report_4">Cursos con menor inscripción entre los meses elegidos</a></li>
                        <li><a class="dropdown-item" href="<?php echo URL ?>app?report=report_5">Cantidad de matrículas entre los meses elegidos</a></li>
                        <li><a class="dropdown-item" href="<?php echo URL ?>app?report=report_6">usuarios registrados en un año elegido</a></li>

                    </ul>
                </div>
            </nav>
            <section>
                <?PHP
                require_once "views/admin/reports/$report.php";
                ?>
                <form action="<?php echo URL . 'pdf?title=' . $title ?>" class="dowload" method="POST">
                    <textarea name="htmlTemplate" class="textarea-htmlTemplate ">
                        <?php echo $htmlTemplate ?>
                    </textarea>

                    <div>
                        <button type="submit" class="btn btn-primary">
                            descargar pdf
                        </button>
                    </div>
                </form>
            </section>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>