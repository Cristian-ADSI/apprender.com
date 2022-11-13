<?php

$report = isset($_GET['report']) ? $_GET['report'] : 'report_1';
$report = explode('?',$report);
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
    <title>Apprender</title>
</head>

<body>
    <?PHP require_once "views/components/header.php" ?>
    <div class="contenedorB">

        <div class="card">
            <p>3 cursos mas solicitados</p>
            <a href="<?php echo URL ?>app">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div>

        <div class="card">
            <p>profesor con mas estudiantes inscritor en el curso elegido</p>
            <a href="<?php echo URL ?>app?report=report_2">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div>

        <div class="card">
            <p>cursos con mayor inscripcion entre meses elegidos</p>
            <a href="<?php echo URL ?>app?report=report_3">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div>

        <div class="card">
            <p>cursos con menor inscripcion entre meses elegidos</p>
            <a href="<?php echo URL ?>app?report=report_4">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div>

        <div class="card">
            <p>cantidad de matriculas entre mese elegidos</p>
            <a href="diagramas/reporte5/formulario.php">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div>

        <div class="card">
            <p>usuarios registrados en año elegido</p>
            <a href="diagramas/reporte6/formulario.php">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div>
    </div>

    <section class="container mb-3">
        <?PHP
        require_once "views/admin/reports/$report.php";
        ?>
        <form action="<?php echo URL . 'pdf?title='.$title ?>" class="dowload" method="POST"> 
            <textarea name="htmlTemplate" class="textarea-htmlTemplate">
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