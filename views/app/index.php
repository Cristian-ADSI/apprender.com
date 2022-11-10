<?PHP 


$view = isset($_GET['view'])? $_GET['view'] : '';

if (!isset($_SESSION['sessionIdUser'] )) {
    header("Location:" . constant('URL'));
}

if ($_SESSION['sessionRole'] == 1) {
    require_once 'views/students/index.php';
}

if ($_SESSION['sessionRole'] == 2) {
    require_once 'views/teacher/index.php';
}

if ($_SESSION['sessionRole'] == 3) {
    require_once 'views/admin/index.php';
}
