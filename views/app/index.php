<?PHP 
session_start();

if (!isset($_SESSION['sessionIdUser'] )) {
    header("Location:" . constant('URL'));
}

if ($_SESSION['sessionRole'] == 1) {
    require_once 'views/students/index.php';
}
?>

