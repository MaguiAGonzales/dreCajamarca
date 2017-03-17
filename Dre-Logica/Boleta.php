<?php include('../Dre-Presentacion/template_cabecera.php') ?>

  <!--contenido va aqui -->
  <div class="content-wrapper">
    <section class="content">  

	<div class="col-md-12">
	    <div class="box box-info">
        <div class="box-header with-border">
	        <h3 class="box-title">Crear Lugar de Trabajo</h3>
        </div>

			<FORM id="agregar_boleta" name="agregar_frm"  method="post" >
				<div class="col-md-12">
  				<div class="col-md-4">
  					<div>
					<label for="buscar">DNI USUARIO: </label>
					<input type="text" id="id_buscar" name="dni_usuario_txt" required>
  					</div>
	  				<div>
					<label for="id_boleta">NÚMERO DE BOLETA:</label>
					<input type="text" id="id_boleta" name="id_boleta_txt"  required>
				</div>
				<div>
					<label for="rem_bas">REM.BASICA:</label>
					<input type="text" id="rem_bas" name="rem_bas_txt" required>
				</div>
				<div>
					<label for="r_t_homol">R.T.HOMOL:</label>
					<input type="text" id="r_t_homol" name="r_t_homol_txt" required>
				</div>
				<div>
					<label for="b_ref_mov">B.REF.MOV</label>
					<input type="text" id="b_ref_mov" name="b_ref_mov_txt" required>
				</div>
				<div>
					<label for="c_v_contra">D.U.073</label>
					<input type="text" id="c_v_contra" name="c_v_contra_txt" required>
				</div>
				<div>
					<label for="bcp_espec">BCP.ESPEC</label>
					<input type="text" id="bcp_espec" name="bcp_espec_txt" required>
				</div>
				<div>
					<label for="c_t_serv">C.T.SERV</label>
					<input type="text" id="c_t_serv" name="c_t_serv_txt" required>
				</div>
				<div>
					<label for="g_t_serv">G.T.SERV</label>
					<input type="text" id="g_t_serv" name="g_t_serv_txt" required>
				</div>
				<div>
					<label for="d_u_090_96">D.U.090-96</label>
					<input type="text" id="d_u_090_96" name="d_u_090_96_txt" required>
				</div>
				<div>
					<label for="d_l_20530">D.L.20530</label>
					<input type="text" id="d_l_20530" name="d_l_20530_txt" required>
				</div>
				<div>
					<label for="pre_salud">PRE SALUD</label>
					<input type="text" id="pre_salud" name="pre_salud_txt" required>
				</div>
				<div>
					<label for="judiciales">JUDICIALES</label>
					<input type="text" id="judiciales" name="judiciales_txt" required>
				</div>
				<div>
					<label for="sesdid">SESDIS</label>
					<input type="text" id="sesdis" name="sesdis_txt" required>
				</div> 
				<div>
					<label for="cimpi">CIMPI</label>
					<input type="text" id="cimpi" name="cimpi_txt" required>
				</div>
				<div>
					<label for="s_tra_adm">S.TRA.ADM</label>
					<input type="text" id="s_tra_adm" name="s_tra_adm_txt" required>
				</div>
				<div>
					<label for="sutep">S.U.T.E.P</label>
					<input type="text" id="sutep" name="sutep_txt" required>
				</div>
  				</div>
  				<div class="col-md-4">
				<div>
					<label for="bon_per">BONIF.PERS:</label>
					<input type="text" id="bon_per" name="bon_per_txt" required>
				</div>
				<div>
					<label for="f_dif_z_r">B.DIF.Z.R:</label>
					<input type="text" id="f_dif_z_r" name="f_dif_z_r_txt" required>
				</div>
				<div>
					<label for="dse_021">DSE.021-92</label>
					<input type="text" id="dse_021" name="dse_021_txt" required>
				</div>
				<div>
					<label for="ds_077">DS.077</label>
					<input type="text" id="ds_077" name="ds_077_txt" required>
				</div>
				<div>
					<label for="reunificada">REUNIFICAD</label>
					<input type="text" id="reunificada" name="reunificada_txt" required>
				</div>

				<div>
					<label for="propinas">PROPINAS</label>
					<input type="text" id="propinas" name="propinas_txt" required>
				</div>
				<div>
					<label for="d_u_80_94">D.U.80-94</label>
					<input type="text" id="d_u_80_94" name="d_u_80_94_txt" required>
				</div>
				<div>
					<label for="d_l_19990">D.L.19990</label>
					<input type="text" id="d_l_19990" name="d_l_19990_txt" required>
				</div>
				<div>
					<label for="derrama">DERRAMA</label>
					<input type="text" id="derrama" name="derrama_txt" required>
				</div>
				<div>
					<label for="responsabilidad">RESPONSAB</label>
					<input type="text" id="responsabilidad" name="responsabilidad_txt" required>
				</div>
				<div>
					<label for="inter_trab">INTER/TRAB</label>
					<input type="text" id="inter_trab" name="inter_trab_txt" required>
				</div>
				<div>
					<label for="ad_fo_pen">AD.FO.PEN</label>
					<input type="text" id="ad_fo_pen" name="ad_fo_pen_txt" required>
				</div>
				<div>
					<label for="dsct_var">DCTOS.VAR</label>
					<input type="text" id="dsct_var" name="dsct_var_txt" required>
				</div>
  				</div>
  				<div class="col-md-4">
	  				<div>
					<label for="fecha">FECHA:</label>
					<input type="date" id="fecha" name="fecha_txt" required>
				</div>
				<div>
					<label for="d_l_25671">DL.25671:</label>
					<input type="text" id="d_l_25671" name="d_l_25671_txt" required>
				</div>
				<div>
					<label for="bon_familiar">BON.FAMIL</label>
					<input type="text" id="bon_familiar" name="bon_familiar_txt" required>
				</div>
				<div>
					<label for="contrato">CONTRATO</label>
					<input type="text" id="contrato" name="contrato_txt" required>
				</div>
				<div>
					<label for="aguinaldo">AGINALDO</label>
					<input type="text" id="aguinaldo" name="aguinaldo_txt" required>
				</div>
				<div>
					<label for="igv">IGV.DS.261</label>
					<input type="text" id="igv" name="igv_txt" required>
				</div>
				<div>
					<label for="sepelio_luto">C.T.SERV</label>
					<input type="text" id="sepelio_luto" name="sepelio_luto_txt" required>
				</div>
				<div>
					<label for="ds_081">DS.081</label>
					<input type="text" id="ds_081" name="ds_081_txt" required>
				</div>
				<div>
					<label for="pmag_art18">PMAG.ART18</label>
					<input type="text" id="pmag_art18" name="pmag_art18_txt" required>
				</div>
				<div>
					<label for="rein_0_rem">REIN/0 REM</label>
					<input type="text" id="rein_0_rem" name="rein_0_rem_txt" required>
				</div>
				<div>
					<label for="ipss_vida">IPSS VIDA</label>
					<input type="text" id="ipss_vida" name="ipss_vida_txt" required>
				</div>
				<div>
					<label for="s_cafae">S_CAFE/MUL</label>
					<input type="text" id="s_cafae" name="s_cafae_txt" required>
				</div>
				<div>
					<label for="ed_sevilla">ED_SEVILLA</label>
					<input type="text" id="ed_sevilla" name="ed_sevilla_txt" required>
				</div>
				<div>
					<label for="pe_p_falla">PE.P.FALLA</label>
					<input type="text" id="pe_p_falla" name="pe_p_falla_txt" required>
				</div>
				<div>
					<label for="funeraria">FUNERARIA</label>
					<input type="text" id="funeraria" name="funeraria_txt" required>
				</div>
				<div>
					<label for="lic_sg_rem">LIC.SG.REM</label>
					<input type="text" id="lic_sg_rem" name="lic_sg_rem_txt" required>
				</div>
  				</div>    			
				</div>
		<div>
			<button type="submit" id="enviar" name="enviar_sb" value="Guardar" class="btn btn-success">Guardar</span>
  			</button> 
		</div>				
		</FORM> 
	</div>
</div>
</section>
</div>

<?php 

	if(isset($_REQUEST['enviar_sb'])){
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
			echo "<script> alert('Registrado');</script>";
		}
		else{
			echo "<script> alert('No Registrado');</script>";
		}
	}
?>