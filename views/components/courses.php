<?php
// $idUser = ($_SESSION['idUser']);
// echo "<pre>";
// var_dump($this->data);
// echo "</pre>";

?>


<section class="container">
    <h1>Lista de cursos</h1>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>Fecha Inical</th>
                <th>Fecha Final</th>
                <th>Valor</th>
                <th>Accion</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            // foreach ($variable as $key => $value) {
            //     # code...
            // }
            foreach ($this->data as $course) { ?>
                <tr>
                    <td><?php echo $course['idCourse'] ?></td>

                    <td>
                        <img class="course-image" src="<?php echo $course['image'] ?>" alt="<?php echo $course['name'] ?>">
                        <?php echo $course['name'] ?>
                    </td>

                    <td><?php echo $course['startDate'] ?></td>
                    <td><?php echo $course['endDate'] ?></td>
                    <td><?php echo $course['value'] ?></td>
                    <td>

                        <button type="button" class="btn btn-warning btn-edit">
                            <a class="text-dark" href="views/components/editCourses.php?id=<?PHP echo $course['idCourse'] ?>">
                                Editar
                            </a>
                        </button>

                        <form action="profesor.php?view=listCourses&delete=<?php echo $course['idCourse'] ?>" class="d-inline" method="POST">
                            <button type="submit" name="deleteCourse" class="btn btn-danger" value="<?php echo $course['idCourse'] ?>">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>

<?php include_once "views/components/createCourse.php";
