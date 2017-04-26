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
				<table>
					<tr>
						<td>
							Imagen
						</td>
					</tr>
					<tr>
						<td>Número Boleta: </td>
						<td>".$datos['numeroBo']."</td>
						<td>Dni: </td>
						<td>".$datos['dni_usuario']."</td>
						<td>Fecha</td>
						<td>".$datos['fecha']."</td>
					</tr>
				</table>
				
				<hr>
				<br>

				<table>
					<tr>
						<td style='width: 200px;'>Descripcion </td>
						<td  style='width: 140px;'>Monto</td>
						<td style='width: 200px;'>Descripcion </td>
						<td  style='width: 140px;'>Monto</td>
						<td style='width: 200px;'>Descripcion </td>
						<td  style='width: 140px;'>Monto</td>
					</tr>

					<tr>
						<td>Remuneracion Basica</td>
						<td>".$datos['rem_bas']."</td>
						<td>Bono Personal</td>
						<td>".$datos['bon_per']."</td>
						<td>Decreto de Ley 25671</td>
						<td>".$datos['d_l_25671']."</td>
					</tr>
					<tr>
						<td>R. T. Homol</td>
						<td>".$datos['r_t_homol']."</td>
						<td>F. Dif. Z. R</td>
						<td>".$datos['f_dif_z_r']."</td>
						<td>Bono Familiar</td>
						<td>".$datos['bon_familiar']."</td>
					</tr>
					<tr>
						<td>B. Ref. Mov</td>
						<td>".$datos['b_ref_mov']."</td>
						<td>Dse. 021</td>
						<td>".$datos['dse_021']."</td>
						<td>Contrato</td>
						<td>".$datos['contrato']."</td>
					</tr>
					<tr>
						<td>C. V. Contra</td>
						<td>".$datos['c_v_contra']."</td>
						<td>Ds. 077</td>
						<td>".$datos['ds_077']."</td>
						<td>Aguinaldo</td>
						<td>".$datos['aguinaldo']."</td>
					</tr>
					<tr>
						<td>Bcp. Espec</td>
						<td>".$datos['bcp_espec']."</td>
						<td>Reunificada</td>
						<td>".$datos['reunificada']."</td>
						<td>I.G.V</td>
						<td>".$datos['igv']."</td>
					</tr>
					<tr>
						<td>C. T. Serv</td>
						<td>".$datos['c_t_serv']."</td>
						<td>Sepelio Luto</td>
						<td>".$datos['sepelio_luto']."</td>
						<td>Ds. 081</td>
						<td>".$datos['ds_081']."</td>
					</tr>
					<tr>
						<td>G. T. Serv</td>
						<td>".$datos['g_t_serv']."</td>
						<td>Propinas</td>
						<td>".$datos['propinas']."</td>
						<td>Pmag. Art18</td>
						<td>".$datos['pmag_art18']."</td>
					</tr>
					<tr>
						<td>Rein 0 Rem</td>
						<td>".$datos['rein_o_rem']."</td>
						<td>D. U. 090 96</td>
						<td>".$datos['d_u_090_96']."</td>
						<td>Decreto de Ley 20530</td>
						<td>".$datos['d_l_20530']."</td>
					</tr>
					<tr>
						<td>Decreto de Ley 19990</td>
						<td>".$datos['d_l_19990']."</td>
						<td>Pre Salud</td>
						<td>".$datos['pre_salud']."</td>
						<td>Ipss. Vida</td>
						<td>".$datos['ipss_vida']."</td>
					</tr>
					<tr>
						<td>Derrama</td>
						<td>".$datos['derrama']."</td>
						<td>Judiciales</td>
						<td>".$datos['judiciales']."</td>
						<td>S. Cafae</td>
						<td>".$datos['s_cafae']."</td>
					</tr>
					<tr>
						<td>Responsabilidad</td>
						<td>".$datos['responsabilidad']."</td>
						<td>Sesdis</td>
						<td>".$datos['sesdis']."</td>
						<td>Ed. Sevilla</td>
						<td>".$datos['ed_sevilla']."</td>
					</tr>
					<tr>
						<td>Cimpi</td>
						<td>".$datos['cimpi']."</td>
						<td>Pe. P. Falla</td>
						<td>".$datos['pe_p_falla']."</td>
						<td>Inter. Trab</td>
						<td>".$datos['inter_trab']."</td>
					</tr>
					<tr>
						<td>S. Tra. Adm</td>
						<td>".$datos['s_tra_adm']."</td>
						<td>Funeraria</td>
						<td>".$datos['funeraria']."</td>
						<td>Ad. Fo. Pen</td>
						<td>".$datos['ad_fo_pen']."</td>
						
					</tr>
					<tr>
						<td>Sutep</td>
						<td>".$datos['sutep']."</td>
						<td>Lic. Sg. Rem</td>
						<td>".$datos['lic_sg_rem']."</td>
						<td>Dsct. Varios</td>
						<td>".$datos['dsct_var']."</td>
					</tr> 					


				</table>

				<hr>
				<br>


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
