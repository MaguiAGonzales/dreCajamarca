<?php

	$id = $_GET['id'];
 
	include('conexion.php');
	require('../dompdf/autoload.inc.php');

	$query = "SELECT * FROM boleta inner join usuario on 
	boleta.dni_usuario = usuario.dni_usuario inner join 
	lugar_trabajo on usuario.id_lugar_usu = lugar_trabajo.id_lugar_usu where id_boleta = $id";

	$consul = $conexion->query($query);

	$datos = $consul->fetch_assoc();

	$q_detalle  = "SELECT * FROM db_drecajamarca.detalle_bo d 
	inner join otros o on d.id_otros = o.id_otros
	 where id_boleta = $id";

	$detalles = [];
	$html_detalles = "";

	$consul_det = $conexion->query($q_detalle);
	while ($datos_det = $consul_det->fetch_assoc()) {

		$html_detalles .= "<tr><td>".$datos_det['nombre']."</td>"."<td>".$datos_det['dscto']."</td></tr>";
	}

	$table_detalles='';

	if($html_detalles != ""){
		$table_detalles = "<table>
				<tr>
					<td style='width: 100px;'><strong>Descripcion</strong></td>
					<td style='width: 140px;'><strong>Monto</strong></td>
				</tr>
				$html_detalles
				
				</table>

				<hr>
				<br>";
	}

	$html = "<!DOCTYPE html>
			<html lang='en'>
			<head>
				<meta charset='UTF-8'>
				<title>Reporte</title>
			</head>
			<body>
				
				<div style='text-align:center; width:100%' > <h3><strong> BOLETA DE PAGO </strong></h3> </div>

				<table>
					<tr>
						<td rowspan='4'>
							<div class='marca-de-agua'>
								<img alt='' src='../Dre-Presentacion/imagen/login.png' /></div>
							</div>
						</td>

						<td><strong>Número Boleta: </strong></td>
						<td>".$datos['numeroBo']."</td>

						<td> <strong>Mes: </strong> </td>
						<td>".$datos['mes']."</td>
					</tr>
					<tr>
						<td><strong>DNI:</strong></td>
						<td>".$datos['dni_usuario']."</td>

						<td> <strong>Año: </strong> </td>
						<td>".$datos['anio']."</td>
					</tr>
					<tr>

						<td><strong>Nombre :</strong></td>
						<td style='width:250px' >
						".$datos['nomb_usu'].' '.$datos['ap_pusu'].' '.$datos['ap_musu']."
						</td>
					</tr>
					<tr>
						<td><strong>Lugar de Trabajo: </strong></td>
							<td>".$datos['lugar_usu']."</td>
					</tr>
				</table>
				<br>
				<hr>
				<br>

				<table>
					<tr>
						<td style='width: 100px;'><strong>Descripcion</strong></td>
						<td  style='width: 140px;'><strong>Monto</strong></td>
						<td style='width: 100px;'><strong>Descripcion</strong></td>
						<td  style='width: 140px;'><strong>Monto</strong></td>
						<td style='width: 100px;'><strong>Descripcion</strong></td>
						<td  style='width: 140px;'><strong>Monto</strong></td>
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
				
				<!--detalles -->

				$table_detalles

				<!-- ./-->

				<!--Total -->
				<table>
				<tr>
					<td><strong>Total:</strong></td>
					<td>".$datos['total']."  </td>
				</tr>
				</table>

				<br> 

				<!--Firma -->
				<div class='firma' >
							<img alt='' src='../Dre-Presentacion/imagen/firma.png' /></div>
				</div>
				
				<br> 
				<br>
				<br>
				<br>

				<!--Info -->
				<table>
				<tr>
					<td>Para mayor información comunicarse con la oficina de Informática</td>
					<td>Teléfono: (076) 361299  Anexo:38007</td>
				</tr>
				<table>			

				<style>
					
					.firma {
					    width: 80px;
					    height: auto;
					    margin: auto;
					    text-align:center;
					}
					.firma img {
					    padding: 0;
					    width: 100%;
					    height: auto;
					    opacity: 0.9;
					}
					
					.marca-de-agua {
					    width: 80px;
					    height: auto;
					    margin: auto;
					}
					.marca-de-agua img {
					    padding: 0;
					    width: 100%;
					    height: auto;
					    opacity: 0.7;
					}

					.fecha {
						font-size:8px;
						position:absolute;
						top:20px;
						right: 80px;
					}
					
				</style>
			</body>
			</html>";




	// reference the Dompdf namespace
	use Dompdf\Dompdf;

	// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	$dompdf->loadHtml($html);

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4');

	// Render the HTML as PDF
	$dompdf->render();

	//echo $html;

	// Output the generated PDF to Browser
	$dompdf->stream();

	//var_dump($detalles);

?>
