<?php 

ob_end_clean(); // the buffer and never prints or returns anything.
ob_start(); // it starts buffering

require_once "fpdf/fpdf.php";
require_once 'php/connection.php';
//$db = new PDO('mysql:host=localhost;dbname=restaurant','root','');

class myPDF extends FPDF
{
	function viewTable($db)
	{
		$this->SetFont('Times','',12);
		$returnValue = array();
		$stmt = $db->query('SELECT `item_name`, `type`, `price` FROM menu');
		while($data = $stmt->fetch(PDO::FETCH_OBJ))
			{
				//$this->Cell(69, 10,$data->ID,1 ,0 ,'C');
				/* $this->Cell(69, 10,$data->item_name,1 ,0 ,'C');
				$this->Cell(69, 10,$data->type,1 ,0 ,'C');
				$this->Cell(69, 10,$data->price,1 ,0 ,'C');
				
				$this->Ln();	 */
				array_push($returnValue, [$data->item_name, $data->type, $data->price]);
			}	
		return $returnValue;
	}

	function header()
	{
		$date = date("d/m/Y");
		$this->setTitle("Asia's Cafe - Order Menu");
		$this->Image('img/AC2.png',10, 6);
		$this->SetFont('Arial','B',40);
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

	function headerTable()
	{
		$this->SetFont('Times','B',12);
		//$this->Cell(69, 10, 'ID Number',1 ,0 ,'C');
		$this->MultiCell(0, 10, '<p style="text-align: center;>"Item Name</p>', 1,'C');
		$this->SetX(11.5);
		$this->Cell(0, 10, 'Item Type',1 ,0 ,'C');
		$this->SetX(21.5);
		$this->Cell(0, 10, 'Price',1 ,0 ,'C');
		$this->Ln();
	}

	function FancyTable($header, $data)
	{
		// Colors, line width and bold font
		$this->SetFillColor(38, 188, 30);
		$this->SetTextColor(255);
		$this->SetDrawColor(17, 96, 13);
		$this->SetLineWidth(.5);
		$this->SetFont('','B',16);
		// Header
		$w = array(50, 45, 50);
		$this->SetLeftMargin(75);
		for($i=0;$i<count($header);$i++)
			$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
		$this->Ln();
		// Color and font restoration
		$this->SetFillColor(224,235,255);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Data
		$fill = false;
		foreach($data as $row)
		{
			$this->Cell($w[0],8,$row[0],'LR',0,'L',$fill);
			$this->Cell($w[1],8,$row[1],'LR',0,'C',$fill);
			$this->Cell($w[2],8,"$" . $row[2],'LR',0,'C',$fill);
			//$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
			$this->Ln();
			$fill = !$fill;
		}
		// Closing line
		$this->Cell(array_sum($w),0,'','T');
	}	
	
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$header = array('Current Offers', 'Type of Item', 'Price');
$data = $pdf->viewTable($pdo);
$pdf->FancyTable($header, $data);
//$pdf->viewTable($db);
$pdf->Output();

ob_end_flush(); // It's printed here, because ob_end_flush "prints" what's in
              // the buffer, rather than returning it
              //     (unlike the ob_get_* functions)

?>