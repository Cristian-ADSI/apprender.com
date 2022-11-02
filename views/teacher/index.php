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
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?PHP echo constant('BOOTSTRAP') ?>">

    <title>Apprender</title>
</head>

<body>
    <?PHP require_once "views/components/header.php" ?>
    <main class="container">

        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#courseModal">
            Crear curso Nuevo
        </button>

        <?php include_once   "views/components/$view.php"; ?>


    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>