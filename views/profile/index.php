<?PHP
$user = $this->data;


$image = empty($_SESSION['sessionImage'])
    ? constant('URL') . 'public/img/profiles/profile.jpg' :
    constant('URL') . 'public/img/profiles/' . $_SESSION['sessionImage'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles  -->
    <link href="<?PHP echo constant('URL') ?>/public/css/profile.css" rel="stylesheet">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?PHP echo constant('BOOTSTRAP') ?>">

    <title>Apprender</title>
</head>

<body style="background-image:url(/public/img/utilities/fondo1.png);">
    <div class="container w-75 mt-3" style="background:linear-gradient(to right, #30127b, #2d8daa, #275891)">



        <button class="btn btn-success my-2"><a class="text-decoration-none text-white" href="<?PHP echo constant('URL') . "app" ?>">Volver</a></button>

        <div class="title-perfil">
            <form action="<?PHP echo constant('URL') . "profile/update" ?>" method="POST" enctype="multipart/form-data" class="">
                <div class="text">
                    <h1 class="title t-1 mt-1"><?php echo "Perfil " . $_SESSION['sessionName'] ?></h1>

                    <section class="form1 row p-1">

                        <article class="col-md-6 text-center">
                            <h2>Foto perfil</h2>
                            <img src="<?php echo $image ?>" alt="">
                            <div class="form-imagen">
                                <div class="imagen">
                                    <input type="file" name="imagen" id="imagen" class="select-image mb-3">

                                    <button class="btn btn-secondary d-block m-auto" type="submit" name="deleteImage" value="deleteImage">
                                        Eliminar imagen
                                    </button>

                                    <input class="btn-update" type="submit" value="Actualizar datos">
                                </div>
                            </div>
                            <article class="mt-2">
                                <input class="form-control" type="text" name="cod_rol" value="<?PHP echo $user['roles'] ?>" style="visibility:hidden;">
                            </article>
                        </article>

                        <article class="col-md-6 mt-3">
                            <article class="mt-2">
                                <label class="form-label"> </label>
                                <input class="form-control" type="text" name="id_usuario" value="<?PHP echo $user['idUser'] ?>">
                            </article>

                            <article class="mt-2 text-center text-light">
                                <label class="form-label">Telefono</label>
                                <input class="form-control " type="text" name="telefono" value="<?PHP echo $user['phone'] ?>">
                            </article>

                            <article class="mt-2 text-center text-light">
                                <label class="form-label">Nombre</label>
                                <input class="form-control" type="text" name="nombre" value="<?PHP echo $user['name'] ?>">
                            </article>

                            <article class="mt-2 text-center text-light">
                                <label class="form-label">Apellido</label>
                                <input class="form-control" type="text" name="apellido" value="<?PHP echo $user['lastname'] ?>">
                            </article>

                            <article class="mt-2 text-center text-light">
                                <label class="form-label">Correo</label>
                                <input class="form-control" type="email" name="correo" value="<?PHP echo $user['email'] ?>">
                            </article>

                            <article class="mt-2 text-center text-light">
                                <input class="form-control" type="password" name="clave" value="<?PHP echo $user['password'] ?>" style="pointer-events:none; visibility:hidden;">
                            </article>

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changePassword">
                                Cambiar Contaseña
                            </button>

                            <?PHP if (isset($this->data['success'])) {
                                echo '
                            <div class="alert alert-success" role="alert">
                                ' . $this->data['success'] . '
                            </div>
                        ';
                            } ?>
                        </article>

                    </section>
            </form>
        </div>
        </section>

    </div>

    <div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background:linear-gradient(to right, #30127b, #2d8daa, #275891)">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cambiar tu Contraseña</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?PHP echo constant('URL') . "profile/update" ?>" method="POST">
                    <div class="modal-body" style="background:linear-gradient(to right, #30127b, #2d8daa, #275891)">

                        <article class="mt-2">
                            <input class="form-control" type="password" name="nuevaClave" placeholder="Ingresa tu nueva contraseña">
                        </article>
                    </div>
                    <div class="modal-footer" style="background:linear-gradient(to right, #30127b, #2d8daa, #275891)">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="newPassword" value="newPassword">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</body>

</html>