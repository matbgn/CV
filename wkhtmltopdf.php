<?php
require __DIR__.'/vendor/autoload.php';

use mikehaertl\wkhtmlto\Pdf;

// You can pass a filename, a HTML string, an URL or an options array to the constructor
$pdf = new Pdf(array(
  'viewport-size' => 1280,
));

$pdf->addPage('https://matthieu.borgognon.ch');
// On some systems you may have to set the path to the wkhtmltopdf executable
$pdf->binary = './wkhtmltopdf';
//Test to send
$pdf->send("_build/MatthieuBorgognonCV.pdf");
if (!$pdf->send()) {
    throw new Exception('Could not create PDF: '.$pdf->getError());
}
?>
