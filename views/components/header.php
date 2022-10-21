<?PHP
if (empty($_SESSION['sessionImage'])) {

    $userImage = constant('URL') . 'public/img/profiles/profile.jpg';
} else {

    $userImage = constant('URL') . 'public/img/profiles/' . $_SESSION['sessionImage'];
}

?>
<header>
    <div class="group-header">
        <div class="contenedor-Logo">
            <div class="contorno">
                <div class="logo">
                    <img src="<?PHP constant('URL') ?>/public/img/utilities/logo.png" alt="">
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
        <div class="contenedor-usuario">
            <div class="contorno-usuario">
                
                <div class="imagen-usuario">
                    <img src=<?php echo $userImage ?>>
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