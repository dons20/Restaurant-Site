<?php 


require_once "fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=restaurant','root','');

class myPDF extends FPDF
{
	function header()
	{
		$this->Image('AC2.png',10, 6);
		$this->SetFont('Arial','B',40);
		$this->Cell(276,5, "Asia's Cafe",0,0,'C');
		$this->Ln(10);
		$this->SetFont('Times','',30);
		$this->Cell(276,10,'Menu',0,0,'C');
		$this->Ln(20);

	}

	function footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','',8);
		$this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
	}

	function Close()
{
	// Terminate document
	if($this->state==3)
		return;
	if($this->page==0)
		$this->AddPage();
	// Page footer
	$this->InFooter = true;
	$this->Footer();
	$this->InFooter = false;
	// Close document
	$this->_enddoc();
}

	function headerTable()
	{
		
		$this->SetFont('Times','B',12);
		$this->Cell(69, 10, 'ID Number',1 ,0 ,'C');
		$this->Cell(69, 10, 'Item Name',1 ,0 ,'C');
		$this->Cell(69, 10, 'Item Type',1 ,0 ,'C');
		$this->Cell(69, 10, 'Availability',1 ,0 ,'C');
		$this->Ln();

		
	}


	function viewTable($db)
	{
		$this->SetFont('Times','',12);
		$stmt = $db->query('select * from menu');
		while($data = $stmt->fetch(PDO::FETCH_OBJ))
			{
					
					$this->Cell(40, 10,$data->ID,1 ,0 ,'C');
					$this->Cell(40, 10,$data->item_name,1 ,0 ,'C');
					$this->Cell(40, 10,$data->type,1 ,0 ,'C');
					$this->Cell(40, 10,$data->availability,1 ,0 ,'C');
	   		
					$this->Ln();	
		}	
	}	
	
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();





 
