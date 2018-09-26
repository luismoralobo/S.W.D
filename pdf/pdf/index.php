<?php  

include'plantilla.php';
require'Conexion_Bd.php';



$query="SELECT * FROM usuarios";
$resultado = $mysqli->query($query);

$pdf = new PDF();
$pdf->AliasNBpages();
$pdf->Addpage();



$pdf->SetFillColor(210,210,210);
$pdf->SetFont ('Arial','B',8);
$pdf->Cell(28,5,'Usuario',1,0,'C',1);
$pdf->Cell(28,5,'Correo',1,0,'C',1);
$pdf->Cell(28,5,'Documento',1,0,'C',1);
$pdf->Cell(28,5,'Nombre',1,0,'C',1);
$pdf->Cell(28,5,'Apellidos',1,0,'C',1);
$pdf->Cell(28,5,'Ficha',1,0,'C',1);
$pdf->Cell(28,5,'Fecha de registro',1,0,'C',1);
//$pdf->Cell(35,6,'CLAVE',1,1,'C',1);

$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch_assoc())
	{

        $pdf->SetXY(28, 50);
		$pdf->Cell(20,4,utf8_decode($row['usuario']),1,0,'C');
        $pdf->Cell(40,4,utf8_decode($row['correo']),1,0,'C');
        $pdf->Cell(20,4,utf8_decode($row['documento']),1,0,'C');
        $pdf->Cell(20,4,utf8_decode($row['nombre']),1,0,'C');
        $pdf->Cell(20,4,utf8_decode($row['apellidos']),1,0,'C');
        $pdf->Cell(20,4,utf8_decode($row['ficha']),1,0,'C');
        $pdf->Cell(20,4,utf8_decode($row['fecha_registro']),1,0,'C');
		//$pdf->Cell(35,6,utf8_decode($row['clave']),1,1,'C');
	}


$pdf->Output();


?>