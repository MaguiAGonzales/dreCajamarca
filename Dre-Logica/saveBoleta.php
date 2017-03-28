<?php 

	$numBoleta=$_POST["id_boleta_txt"];
	$dni=$_POST["dni_usuario_txt"];
	$fecha=$_POST["fecha_txt"];
	$rembasi=$_POST["rem_bas_txt"];
	$bonpers=$_POST["bon_per_txt"];
	$dl25671=$_POST["d_l_25671_txt"];
	$rthomol=$_POST["r_t_homol_txt"];
	$bdif=$_POST["f_dif_z_r_txt"];
	$bonfamiliar=$_POST["bon_familiar_txt"];
	$brefmov=$_POST["b_ref_mov_txt"];
	$ds021=$_POST["dse_021_txt"];
	$contrato=$_POST["contrato_txt"];
	$cvcontra=$_POST["c_v_contra_txt"];
	$ds077=$_POST["ds_077_txt"];
	$aguinaldo=$_POST["aguinaldo_txt"];
	$bcpespec=$_POST["bcp_espec_txt"];
	$reunificada=$_POST["reunificada_txt"];
	$igv=$_POST["igv_txt"];
	$ctserv=$_POST["c_t_serv_txt"];
	$sepelioluto=$_POST["sepelio_luto_txt"];
	$ds081=$_POST["ds_081_txt"];
	$gtserv=$_POST["g_t_serv_txt"];
	$propinas=$_POST["propinas_txt"];
	$pmag=$_POST["pmag_art18_txt"];
	$du090=$_POST["d_u_090_96_txt"];
	$du80=$_POST["d_u_80_94_txt"];
	$rein=$_POST["rein_0_rem_txt"];
	$dl20530=$_POST["d_l_20530_txt"];
	$dl19990=$_POST["d_l_19990_txt"];
	$presalud=$_POST["pre_salud_txt"];
	$ipssvida=$_POST["ipss_vida_txt"];
	$derrama=$_POST["derrama_txt"];
	$judiciales=$_POST["judiciales_txt"];
	$scafae=$_POST["s_cafae_txt"];
	$responsab=$_POST["responsabilidad_txt"];
	$sesdis=$_POST["sesdis_txt"];
	$edSevilla=$_POST["ed_sevilla_txt"];
	$cimpi=$_POST["cimpi_txt"];
	$pefalla=$_POST["pe_p_falla_txt"];
	$intertrab=$_POST["inter_trab_txt"];
	$straadmin=$_POST["s_tra_adm_txt"];
	$funeraria=$_POST["funeraria_txt"];
	$adfon=$_POST["ad_fo_pen_txt"];
	$sutep=$_POST["sutep_txt"];
	$licsg=$_POST["lic_sg_rem_txt"];
	$dsctvar=$_POST["dsct_var_txt"];

	include ("conexion.php"); 

	$consulta="INSERT INTO boleta(id_boleta, dni_usuario, fecha, rem_bas, bon_per, d_l_25671,r_t_homol,f_dif_z_r,bon_familiar,b_ref_mov,dse_021,contrato, c_v_contra, ds_077, aguinaldo,bcp_espec,reunificada,igv,c_t_serv, sepelio_luto,ds_081, g_t_serv, propinas, pmag_art18, d_u_090_96, d_u_80_94, rein_o_rem, d_l_20530, d_l_19990, pre_salud, ipss_vida, derrama, judiciales, s_cafae, responsabilidad, sesdis, ed_sevilla, cimpi, pe_p_falla, inter_trab, s_tra_adm, funeraria, ad_fo_pen, sutep, lic_sg_rem, dsct_var) VALUES ('$numBoleta','$dni','$fecha','$rembasi','$bonpers','$dl25671','$rthomol','$bdif','$bonfamiliar','$brefmov','$ds021', '$contrato','$cvcontra','$ds077','$aguinaldo','$bcpespec','$reunificada','$igv','$ctserv', '$sepelioluto','$ds081','$gtserv','$propinas','$pmag','$du090','$du80','$rein','$dl20530','$dl19990','$presalud','$ipssvida','$derrama','$judiciales','$scafae','$responsab','$sesdis','$edSevilla','$cimpi','$pefalla','$intertrab','$straadmin','$funeraria','$adfon','$sutep','$licsg','$dsctvar')";

		$ejecutar_consulta=$conexion->query($consulta);

		if ($ejecutar_consulta) {

			$idOtros=$_POST["id_otros_slc"];
			$dscto=$_POST["dscto_txt"];
			$idBoleta=$_POST["id_boleta_txt"];
			
			$consulta="INSERT INTO detalle_bo(id_boleta,id_otros,dscto) VALUES ('$idBoleta','$idOtros','$dscto')";
			$ejecutar_consulta=$conexion->query($consulta);


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


