<header>
    <div class="group-header">
        <div class="contenedor-Logo">
            <div class="contorno">
                <div class="logo">
                    <img src="<?PHP constant('URL') ?>/public/img/utilities/logo-apprender.png" alt="">
                </div>
                <div class="nombre-proyecto">
                    <label>
                        apprender
                    </label>
                </div>
            </div>
        </div>
        <div class="contenedor-titulo">
        </div>
        <?php
        //cunsulta paa mostrar usuario
        // $sql=("SELECT `id`,`nombre`,`imagen` FROM `usuarios` WHERE 1");
        // $result=mysqli_query($con ,$sql);
        // $mostrarr=mysqli_fetch_array($result);           
        ?>
        <div class="contenedor-usuario">
            <div class="contorno-usuario">
                <div class="imagen-usuario">
                    <!-- <img src=<?php echo $mostrarr['imagen'] ?>> -->
                </div>
                <div class="nombre-Usuario">
                    <label>
                      <?php echo $_SESSION['sessionName'] ?> 
                    </label>
                </div>
            </div>
        </div>
    </div>
</header>