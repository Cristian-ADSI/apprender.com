<div class="row reports">
    <h2 class="text-center fw-bolder my-5">
        Profesor con mas estudiantes inscritor en el curso elegido
    </h2>

    <div class="col-md-6">
        <h4 style="margin-bottom: 50px;">digite los siguientes datos</h4>
        <form action="<?php echo URL ?>app/loadReport_2" method="post">
            <label for="" class="label mb-3">curso</label><br>
            <input class="mb-3" type="text" name="curso" id="curso" required><br>
            <input class="btn btn-primary" type="submit" value="continuar" name="studensTeacher">
        </form>
    </div>


    <div class="col-md-6">
        <?php
        $title = 'Profesor con mas estudiantes inscritor en el curso elegido';
        ob_start();
        if (isset($this->data)) {
        ?>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>profesor</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>curso</th>
                        <th>matriculas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    # code...
                    foreach ($this->data as $row) {
                    ?>
                        <tr>
                            <td><?php echo $row['profesor'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['apellido'] ?></td>
                            <td><?php echo $row['curso'] ?></td>
                            <td><?php echo $row['matriculas'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php
        }else{
            echo"<span class='my-5 text-center' style=' display:block; margin:0 auto; font-size: 22px;' >No se hallaron resultados</span>";
        }

        $htmlTemplate = ob_get_clean();
        echo $htmlTemplate;
        ?>
    </div>
</div>