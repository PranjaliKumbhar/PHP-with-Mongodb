<?php

require_once 'fpdf182/fpdf.php';
require_once 'conn.php';

$query = new MongoDB\Driver\Query([]);

$cursor = $manager->executeQuery("students.studentdata",$query);

if(isset($_POST['btn_pdf']))
{
    $pdf = new FPDF('p','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(12,10,'Sr.No.',1,0,'c');
    $pdf->Cell(40,10,'Name',1,0,'c');
    $pdf->Cell(40,10,'Age',1,0,'c');
    $pdf->Cell(40,10,'City',1,1,'c');
    

    $i=0;
    foreach($cursor as $document)
    {
        $i=$i+1;

        $pdf->cell(12,10,$i,1,0,'c');
        $pdf->cell(40,10,$document -> name,1,0,'c');
        $pdf->cell(40,10,$document -> age,1,0,'c');
        $pdf->cell(40,10,$document -> city,1,1,'c');

        
            
    }

    $pdf->Output();

}


?>
