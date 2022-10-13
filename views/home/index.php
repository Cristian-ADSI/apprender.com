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
                    <img src="<?php echo constant('URL') ?>public/img/utilities/logo-apprender.png" alt="Apprender.com" class="brand-img" />
                    <p>Apprender</p>
                </a>
            </div>
            <!-- Authen Butons  -->
            <div class="access">
                <a href="<?php echo constant('URL') ?>singup" class="btn-singUp">Registrarse</a>
                <div class="btn-singIn">
                    <a href="<?php echo constant('URL') ?>login">Ingresar</a>
                </div>
            </div>
        </nav>
        <!-- Banner  -->
        <div class="banner"></div>
    </header>

    <section class="guide">
        <!-- Cards  -->
        <div class="cards-container">
            <div class="card">

                <div class="card-img">
                    <img src="https://artprojectsforkids.org/wp-content/uploads/2021/01/Rubber-Ducky.jpeg" alt="" />
                </div>

                <div class="card-body">
                    <p>
                        Explicación N°1
                    </p>
                </div>

            </div>

            <div class="card">
                <div class="card-img">
                    <img src="https://artprojectsforkids.org/wp-content/uploads/2021/01/Rubber-Ducky.jpeg" alt="" />
                </div>

                <div class="card-body">
                    <p>
                        Explicación N°2
                    </p>
                </div>

            </div>

            <div class="card">

                <div class="card-img">
                    <img src="https://artprojectsforkids.org/wp-content/uploads/2021/01/Rubber-Ducky.jpeg" alt="" />
                </div>

                <div class="card-body">
                    <p>
                        Explicación N°3
                    </p>
                </div>

            </div>

            <div class="card">
                <div class="card-img">
                    <img src="https://artprojectsforkids.org/wp-content/uploads/2021/01/Rubber-Ducky.jpeg" alt="" />
                </div>

                <div class="card-body">
                    <p>
                        Explicación N°4
                    </p>
                </div>

            </div>
        </div>

    </section>
</body>

</html>