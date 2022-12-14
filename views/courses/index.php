<?PHP
session_start();

if (!isset($_SESSION['sessionIdUser'])) {
    header("Location:" . constant('URL'));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- styles  -->
    <link rel="stylesheet" href="<?PHP echo constant('URL') ?>/public/css/courses.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?PHP echo BOOTSTRAP ?>">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Apprender</title>
</head>

<body>
    <?PHP require_once "views/components/header.php" ?>
    <?PHP require_once "views/components/sidebar.php" ?>
    <main>
        <div class="contenedor-cursos" style="background:linear-gradient(to right, #30127b, #2d8daa, #275891)">
            <?php

            foreach ($this->data as $course) {
            ?>
                <div class="card-curso" id="curso">
                    <div class="imagen-curso">
                        <img src=<?php echo "/public/img/covers/".$course['image'] ?>>
                    </div>
                    <!-- Contenido  -->
                    <div class="contenido-curso">
                        <h4><?php echo $course['name'] ?></h4>

                        <p>
                            <?php echo $course['description'] ?>
                        </p>

                        <b><label>disponibilidad del curso:</label></b>
                        <br>

                        <label id="fecha_inicial">
                            Fecha inicial: <?php echo  $course['startDate'] ?>
                        </label>
                        <br>

                        <label id="fecha_final">
                            Fecha final:<?php echo $course['endDate'] ?>
                        </label>
                        <br>

                        <b>
                            <label>valor de curso:
                            </label>
                        </b>
                        <br>
                        <label id="valor"><?php echo " $" . $course['value'] ?></label>

                        <div class="boton">
                            <a 
                            href="<?php echo constant('URL') . 'enrollment?course=' . $course['idCourse']; ?>"
                            class="btn text-center">
                                Matricularme
                            </a>
                        </div>

                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>