<?PHP
// echo '<pre>';
// var_dump($this->data);
// echo '</pre>';
$themes = $this->data['content'];
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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Apprender</title>
</head>

<body>
    <?PHP require_once "views/components/header.php" ?>
    <main class="container">
        <!-- Curso  -->
        <h1 class="text-center mb-5">Editar Curso </h1>

        <div class="course-cover text-center">
            <img src="<?php echo "public/img/covers/" . $course['image'] ?>" width="100px" alt="Course cover">
        </div>

        <div class="w-50 mx-auto mb-5">
            <form action="<?PHP echo constant('URL') . "editcourse/course?idc=" . $course['idCourse'] ?>" enctype="multipart/form-data" method="POST">
                <div>

                    <div style="visibility: hidden;">
                        <input type="text" class="form-control" name="cover" value="<?php echo $course['image'] ?>">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre del curso" value=" <?php echo $course['name'] ?>">
                    </div>

                    <div class="mb-3">

                        <div class="mb-3">
                            <label for="startDate" class="form-label">
                                Fecha Inicial
                            </label>
                            <input type="date" id="startDate" class="form-control" name="fecha_inicial" value="<?PHP echo $course['startDate']  ?>">
                        </div>


                        <div class="mb-3">
                            <label for="endDate" class="form-label">
                                Fecha Final
                            </label>
                            <input id="endDate" type="date" class="form-control" name="fecha_final" value="<?PHP echo $course['endDate']  ?>">
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="number">$</label>
                            <input type="text" class="form-control" name="valor" placeholder="Valor del curso" value=" <?php echo $course['value'] ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="courseDesc">Descripcion del curso</label>
                            <textarea class="form-control mb-3" id="courseDesc" name="descripcion"><?php echo $course['description'] ?></textarea>

                            <!-- <label class="form-label" for="courseImage">Caratula</label>
                            <input id="courseImage" type="file" name="imagen"> -->
                        </div>

                    </div>

                    <div>

                        <button type="submit" name="editCourse" class="btn btn-success" value="">
                            Guardar Cambios
                        </button>
                    </div>
            </form>
        </div>

        <!-- Tems  -->
        <h2 class="text-center my-5">Temas</h2>
        <div class="accordion" id="createThemeModal">
            <button 
            type="button"
            class="btn btn-primary mb-3"
            data-bs-toggle="modal"
            data-bs-target="#createTheme">
                Nuevo Tema
            </button>
            <?php
            require_once "views/components/editTheme.php";
            require_once "views/components/editThematics.php";
            require_once "views/components/createTheme.php";
            require_once "views/components/createThematics.php";
            foreach ($themes as $theme) { ?>
                <div class="accordion-item mb-3">
                    <button 
                    class="btn btn-secondary d-flex gap-3 editTheme"
                    data-bs-toggle="modal"
                    data-bs-target="#themeModal"
                    data-name="<?php echo $theme['nombre'] ?>"
                    id="<?php echo $theme['id_tema'] ?>">
                        <span class="material-symbols-outlined">edit</span>
                    </button>

                    <h2 class="accordion-header" id="headingOne">
                        <button 
                        class="accordion-button" 
                        type="button" 
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse<?php echo $theme['id_tema'] ?>"
                        aria-expanded="true"
                        aria-controls="collapse<?php echo $theme['id_tema'] ?>">
                            <?PHP echo $theme['nombre'] ?>
                        </button>
                    </h2>

                    <div id="collapse<?php echo $theme['id_tema'] ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionTheme">
                        <div class="accordion-body">
                            <!-- Tematicas -->
                            <button
                            class="btn btn-primary mb-3 newThematic"
                            data-bs-toggle="modal"
                            data-bs-target="#newThematics"
                            data-theme="<?php echo $theme['id_tema'] ?>">
                            Nueva tematica
                            </button>

                            <?php  
                            foreach ($theme['thematics'] as $key => $thematic) {
                            ?>
                                <article class="mb-3">
                                    <h4 
                                    style="cursor: pointer;" 
                                    class="editThematics" 
                                    data-desc="<?php echo $thematic['descripcion'] ?>" 
                                    data-video="<?php echo $thematic['video'] ?>" 
                                    data-name="<?php echo $thematic['nombre'] ?>" data-bs-toggle="modal" 
                                    data-bs-target="#thematicsModal" 
                                    id="<?php echo $thematic['id_tematica'] ?>">
                                        <?php echo $thematic['nombre'] ?>
                                        <span class="material-symbols-outlined">edit</span>
                                    </h4>
                                    <p><?php echo $thematic['descripcion'] ?></p>
                                    <a href="<?php echo $thematic['video'] ?>"><?php echo $thematic['video'] ?></a>
                                </article>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="public/js/editCourse.js"></script>
</body>

</html>