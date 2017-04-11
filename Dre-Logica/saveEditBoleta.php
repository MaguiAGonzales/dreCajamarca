<?php 

	$id=$_POST["id"];

	$numBoleta=$_POST["numBoleta"];
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

	$consulta="UPDATE boleta SET rem_bas ='$rembasi', bon_per ='$bonpers', d_l_25671 = '$dl25671', r_t_homol = '$rthomol', f_dif_z_r = '$bdif', bon_familiar = '$bonfamiliar', b_ref_mov = '$brefmov', dse_021 = '$ds021', contrato = '$contrato', c_v_contra = '$cvcontra', ds_077 = '$ds077', aguinaldo = '$aguinaldo', bcp_espec = '$bcpespec', reunificada = '$reunificada', igv = '$igv', c_t_serv = '$ctserv', sepelio_luto = '$sepelioluto', ds_081 = '$ds081', g_t_serv = '$gtserv', propinas = '$propinas', pmag_art18 = '$pmag', d_u_090_96 = '$du090', d_u_80_94 = '$du80', rein_o_rem = '$rein', d_l_20530 = '$dl20530', d_l_19990 = '$dl19990', pre_salud = '$presalud', ipss_vida = '$ipssvida', derrama ='$derrama', judiciales = '$judiciales', s_cafae = '$scafae', responsabilidad = '$responsab', sesdis = '$sesdis', ed_sevilla = '$edSevilla', cimpi = '$cimpi', pe_p_falla = '$pefalla', inter_trab = '$intertrab', s_tra_adm = '$straadmin', funeraria = '$funeraria', ad_fo_pen = '$adfon', sutep = '$sutep', lic_sg_rem = '$licsg', dsct_var = '$dsctvar', total = '$total' where id_boleta = '$id'";

		$ejecutar_consulta=$conexion->query($consulta);

		if ($ejecutar_consulta) {

			$consulta = "DELETE FROM detalle_bo WHERE id_boleta = $id";
			$conexion->query($consulta);


			if(isset($_POST['detalle'])){


				$detalle = $_POST['detalle'];

				//aca ejecuta una sentencia de eliminar			
				
				foreach ($detalle as $item) {
					# code...sii

					$idOtros = $item['id'];
					$dscto   = $item['monto'];
					$consulta="INSERT INTO detalle_bo(id_boleta,id_otros,dscto) VALUES ('$id','$idOtros','$dscto')";
					$ejecutar_consulta=$conexion->query($consulta);
				}

				if ($ejecutar_consulta) {
					echo 'correcto';
					
				}else{
					echo "error";
				}



			}else{
				echo 'correcto';
			}

			
		}
		else{
			echo "error";
		

		}
?>


