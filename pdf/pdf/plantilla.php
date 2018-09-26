<?php  

require 'fpdf/fpdf.php';

class PDF extends FPDF
{
      function Header()
      {
          $this->Image('images/PARTESUPERIORIZQ.png', 13, 3, 25 );
          $this->SetFont('Arial','B',15);
          $this->Cell(30);
          $this->Cell(130,10, 'S.W.D',0,0,'C');

          $this->Ln(6);  
$this->Cell(200,20, 'Reporte de aprendiz',0,0,'C');

          $this->Ln(20);

      }

      function Footer()
      {
      	$this->SetY(-15);
      	$this->SetFont('Arial','I', 8);
      	$this->Cell (0,10, 'Pagina' .$this->PageNo().'/{nb}',0,0, 'C');
      }

}

?>