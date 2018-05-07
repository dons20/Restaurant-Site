<?php 

ob_end_clean(); // the buffer and never prints or returns anything.
ob_start(); // it starts buffering

require_once "fpdf/fpdf.php";
require_once 'php/connection.php';

class myPDF extends FPDF
{
	function header()
	{
		$date = date("d/m/Y");
		$this->setTitle("Asia's Cafe - Order Menu");
		$this->Image('img/AC2.png',10, 6);
		$this->SetFont('Arial','B',40);
		$this->SetTextColor(50);
		$this->Cell(276,5, "Asia's Cafe",0,0,'C');
		$this->Ln(10);
		$this->SetFont('Times','',30);
		$this->Cell(276,10,"Today's Menu " . $date,0,0,'C');
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


	function FancyTable($header, $data, $category)
	{
		//Set Category title
		$this->SetFont('Arial','B',20);
		$this->SetTextColor(34);
		$this->SetLeftMargin(0);
		$this->Cell(276,15, $category,0,0,'C');
		$this->Ln();

		// Colors, line width and bold font
		$this->SetFillColor(38, 188, 30);
		$this->SetTextColor(255);
		$this->SetDrawColor(17, 96, 13);
		$this->SetLineWidth(.5);
		$this->SetFont('','B',16);
		// Header
		$w = array(100, 100);
		$this->SetLeftMargin(50);
		for($i=0;$i<count($header);$i++)
			$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
		$this->Ln();
		// Color and font restoration
		$this->SetFillColor(224,235,255);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Data
		$fill = false;

		//Breakfast
		foreach($data as $row)
		{
			if (strtolower($row[1]) === strtolower($category)) {
				$this->Cell($w[0],8,$row[0],'LR',0,'L',$fill);
				$this->Cell($w[1],8,'$'.$row[2],'LR',0,'C',$fill);
				$this->Ln();
				$fill = !$fill;
			}
		}
		
		// Closing line
		$this->Cell(array_sum($w),5,'','T');
		$this->SetLeftMargin(10);
		$this->Ln();
	}

	function viewTable($db)
	{
		$this->SetFont('Times','',12);
		$returnValue = array();
		$stmt = $db->query('SELECT `item_name`, `type`, `price` FROM menu');
		while($data = $stmt->fetch(PDO::FETCH_OBJ))
			{
				array_push($returnValue, [$data->item_name, $data->type, $data->price]);
			}	
		return $returnValue;
	}
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$header = array('Items', 'Price');
$data = $pdf->viewTable($pdo);
$category = array("Breakfast", "Lunch", "Dessert", "Beverage");
for ($i = 0; $i < 4; $i++) { 
	$pdf->FancyTable($header, $data, $category[$i]);
}
$pdf->Output();

ob_end_flush();

?>