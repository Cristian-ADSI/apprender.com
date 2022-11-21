<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- styles  -->
    <link rel="stylesheet" href="<?PHP echo constant('URL') ?>/public/css/student.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?PHP echo constant('BOOTSTRAP') ?>">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Apprender</title>
</head>

<body style="background-image:url(/public/img/utilities/fondo1.png);">
    <?PHP require_once "views/components/header.php" ?>
    <?PHP require_once "views/components/sidebar.php" ?>

    <main>

        <div class="group-cards"  style="background:linear-gradient(to right, #30127b, #2d8daa, #275891)">

            <div class="card1">
                <div class="imagen-1">
                    <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="contenido">
                    <h4>Busca</h4>
                    <p> En esta aplicacion podras encontrar diversos
                        cursos sobre desarrollo de software. <br>
                        Entra y busca el curso que mas te guste
                    </p>
                </div>
            </div>

            <div class="card2">
                <div class="imagen-2">
                    <img src="https://images.pexels.com/photos/735911/pexels-photo-735911.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                </div>
                <div class="contenido">
                    <h4>Practica</h4>
                    <p>Para avansar mas rapido en tu aprendisaje
                        practica con los ejercicios propuestos
                        dejados por los instructores.
                    </p>
                </div>
            </div>

            <div class="card3">
                <div class="imagen-3">
                    <img src="https://images.pexels.com/photos/6193659/pexels-photo-6193659.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="contenido">
                    <h4>aprende</h4>
                    <p>
                        aprende tecnologias o temas nuevos para
                        que sigas creciendo laboral y profecionalmente
                    </p>
                </div>
            </div>
            
        </div>
    </main>
</body>

</html>