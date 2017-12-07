<?php
require_once ("fpdf/fpdf.php");
class pdf extends FPDF
{
  private $Seitentitel;

  public function Header()
  {
    $this->SetFont("Arial", "B", 15);
    $this->Cell(80);
    $this->Cell(30,10,$this->Seitentitel,0,0,"C");
    $this->Line(5,23,205,23);
    $this->Ln(20);
  }
  public function setSeitentitel($text)
  {
    $this->Seitentitel = $text;
  }
}

$pdf = new pdf("P", "mm", "A4");
$pdf->setSeitentitel("Dies ist die Kopfzeile");
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 16);
$pdf->Cell(45,10, "PDF-Dokument mit Kopfzeile."); 
$pdf->Output();
?>