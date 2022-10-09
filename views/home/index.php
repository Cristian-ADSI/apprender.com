<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprender</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo constant('BOOTSTRAP') ?>">
    <!-- Styles  -->
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/home.css">
</head>

<body>
    <header>
        <!-- Navbar  -->
        <nav class="navbar">
            <!-- Logo  -->
            <div class="brand">
                <a href="<?php echo constant('URL') ?>">
                    <img src="<?php echo constant('URL') ?>public/img/utilities/logo.png" alt="Apprender.com" class="brand-img" />
                    <h1>pprender</h1>
                </a>
            </div>
            <!-- Authen Buttons  -->
            <div class="access">
                <a href="<?php echo constant('URL') ?>singup" class="btn-singUp">Registrarse</a>
                <div class="btn-singIn">
                    <a href="<?php echo constant('URL') ?>login">Ingresar</a>
                </div>
            </div>
        </nav>
        
    </header>

    <section class="guide">
        <!-- Banner  -->
        <div class="banner"></div>
        <!-- Cards  -->
        <div class="cards-container">
            <div class="card">
                <div class="card-img">
                    <figure>
                        <img src="/public/img/utilities/1.jpg" alt="" />
                        <div class="capa">
                            <h3>Paso 1</h3>
                            <p>
                                ...Bienvenid@...    
                                Para empezar, registrate y llena 
                                el formulario con tus datos.
                                <center style="color: #8EE23D; font-size:50px;">&#8618 </center>
                                

                            </p>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <figure>
                        <img src="/public/img/utilities/2.jpg" alt="" />
                        <div class="capa">
                            <h3>Paso 2</h3>
                            <p>
                                Logueate e ingresa con tu rol,
                                así podrás empezar a navegar y 
                                difrutar de la información que
                                tenemos para tí.
                                <center style="color: #8EE23D;font-size:35px;">&#8618</center>
                            </p>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <figure>    
                        <img src="/public/img/utilities/3.jpg" alt="" />
                        <div class="capa">
                            <h3>Paso 3</h3>
                            <p>
                                Eliges y accede a los diferentes 
                                cursos de tu interés, con ello podrás
                                afianzarte y empezar con un reto nuevo.
                                <center style="color: #8EE23D; font-size:25px;">&#8618 </center>
                            </p>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <figure>    
                        <img src="/public/img/utilities/4.jpg" alt="" />
                        <div class="capa">
                            <h3>Paso 4</h3>
                            <p>
                                En cada curso tendrás la oportunidad
                                de formarte, aprender o repasar en 
                                diferentes ramas de la informática.
                                <center style="color: #8EE23D; font-size:15px;">&#8618 </center>
                            </p>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>
</body>

</html>