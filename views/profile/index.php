<?PHP 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?PHP echo constant('BOOTSTRAP') ?>">

    <title>Apprender</title>
</head>

<body>
    <section class="container-all">

        <section class="ctn-form">

            <h1 class="title"><?php echo "Perfil". $_SESSION['name'] ?></h1>

            <form action="actualizar.php" method="POST" enctype="multipart/form-data">

                <section class="form1 row">

                    <article class="col-md-6 text-center">
                        <h2>Foto perfil</h2>
                        <img src="<?php echo $imagen ?>" alt="">

                        <div class="form-imagen">
                            <div class="imagen">
                                <input type="file" name="imagen" id="imagen" class="select-image">

                                <button class="btn btn-secondary" type="submit" name="deleteImage" value="deleteImage">
                                    Eliminar imagen
                                </button>

                                <input class="btn-update" type="submit" value="Actualizar datos">
                            </div>
                        </div>

                    </article>

                    <article class="col-md-6">
                        <article class="mt-2">
                            <label class="form-label"><?php echo "id $rolName" ?></label>
                            <input class="form-control" type="text" name="id" value="<?php echo $row['id'] ?>">
                        </article>

                        <article class="mt-2">
                            <label class="form-label">Telefono</label>
                            <input class="form-control" type="text" name="telefono" value="<?php echo $row['telefono'] ?>">
                        </article>

                        <article class="mt-2">
                            <label class="form-label">Nombre</label>
                            <input class="form-control" type="text" name="nombre" value="<?php echo $row['nombre'] ?>">
                        </article>

                        <article class="mt-2">
                            <label class="form-label">Apellido</label>
                            <input class="form-control" type="text" name="apellido" value="<?php echo $row['apellido'] ?>">
                        </article>

                        <article class="mt-2">
                            <label class="form-label">Correo</label>
                            <input class="form-control" type="email" name="correo" value="<?php echo $row['correo'] ?>">
                        </article>

                        <!-- <article class="mt-2" >
                <label class="form-label">Clave</label>
                <input class="form-control disabled" type="text" name="clave" value="
                <?php echo $row['clave'] ?>">
              </article> -->
                    </article>

                </section>
            </form>

        </section>
    </section>
</body>

</html>