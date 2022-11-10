<div class="reports">
<h2 class="text-center mt-5"> 3 Cursos Mas Solicitados</h2>
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
    <div class="dowload">
        <a href="../../pdfs/pdf4.php">
            <button class="btn btn-primary">
                descargar pdf
            </button>
        </a>
    </div>
</div>