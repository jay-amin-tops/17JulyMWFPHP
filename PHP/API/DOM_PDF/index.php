<?php
require 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
// instantiate and use the dompdf class
$dompdf = new Dompdf();
if (isset($_REQUEST['btn'])) {
    $htmlData = '<h1>hello world Dynamic</h1>';
    $dompdf->loadHtml($htmlData);
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');
    // Render the HTML as PDF
    $dompdf->render();
    // Output the generated PDF to Browser
    $dompdf->stream();
}
?>

<form action="" method="post">
    <input type="submit" name="btn" id="">
</form>