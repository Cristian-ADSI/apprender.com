<div class="reports">
    <h2 class="text-center my-5 fw-bolder">
        Los tres Cursos Mas Solicitados
    </h2>

    <?php 
    $title='Los tres Cursos más Solicitados';
    ob_start(); 
    ?>
    <table class="table text-light">
        <thead class="table-dark">
            <tr>
                <th>Nombre del curso</th>
                <th>Cantidad de inscripciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->data as $row) {
            ?>
                <tr>
                    <td><?php echo $row['nombre del curso'] ?></td>
                    <td><?php echo $row['cantidad de inscripciones'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php 
$htmlTemplate = ob_get_clean(); 
echo $htmlTemplate;
?>