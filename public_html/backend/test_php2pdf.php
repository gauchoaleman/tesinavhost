<?php
require_once "../vendor/autoload.php";

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML("<page></page>");
$html2pdf->writeHTML('<page><h1>holaHelloWorld</h1>This is my first page</page>');
$html2pdf->writeHTML('<page>This is my sekond page</page>');

$html2pdf->writeHTML("<qrcode value='Value to Coder' ec='H' style='width: 50mm; background-color: white; color: black;''></qrcode>");

$html2pdf->output();
?>
