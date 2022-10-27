<?php
// $idUser = ($_SESSION['idUser']);

// $result = mysqli_query($con, $query);

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
            <?php while ($course = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $course['id_curso'] ?></td>

                    <td>
                        <img class="course-image" src="<?php echo $course['imagen'] ?>" alt="<?php echo $course['nombre'] ?>">
                        <?php echo $course['nombre'] ?>
                    </td>

                    <td><?php echo $course['fecha_inicial'] ?></td>
                    <td><?php echo $course['fecha_final'] ?></td>
                    <td><?php echo $course['valor'] ?></td>
                    <td>

                        <button type="button" class="btn btn-warning btn-edit">
                            <a class="text-dark" href="components/editCourses.php?id=<?PHP echo $course['id_curso'] ?>">
                                Editar
                            </a>
                        </button>

                        <form action="profesor.php?view=listCourses&delete=<?php echo $course['id_curso'] ?>" class="d-inline" method="POST">
                            <button type="submit" name="deleteCourse" class="btn btn-danger" value="<?php echo $course['id_curso'] ?>">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>

<?php include_once "formModal.php";
