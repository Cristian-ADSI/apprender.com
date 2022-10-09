<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender</title>
    <!-- Styles  -->
    <link href="<?PHP echo constant('URL') ?>/public/css/singup.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?PHP echo constant('BOOTSTRAP') ?>" rel="stylesheet">
</head>

<body>
    <div class="container ">
        <div class="main-form">
            <h1 class="text-center text-light mt-3">Registrate en Apprender </h1>
            <form class="px-5 py-1" role="form" action="<?PHP echo constant('URL') ?>singup/newUSer" method="POST">
                <!-- Info  -->
                <div class="row ">

                    <div class="col-md-6 mt-2">

                        <h5 class="fw-bold text-light">Datos personales</h5>
                        <!-- DNI  -->
                        <div class="mb-2">
                            <input type="text" class="form-control" name="idUser" placeholder="Ingresa tu N° documento" required>
                        </div>
                        <!-- Names   -->
                        <div class="mb-2">
                            <input type="text" class="form-control" name="name" placeholder="Nombres" required>
                        </div>
                        <!-- Lastnames  -->
                        <div class="mb-2">
                            <input type="text" class="form-control" name="lastname" placeholder="Apellidos" required>
                        </div>

                    </div>

                    <div class="col-md-6 mt-2">

                        <h5 class="fw-bold text-light">Datos de contacto</h5>
                        <!-- Phone  -->
                        <div class="mb-2">
                            <input type="text" class="form-control" name="phone" placeholder="Telefono" required>
                        </div>
                        <!-- Email  -->
                        <div class=" mb-2">
                            <input type="email" class="form-control" name="email" placeholder="Correo electronico" required>
                        </div>

                    </div>
                </div>
                <!-- Role   -->
                <div class="row mt-2">
                    <p class="text-white">Escoja el rol con el que desea Registrase:</p>
                    <div class="col-md-6 mt-2">
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" name="roles[]" value="1" id="estudiante">
                            <label class="form-check-label text-white" for="estudiante">
                                Estudiante
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="roles[]" value="2" id="estudiante">
                            <label class="form-check-label text-white" for="profesor">
                                Profesor
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Autentificacion  -->
                <div class="row ">
                    <h5 class="fw-bold text-light">Autentificacion</h5>
                    <div class="col-md-12 key-content">
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="clave" required autocomplete="off">
                        </div>

                        <div>
                            <input type="password" class="form-control" name="password_conf" placeholder="Confirma tu clave" required autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="alert-zone p-0">
                    <?PHP $this->showMessages() ?>
                </div>

                <div class="text-center submit-button">
                    <button type="submit">Enviar</button>

                    <a href="<?PHP echo constant('URL') ?>login" class="singup-link ">
                        Ya tienes una cuenta? Ingresa
                    </a>
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>