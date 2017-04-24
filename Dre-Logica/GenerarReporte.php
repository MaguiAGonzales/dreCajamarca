<?php

	$id = $_GET['id'];
 
	include('conexion.php');
	//require('../fpdf181/fpdf.php');
	require('../dompdf/autoload.inc.php');

	$query = "SELECT * FROM boleta where id_boleta = $id";

	$consul = $conexion->query($query);

	$datos = $consul->fetch_assoc();

	$q_detalle  = "SELECT * FROM db_drecajamarca.detalle_bo d 
	inner join otros o on d.id_otros = o.id_otros
	 where id_boleta = $id";

	$detalles = [];
	$html_detalles = "";

	$consul_det = $conexion->query($q_detalle);
	while ($datos_det = $consul_det->fetch_assoc()) {
		//$detalles[] = $datos_det;
		$html_detalles .= "<tr><td>".$datos_det['nombre']."</td>"."<td>".$datos_det['dscto']."</td></tr>";
	}


	#generaremos el html de la tabla de detalles 




	#generaremos ahora el HTML de too


	$html = "<!DOCTYPE html>
			<html lang='en'>
			<head>
				<meta charset='UTF-8'>
				<title>Reporte</title>
			</head>
			<body>
				
				<!--los datos de la caabecera-->

				<table>
				<tr>
					<td>imagen</td>
					<td>Datos de otros</td>
				</tr>
					
				</table>
				
				<hr>
				<br>

				<table>
				<tr>
					<td style='width: 240px;'>Descripcion </td>
					<td  style='width: 140px;'>Monto</td>
					<td style='width: 240px;'>Descripcion </td>
					<td  style='width: 140px;'>Monto</td>
				</tr>
				<tr>
					<td>Remuneracion Basica</td>
					<td>".$datos['rem_bas']."</td>
					<td></td>
					<td></td>
				</tr>
					
				</table>

				<hr>
				<br>

				<!--Aca van los detalles -->
				<table>
				<tr>
					<td>Descripcion</td>
					<td>Monto</td>
				</tr>
				$html_detalles
				
				</table>

				<hr>
				<br>

				<!--Aca van el total -->
				<table>
				<tr>
					<td>Total: </td>
					<td>".$datos['total']."  </td>
				</tr>
				
				
				</table>


				
			</body>
			</html>";




	// reference the Dompdf namespace
	use Dompdf\Dompdf;

	// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	$dompdf->loadHtml($html);

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'landscape');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream();

	





	var_dump($detalles);

	/*

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

		*/


?>
