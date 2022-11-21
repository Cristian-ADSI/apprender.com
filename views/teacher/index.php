<?PHP
$view = isset($_GET['view']) ? $_GET['view']  : 'courses';


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?PHP echo constant('URL') ?>/public/css/teacher.css">
    <link rel="stylesheet" href="<?PHP echo constant('URL') ?>/public/css/menuTeacher.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?PHP echo constant('BOOTSTRAP') ?>">
    <!-- Normalize: para ver todos los estilos iguales en los diferentes navegadores  -->
    <link rel="stylesheet" href="/public/css/normalize.css">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Apprender</title>
</head>

<body style="background-image:url(/public/img/utilities/fondoAzul.jpg);">
    <?PHP require_once "views/components/header.php" ?>
    
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
                <a href="<?PHP echo constant('URL')."app/closeSession"?>">
                    <ion-icon name="cierre-sesion"></ion-icon>Cerrar Sesion
                </a>
            </li>
        </ul>
    </nav>
</div>
    <main class="container w-75">

    <button type="button" class="btn btn-light my-4 w-100 text-xl-center" data-bs-toggle="modal" data-bs-target="#courseModal">
            Crear curso Nuevo
        </button>

        <?php include_once   "views/components/$view.php"; ?>


    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>