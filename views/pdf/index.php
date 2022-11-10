<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap  -->
    <link 
    type="text/css"
    rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Apprender</title>
   
<style>
  
</style>

</head>

<body>
    <section class="container">
        <span class="text-center" 
        style="font-size:30px; display:block; margin: 0 auto;" >
        <?php echo $_GET['title']?>
        </span>
        
        <?php echo $_POST['htmlTemplate'] ?>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
$html = ob_get_clean();

// echo $html;
require_once  "libs/dompdf/autoload.inc.php";
use Dompdf\Dompdf;


$dompdf = new Dompdf();
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);
$dompdf->setPaper('letter');
$dompdf->render();
$dompdf->stream('Reporte.pdf', array("Attachment" => false) );
