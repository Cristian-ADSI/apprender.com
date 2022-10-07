<div class="wrapper">
    <input type="checkbox" id="btn" hidden>
    <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
    </label>
    <nav id="sidebar">
        <div class="title">
            Menu
        </div>
        <ul class="list-items">
            <!-- Inicio  -->
            <li>
                <a href="<?PHP echo constant('URL') ?>app">
                    <ion-icon name="home-outline"></ion-icon>Inicio
                </a>
            </li>
            <!-- Cursos  -->
            <li>
                <a href="<?PHP echo constant('URL') ?>courses">
                    <ion-icon name="information-outline"></ion-icon>Cursos
                </a>
            </li>
            <!-- Perfil  -->
            <li>
                <a href="<?PHP echo constant('URL') ?>profile">
                    <ion-icon name="paw-outline"></ion-icon>perfil
                </a>
            </li>
            <!-- Progreo  -->
            <li>
                <a href="<?PHP echo constant('URL') ?>progress">
                    <ion-icon name="person-outline"></ion-icon>mi progreso
                </a>
            </li>
            <!-- Cerrar Sesion  -->
            <li>
                <a href="cerrarS.php">
                    <ion-icon name="cierre-sesion"></ion-icon>Cerrar Sesion
                </a>
            </li>
        </ul>
    </nav>
</div>