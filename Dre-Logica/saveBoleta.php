<?php 
		
	$numBoleta=$_POST["numBoleta"];
	$dni=$_POST["dni"];

	$fecha=$_POST["fecha"];
	$rembasi=$_POST["rembasi"];
	$bonpers=$_POST["bonpers"];
	$dl25671=$_POST["dl25671"];

	$rthomol=$_POST["rthomol"];
	$bdif=$_POST["bdif"];
	$bonfamiliar=$_POST["bonfamiliar"];
	$brefmov=$_POST["brefmov"];
	$ds021=$_POST["ds021"];
	$contrato=$_POST["contrato"];
	$cvcontra=$_POST["cvcontra"];
	$ds077=$_POST["ds077"];
	$aguinaldo=$_POST["aguinaldo"];
	$bcpespec=$_POST["bcpespec"];
	$reunificada=$_POST["reunificada"];
	$igv=$_POST["igv"];
	$ctserv=$_POST["ctserv"];
	$sepelioluto=$_POST["sepelioluto"];
	$ds081=$_POST["ds081"];
	$gtserv=$_POST["gtserv"];
	$propinas=$_POST["propinas"];
	$pmag=$_POST["pmag"];
	$du090=$_POST["du090"];
	$du80=$_POST["du80"];
	$rein=$_POST["rein"];
	$dl20530=$_POST["dl20530"];
	$dl19990=$_POST["dl19990"];
	$presalud=$_POST["presalud"];
	$ipssvida=$_POST["ipssvida"];
	$derrama=$_POST["derrama"];
	$judiciales=$_POST["judiciales"];
	$scafae=$_POST["scafae"];
	$responsab=$_POST["responsab"];
	$sesdis=$_POST["sesdis"];
	$edSevilla=$_POST["edSevilla"];
	$cimpi=$_POST["cimpi"];
	$pefalla=$_POST["pefalla"];
	$intertrab=$_POST["intertrab"];
	$straadmin=$_POST["straadmin"];
	$funeraria=$_POST["funeraria"];
	$adfon=$_POST["adfon"];
	$sutep=$_POST["sutep"];
	$licsg=$_POST["licsg"];
	$dsctvar=$_POST["dsctvar"];

	$total=$_POST["total"];
	

	include ("conexion.php"); 

	$consulta="INSERT INTO boleta(numeroBo, dni_usuario, fecha, rem_bas, bon_per, d_l_25671,r_t_homol,f_dif_z_r,bon_familiar,b_ref_mov,dse_021,contrato, c_v_contra, ds_077, aguinaldo,bcp_espec,reunificada,igv,c_t_serv, sepelio_luto,ds_081, g_t_serv, propinas, pmag_art18, d_u_090_96, d_u_80_94, rein_o_rem, d_l_20530, d_l_19990, pre_salud, ipss_vida, derrama, judiciales, s_cafae, responsabilidad, sesdis, ed_sevilla, cimpi, pe_p_falla, inter_trab, s_tra_adm, funeraria, ad_fo_pen, sutep, lic_sg_rem, dsct_var, total) VALUES ('$numBoleta','$dni','$fecha','$rembasi','$bonpers','$dl25671','$rthomol','$bdif','$bonfamiliar','$brefmov','$ds021', '$contrato','$cvcontra','$ds077','$aguinaldo','$bcpespec','$reunificada','$igv','$ctserv', '$sepelioluto','$ds081','$gtserv','$propinas','$pmag','$du090','$du80','$rein','$dl20530','$dl19990','$presalud','$ipssvida','$derrama','$judiciales','$scafae','$responsab','$sesdis','$edSevilla','$cimpi','$pefalla','$intertrab','$straadmin','$funeraria','$adfon','$sutep','$licsg','$dsctvar','$total')";

		$ejecutar_consulta=$conexion->query($consulta);

		if ($ejecutar_consulta) {

			if (isset($_POST['detalle'])) {
				# code...
				$detalle = $_POST['detalle'];

				$query = "SELECT * from boleta where fecha = '$fecha' and numeroBo = $numBoleta";

				$consul = $conexion->query($query) ;

				$reg_boleta = $consul->fetch_assoc();

				$idBoleta = $reg_boleta['id_boleta'];

				foreach ($detalle as $item) {
					# code...sii

					$idOtros = $item['id'];
					$dscto   = $item['monto'];

					$consulta="INSERT INTO detalle_bo(id_boleta,id_otros,dscto) VALUES ('$idBoleta','$idOtros','$dscto')";
					$ejecutar_consulta=$conexion->query($consulta);
				}
			} else {
				# code...
				
			}
			

			

		if ($ejecutar_consulta) {
				echo 'correcto';
				
			}else{
				echo "error";
			}
		}
		else{
			echo "error";
		}
?>


