<?php

$report = isset($_GET['report']) ? $_GET['report'] : 'report_1';

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
            <a href="diagramas/reporte1/diagrama1.php">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div>

        <div class="card">
            <p>profesor con mas estudiantes inscritor en el curso elegido</p>
            <a href="diagramas/reporte2/formulario.php">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div>

        <div class="card">
            <p>cursos con mayor inscripcion entre meses elegidos </p>
            <a href="diagramas/reporte3/formulario.php">
                <button class="btn btn-warning" value="ver">
                    ver
                </button>
            </a>
        </div>

        <div class="card">
            <p>cursos con menor inscripcion entre meses elegidos</p>
            <a href="diagramas/reporte4/formulario.php">
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

    <section class="container">
        <?PHP require_once "views/admin/reports/$report.php" ?>

        <div class="dowload">
        <a href="../../pdfs/pdf4.php">
            <button class="btn btn-primary">
                descargar pdf
            </button>
        </a>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>