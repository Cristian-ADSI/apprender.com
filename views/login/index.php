<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprender</title>
    <!-- styles  -->
    <link rel="stylesheet" href="<?PHP echo constant('URL') ?>assets/css/login.css">
    <!-- Bootstrap -->
    <link href="<?PHP echo constant('BOOTSTRAP') ?>" rel="stylesheet">
</head>

<body>
    <div class="container">

        <div class="main_form">

            <h1 class="text-center text-light pt-4 form-title">Bienvenido a Apprender</h1>

            <form class="p-5" role="form" action="<?PHP $_SERVER['PHP_SELF'] ?>" method="POST">

                <!-- Role  -->
                <div class="mb-3">
                    <h4 class=" text-light fw-bold">Como deseas ingresar?</h4>
                    <select id="disabledSelect" class="form-select" name="role" required>
                        <option value="">Selecciona Tu Perfil</option>
                        <option value="1">Estudiante</option>
                        <option value="2">Profesor</option>
                        <option value="3">Administrador</option>
                    </select>
                </div>

                <!-- DNI  -->
                <div class="mb-3">
                    <h5 class="fw-bold text-light">Documento de identidad</h5>
                    <input type="text" class="form-control" name="id" id="id" placeholder="Ingresa tu N° documento" required>
                </div>

                <!-- Password  -->
                <div class="mb-3">
                    <h5 class="fw-bold text-light">Contraseña</h5>
                    <input type="password" class="form-control" name="password" id="PASSWORD" placeholder="Digita tu contraseña" required>
                </div>

                <!-- Btn Success -->
                <div class="text-center submit-button">
                    <button type="submit">ingresar</button>
                </div>

                <!-- Sing up  -->
                <a href="#" class="singup-link"> No tienes una cuenta? Registrate </a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>