<div class="reports">
    <h2 class="text-center my-5 fw-bolder">
        3 Cursos Mas Solicitados
    </h2>

    <?php 
    $title='3 Cursos Mas Solicitados';
    ob_start(); 
    ?>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>nombre del curso</th>
                <th>cantidad de inscripciones</th>
                <th> </th>
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