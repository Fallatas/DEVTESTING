<?php
require_once ("fpdf/fpdf.php");
$pdf = new FPDF();

$pdf->AddPage("L");
$pdf->SetFont("Arial", "B", 16);
$pdf->SetLeftMargin(45);
$pdf->Cell(45,10, "Mittels PHP generiertes PDF-Dokument.");
$pdf->Image("baumbluete.jpg", 45, 20, 210, 180);
$pdf->Output("test.pdf", "D");
?>
