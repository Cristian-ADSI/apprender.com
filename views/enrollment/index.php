<?php
session_start();

if (!isset($_SESSION['sessionIdUser'])) {
    header("Location:" . constant('URL'));
}

function setDate()
{
    date_default_timezone_set("America/bogota");
    return date("Y-m-d");
}

$idUser = $_SESSION['sessionIdUser'];

if (isset($_GET['course']))   { $idCourse = $_GET['course']; }
if (isset($_GET['idCourse'])) { $idCourse = $_GET['idCourse']; }
if (!isset($_GET['idCourse']) && !isset($_GET['course'])) { $idCourse = NULL; }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/matricula.css">
    <link rel="icon" href="img/949218.jpg" sizes="100x100 ">
    <link href="<?PHP echo constant('BOOTSTRAP') ?>" rel="stylesheet">
    <title>Matricula</title>
</head>

<body style="background-image:url(/public/img/utilities/fondoAzul.jpg);">


    <button class="btn btn-success m-4">
        <a class="text-decoration-none text-white fs-5" href="<?PHP echo constant('URL') . 'courses' ?>">
            volver atras
        </a>
    </button>


    <div class="contenedor bg-primary w-25" style=" width: 45%;height: 350px;text-align: center;margin: 27%;margin-top: 6%;  margin-bottom: 5%;border-radius: 30px;box-shadow: 2px 2px 13px 4px rgba(0, 0, 0, 0.4);">

        <div>

            <h1>Matricula</h1>

            <form action="<?PHP echo constant('URL') . 'enrollment/enroll' ?>" method="POST">
                <label class="matri">N° Curso</label><br>
                <input class="matri_idcurso" type="text" id="idcurso" name="idCourse" value="<?php echo $idCourse ?>" >
                <br>

                <label class="matri">N° de Documento</label><br>
                <input type="text" id="documento" name="idUser" value="<?php echo $idUser ?>" required ><br>

                <label class="matri">fecha</label><br>
                <input class="matri_fecha" type="text" value=<?php echo setDate() ?> id="fechaMatricula" name="erollmentDate" >
                <br><br>

                <input type="submit" class="btn btn-primary " value="matricularme">
                <a href="<?PHP echo constant('URL') . 'courses' ?>" class="btn btn-danger">cancelar</a>
            </form>
        </div>
    </div>
    <div class="container text-center" style="background:linear-gradient(to right, #30127b, #2d8daa, #275891)">
        <?PHP
            // Success Message 
            if(isset($this->data['success']) ){
                $path = constant('URL')."themes?theme=".$_GET['idCourse'];
                echo '<div class="alert alert-success m-1">
                        Matricula existosa
                    </div>

                    <button class="btn btn-success m-4">
                        <a class="text-decoration-none text-white fs-5" 
                        href="'.$path.'">
                            ver contenido de curso
                        </a>
                    </button>
            ';
            } 
            // Error Message 
            if (isset($this->data['error'])) {
                $this->showMessages();
            }
        ?>
    </div>

</body>

</html>