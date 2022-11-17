<?PHP
if (empty($_SESSION['sessionImage'])) {

    $userImage = constant('URL') . 'public/img/profiles/profile.jpg';
} else {

    $userImage = constant('URL') . 'public/img/profiles/' . $_SESSION['sessionImage'];
}

?>
<header>
    <div class="container-fluid p-0">
        <nav class="navbar " style="background:linear-gradient(to right, #30127b, #2d8daa, #275891)">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo constant('URL') ?>public/img/utilities/logo.png" alt="Apprender.com" class="logo" width="100%" height="50">
                </a>
                <div class="contenedor-usuario  d-flex align-end">
                    <div class="contorno mt-0 col">
                        <div class="imagen-usuario col-3">
                            <img src=<?php echo $userImage ?>>
                        </div>

                        <div class="nombre-Usuario col-9">
                            <label class="">
                                <?php echo $_SESSION['sessionName'] ?>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- <div class="logo col-sm-6"> 
                <img src="<?php echo constant('URL') ?>public/img/utilities/logo.png" alt="Apprender.com" class="logo" />
            </div>
            <div class="contenedor-usuario">

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
</header>-->
<!-- <header> 
    <div class="group-header">
        <div class="contenedor-Logo">
            <div class="contorno">
                <div class="logo">
                    <img src="<?PHP constant('URL') ?>/public/img/utilities/logo.png" alt="">
                </div>
            </div>
        </div>
        
    </div>
</header>-->