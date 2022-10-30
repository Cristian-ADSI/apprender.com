<?PHP

// var_dump($this->data);
$course = $this->data['course'][0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?PHP echo constant('BOOTSTRAP') ?>">
    <link rel="stylesheet" href="<?PHP echo constant('URL') ?>/public/css/editCourse.css">
    <title>Apprender</title>
</head>

<body>
    <?PHP require_once "views/components/header.php" ?>
    <main class="container">
        <h1 class="text-center mb-5">Editar Curso </h1>

        <div class="course-cover text-center">
            <img src="<?php echo "public/img/covers/" . $course['image'] ?>" width="100px" alt="Course cover">
        </div>

        <div class="w-50 mx-auto mb-5">
            <form action="<?PHP echo constant('URL') . "editcourse/course?id=" . $course['idCourse'] ?>" enctype="multipart/form-data" method="POST">
                <div>

                    <div style="visibility: hidden;">
                        <input type="text" class="form-control" name="cover" value=" <?php echo $course['image'] ?>">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre del curso" value=" <?php echo $course['name'] ?>">
                    </div>

                    <div class="mb-3">

                        <div class="mb-3">
                            <label for="startDate" class="form-label">
                                Fecha Inicial
                            </label>
                            <input type="date" id="startDate" class="form-control" name="fecha_inicial" 
                            value="<?PHP echo $course['startDate']  ?>" >
                        </div>


                        <div class="mb-3">
                            <label for="endDate" class="form-label">
                                Fecha Final
                            </label>
                            <input id="endDate" type="date" class="form-control" name="fecha_final" 
                            value="<?PHP echo $course['endDate']  ?>">
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="number">$</label>
                            <input type="text" class="form-control" name="valor" placeholder="Valor del curso" value=" <?php echo $course['value'] ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="courseDesc">Descripcion del curso</label>
                            <textarea class="form-control mb-3" id="courseDesc" name="descripcion"><?php echo $course['description'] ?></textarea>

                            <label class="form-label" for="courseImage">Caratula</label>
                            <input id="courseImage" type="file" name="imagen">
                        </div>

                    </div>

                    <div>

                        <button type="submit" name="editCourse" class="btn btn-success" value="">
                            Guardar Cambios
                        </button>
                    </div>
            </form>
        </div>
    </main>

</body>

</html>