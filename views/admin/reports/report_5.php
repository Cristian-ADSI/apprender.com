<div class="row reports">
    <h2 class="text-center fw-bolder my-5">
        Cantidad de Matriculas Entre Meses Elegidos
    </h2>

    <div class="col-md-6">
        <h4 style="margin-bottom: 50px;">digite los siguientes datos</h4>
        <form action="<?php echo URL ?>app/loadReport_5" method="post">
            <label>año</label><br>
            <input class="mb-2" type="text" name="año" id="año" required><br>

            <label>mes inicial</label><br>
            <input class="mb-2" type="number" name="mes_inicial" id="mes_inicial" required><br>

            <label>mes final</label><br>
            <input class="mb-2" type="number" name="mes_final" id="mes_final" required><br>

            <input class="btn btn-primary" type="submit" value="continuar">
        </form>
    </div>


    <div class="col-md-6">
        <?php
        $title = 'Cantidad de Matriculas Entre Meses Elegidos';
        ob_start();
        if (isset($_SESSION['report5']) && count($_SESSION['report5']) > 0) {
        ?>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>inscripcciones</th>
                        <th>año</th>
                        <th>mes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($_SESSION['report5'] as $row) {
                    ?>
                        <tr>
                            <td><?php echo $row['matriculas'] ?></td>
                            <td><?php echo $row['año'] ?></td>
                            <td><?php echo $row['mes'] ?></td>
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