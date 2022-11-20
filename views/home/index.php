<!DOCTYPE html>
<html lang="es">

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
        <div class="container">
            <div class="logo">
                <img src="<?php echo constant('URL') ?>public/img/utilities/logo.png" alt="Apprender.com" class="logo" />
            </div>
            <nav>
                <a href="<?php echo constant('URL')?>singup" class="select">Registrarse</a>
                <a href="<?php echo constant('URL') ?>login" class="select">Acceder</a>
            </nav>
        </div>
    </header>

    <section id="hero">
        <h1><¡Aprende a programar <br>con los mejores!></h1>  
    </section>

    <section id="somos-apprender">
        <div class="container">
            <div class="img-container"></div>
            <div class="texto">
                <h2>¡Somos <span class="color-acento">Apprender!</span></h2>
                <p>Somos un proyecto que promueve el aprendizaje online de la programación de forma gratuita en el oriente antioqueño de Colombia. Dando a conocer los diferentes cursos, en diferentes temas y temáticas para el área tecnológica, sensibilizando a los usuarios en aprender y desarrollar la importancia del aprendizaje de la programación al día de hoy.
                </p>
            </div>
        </div>
    </section>

    <section id="guide">
        <!-- Cards  -->
        <div class="cards-container">
            <div class="card">
                <div class="card-img">
                    <figure>
                        <img src="public/img/utilities/1.jpg" alt="" />
                        <div class="capa">
                            <h3>Paso 1</h3>
                            <p>
                                ...Bienvenid@...
                                Para empezar, registrate y llena
                                el formulario con tus datos.
                            </p>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <figure>
                        <img src="public/img/utilities/2.jpg" alt="" />
                        <div class="capa">
                            <h3>Paso 2</h3>
                            <p>
                                Logueate e ingresa con tu rol,
                                así podrás empezar a navegar y
                                difrutar de la información que
                                tenemos para tí.
                            </p>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <figure>
                        <img src="public/img/utilities/3.jpg" alt="" />
                        <div class="capa">
                            <h3>Paso 3</h3>
                            <p>
                                Eliges y accede a los diferentes
                                cursos de tu interés, con ello podrás
                                afianzarte y empezar con un reto nuevo.
                            </p>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <figure>
                        <img src="public/img/utilities/4.jpg" alt="" />
                        <div class="capa">
                            <h3>Paso 4</h3>
                            <p>
                                En cada curso tendrás la oportunidad
                                de formarte, aprender o repasar en
                                diferentes ramas de la informática.
                            </p>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section id="caracteristicas">
        <div class="container">
            <ul>
                <li>👍​ 100% online</li>
                <li>👍​ Flexibilidad de horarios</li>
                <li>👍​ Soporte 1:1</li>
                <li>👍​ Asesorias</li>
            </ul>
        </div>       
    </section>

    <section id="final">
        <h2>...¿ Listo para programar ?...</h2>
        <form action="<?php echo constant('URL') ?>singup" class="select">
        <button>¡ Aplica yá !</button>
        </form>
    </section>

    <footer>
        <div class="container">
            <p>&copy; Apprender.com  2022</p>
        </div>
    </footer>

</body>

</html>