<?PHP 
session_start();

if ($_SESSION['sessionRole'] == 1) {
    require_once 'views/students/index.php';
}
?>

