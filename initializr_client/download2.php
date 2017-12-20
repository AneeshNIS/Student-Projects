<?php
$idz = $_GET['idz'];

include('database.php');
$database = new Database();
$result = $database->runQuery("SELECT date,lessonobjective,timemanagement,observer,score FROM surveydata WHERE slno = '$idz'");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='survey' 
AND `TABLE_NAME`='surveydata'
and `COLUMN_NAME` in ('date','lessonobjective','timemanagement','observer','score')");

require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->addPage('L','A3');



$pdf->SetFont('Helvetica','B',10);
$pdf->SetTextColor(50,60,100);


$pdf->SetAuthor('Aneesh Pradeep');
$pdf->SetTitle('Survey Results');

$pdf->Image('logo.png',10,10,-300);
$pdf->Ln();
$pdf->Ln();

$pdf->Ln();


foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(39,12,$column_heading,1);
}
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(39,12,$column,1);

}
$pdf->Ln();





$pdf->Output();
?>