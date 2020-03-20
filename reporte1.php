<?php
require('fpdf181/fpdf.php');

class PDF extends FPDF
{


//------------------------------------------------
$pdf->Cell(120,10,'Boleta',0,0,'C');
//$pdf->Image(nombre archivo,Abscisa  , Ordenada ,ancho imagen,alto imagen);
    $pdf->Image('logo.png',130,10,70,30); //agregar imagen
$pdf->Ln(20);
 $pdf->SetFont('Arial','B',10);
$pdf->Cell(78,10,'Fecha:30/05/2016',1,1,'L');
$pdf->Cell(78,10,'Forma de pago:efectivo',1,1,'L');
$pdf->Ln(2);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(120,10,'Detalle Boleta',0,0,'L');
$pdf->Line(5,5,5,5);
$pdf->Ln();
$pdf->SetFont('Arial','B',9); //cambia tipo de letra
//-------------------------------------------------------------------------
$pdf->Cell(30,10,'codigo',0,0,'L');
$pdf->Cell(30,10,'nombre',0,0,'L');
$pdf->Cell(30,10,'precio',0,0,'L');
$pdf->Cell(30,10,'cantidad',0,0,'L'); //agrega una celda con texto
$pdf->Cell(30,10,'subtotal',0,0,'L');
$pdf->Ln();
//----consulta para traer detalle de la boleta------------------------------
$pdf->SetFont('Arial','B',10);
require 'cone_reporte.php';
$consulta = "SELECT * FROM socio";
$resultado = $mysqli->query($consulta);



// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
while($row = $resultado->fetch_assoc()){
$pdf->cell(30,10,$row['id_clien'], 1, 0, 'C' ,0);
$pdf->cell(30,10,$row['nombreclien'], 1, 0, 'C' ,0);
$pdf->cell(30,10,$row['apellidoclien'], 1, 0, 'C' ,0);
$pdf->cell(30,10,$row['fechaclien'], 1, 0, 'C' ,0);
}
require 'cone_reporte.php';
$consulta = "SELECT * FROM deuda";
$resultado = $mysqli->query($consulta);
while($row = $resultado->fetch_assoc()){
$pdf->cell(30,10,$row['deuda'], 1, 1, 'C' ,0);

}

$pdf->Output();//muestra el pdf

$pdf->Output();
?>