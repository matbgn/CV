<?php
// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml(file_get_contents('index.html'));

// Change the default font
$dompdf->set_option('defaultFont', 'Courier');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper(array(-500,-500,5000,5000), 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("MatthieuBorgognonCV")
