<?php

require_once('../vendor/autoload.php');

//Plantilla html
require_once('plantilla/reporte/reporteindividual.php');

//codigo css de la plantilla
$css = file_get_contents('plantilla/reporte/style.css');

//base de datos
require_once('reporte_cone.php');

$mpdf = new \Mpdf\Mpdf([

]);


$plantilla = GetPlantilla($cliente);

$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);


$mpdf->Output("reporte_gremsystem.pdf", "i");