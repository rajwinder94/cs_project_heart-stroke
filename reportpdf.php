<?php 
session_start();
$hell=$_SESSION["sno".$sno];
echo $hell;
require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Report".$hell,1,0,C);
$pdf->output();
?>