<div class="row reports">
    <h2 class="text-center fw-bolder my-5">
        Usuarios registrados en el año elegido
    </h2>

    <div class="col-md-6">
        <h4 style="margin-bottom: 50px;">Digite los siguientes datos</h4>
        <form action="<?php echo URL ?>app/loadReport_6" method="post">
            <label>Año</label><br>
            <input class="mb-2" type="text" name="año" id="año" required><br>

            <input class="btn btn-primary" type="submit" value="continuar">
        </form>
    </div>


    <div class="col-md-6">
        <?php
        $title = ' Usuarios Registrados en El año Elegido';
        ob_start();
        if (isset($_SESSION['report6']) && count($_SESSION['report6']) > 0) {
        ?>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($_SESSION['report6'] as $row) {
                    ?>
                        <tr>
                            <td><?php echo $row['id_usuario'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['apellido'] ?></td>
                            <td><?php echo $row['fecha'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php
        } else {
            echo "
            <span 
            class='my-5 text-center' 
            style=' 
                display:block; 
                margin:0 auto; 
                font-size: 22px;'
            >
            No se hallaron resultados</span>
            ";
        }

        $htmlTemplate = ob_get_clean();
        echo $htmlTemplate;
        ?>
    </div>
</div>