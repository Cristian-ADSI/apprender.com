<?php
session_start();

if (!isset($_SESSION['sessionIdUser'])) {
    header("Location:" . constant('URL'));
}

// echo "<pre>";     
// var_dump($this->data);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?PHP echo constant('URL') ?>public/css/themes.css" rel="stylesheet">
    <link href="<?PHP echo constant('BOOTSTRAP') ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Temas</title>
</head>

<body>

    <?PHP require_once "views/components/header.php" ?>
    <?PHP require_once "views/components/sidebar.php" ?>

    <div class="contenedorTemas">
        <h2 class="titulo">
            Contenido del Curso
        </h2>
        <div class="contenedorLista">
        </div>
        <?PHP foreach ($this->data as $theme) { 
            $thematics = $theme['thematics']
        ?>
            <b><p class="NombreTema"><?php echo $theme['nombre']?></p></b>
            <?php  foreach ($thematics as $key => $item) {?>
                <a href="" style=" text-decoration: none;">
                        <li style="text-decoration: none; color:black;  margin-bottom: 5px;">
                        <?php echo $item['nombre'];?>
                        </li>
                </a>
            <?php  }?>
        <?PHP } ?>
    </div>
</body>

</html>