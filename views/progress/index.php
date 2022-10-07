
<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

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
        <!-- <div class="contenedor-cursos">
            <?php
            //cunsulta paa mostrar los cursos
            $sql = ("SELECT C.id_curso,c.imagen,c.nombre,c.descripcion,c.fecha_inicial,c.fecha_final
                 FROM cursos C 
                 INNER join matriculas M ON c.id_curso = m.id_curso
                 INNER JOIN usuarios U ON u.id = m.id_usuarios
                 WHERE m.id_usuarios='1039784054'"
            );
            $result = mysqli_query($con, $sql);
            while ($mostrar = mysqli_fetch_array($result)) {

                $idCurso = $mostrar['id_curso'];
                $tokenHash =  hash_hmac('sha1', $idCurso, KEY_TOKEN);
            ?>
                <div class="card-curso" id="curso">
                    <div class="imagen-curso">
                        <img src=<?php echo $mostrar['imagen'] ?>>
                    </div>
                    <div class="contenido-curso">
                        <h4><?php echo $mostrar['nombre'] ?></h4>
                        <p>
                            <?php echo $mostrar['descripcion'] ?>
                        </p>
                        <b><label>disponibilidad del curso:</label></b>
                        <br>
                        <label id="fecha_inicial">Fecha inicial:<?php echo " " . $mostrar['fecha_inicial'] ?></label> <br>
                        <label id="fecha_final">Fecha final:<?php echo " " . $mostrar['fecha_final'] ?></label><br>
                        <div class="boton">
                            <a href="temas.php?id=<?php echo $idCurso; ?>&token=<?php echo $tokenHash ?>" class="btn">
                                continuar
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div> -->
    </main>
</body>

</html>