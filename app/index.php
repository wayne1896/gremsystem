<?php

require_once('../vendor/autoload.php');

//Plantilla html
require_once('plantilla/reporte/index.php');

//codigo css de la plantilla
$css = file_get_contents('plantilla/reporte/style.css');

$mpdf = new \Mpdf\Mpdf([

]);


$plantilla = GetPlantilla();

$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);


$mpdf->Output();