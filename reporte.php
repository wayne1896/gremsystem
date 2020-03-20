<?php
require('fpdf181/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
   
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'GremSystem',0,0,'C');
    
    // Salto de línea
    $this->Ln(20);

    $this->cell(30,10,'Id Cliente', 1, 0, 'C' ,0);
    $this->cell(30,10,'Nombre', 1, 0, 'C' ,0);
    $this->cell(30,10,'Apellido', 1, 0, 'C' ,0);
    $this->cell(30,10,'Fecha', 1, 0, 'C' ,0);
    $this->cell(30,10,'Deuda', 1, 1, 'C' ,0);
}
// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
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


$pdf->Output();
?>