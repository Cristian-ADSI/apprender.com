<?php
session_start();

function setDate()
{
    date_default_timezone_set("America/bogota");
    return date("d-m-Y");
}

$idUser = $_SESSION['sessionIdUser'];
// include "conexion.php";
// include "function/funciones.php";

$idCourse = isset($_GET['course']) ? $_GET['course'] : NULL;
// $token = isset($_GET['token']) ? $_GET['token'] : NULL;

// if ($id == '' || $token == '') {
//     echo "error al relizar la peticion favor verifique";
//    exit;
// }

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

<body>
    <div class="contenedor" style=" width: 45%;height: 350px;text-align: center;margin: 27%;margin-top: 6%;  margin-bottom: 5%;border-radius: 30px;box-shadow: 2px 2px 13px 4px rgba(0, 0, 0, 0.4);">
        <div>
            <h1>Matricula</h1>

            <form action="insertar_Matricula/insert.php" method="POST">
                <label class="matri">N° Curso</label><br>
                <input class="matri_idcurso" type="text" id="idcurso" name="idCurso" value="<?php echo $idCourse ?>">
                <br>

                <label class="matri">N° de Documento</label><br>
                <input type="text" id="documento" name="idUser" value="<?php echo $idUser ?>" required><br>

                <label class="matri">fecha</label><br>
                <input class="matri_fecha" type="text" value=<?php echo setDate() ?> id="fechaMatricula" name="erollmenDate">
                <br><br>

                <input type="submit" class="btn btn-primary" value="matricularme">
                <a href="cursos.php" class="btn btn-danger">cancelar</a>
            </form>
        </div>
    </div>
</body>

</html>