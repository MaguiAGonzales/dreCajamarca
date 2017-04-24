<?php

	$id = $_GET['id'];
 
	include('conexion.php');
	require('../fpdf181/fpdf.php');

	class PDF extends FPDF
	{

	// Cabecera de página
		function Header()
		{
		    // Logo
		    $this->Image('../Dre-Presentacion/imagen/login.png',10,8,33);
		    // Arial bold 15
		    $this->SetFont('Arial','B',15);
		    // Movernos a la derecha
		    $this->Cell(80);
		    // Título
		    $this->Cell(30,10,'Constancia de Pagos',1,0,'C');
		    // Salto de línea
		    $this->Ln(20);

		   // $this -> Cell(50,50,$total);
		}	

	// Pie de página
		function Footer()
		{
		    // Posición: a 1,5 cm del final
		    $this->SetY(-15);
		    // Arial italic 8
		    $this->SetFont('Arial','I',8);
		    // Número de página
		    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}

		// Creación del objeto de la clase heredada
		$pdf = new PDF();
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Times','',12);
		
		$query = "SELECT * FROM boleta where id_boleta = $id";

		$consul = $conexion->query($query);

			while ($datos = $consul->fetch_assoc()) {
				$total = $datos['numeroBo'];
				$pdf-> cell (50,50,$total);
			}

		$pdf->Output();
?>
