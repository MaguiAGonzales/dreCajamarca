<?php include('../Dre-Presentacion/template_cabecera.php') ?>

<div class="content-wrapper">
<section class="content" id="content">  


<div class="row" >
	<div class="col-md-12">
	    <div class="box box-info">
	        <div class="box-header with-border">
		        <h3 class="box-title">Datos del Usuario</h3>
	        </div>
	        
	        <form  id="agregar_dni" method="post" >
	            <div class="box-body">
	            	
	                <input type="hidden" name="buscar" value="buscar">

	                <div class="row">
	                    <div class="col-sm-2">
	                        <input class="form-control" id="filDNI" type="text" name="filtroDescripcion" placeholder="Ingrese N° de Dni">
	                    </div>

	                    <div class="col-sm-1">
	                        <a @click="traerPersona()" class="btn btn-success">Buscar</a>
	                    </div>

			            <div class="col-sm-3">
							<input type="text" class="form-control" id="nomb_completo" name="nomb_completo_txt" disabled=>
			            </div>

			            <div class="col-sm-2">
							<input type="date"  class="form-control" id="fecha" name="fecha" @focus='loadFecha()'>
			            </div>

			            <div class="col-sm-2">
							<input type="text" class="form-control" id="numeroBo" name="numeroBo" placeholder="Ingrese N° de Boleta">
			            </div>
			         </div>
	            </div>
	        </form>
	  	</div>
  	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
	        <div class="box-header with-border">
		        <h3 class="box-title"> <span id="titulo_lt"></span> Boleta</h3>
	        </div>

			<form id="agregar_boleta" name="agregar_frm"  method="post" >
				<div class="box-body">
	  				<div class="col-md-2">
		  				<div>
							<label for="rem_bas">Rem.Básica</label>
							<input type="text" class="form-control" id="rem_bas" name="rem_bas_txt" required>
						</div>
						<div>
							<label for="r_t_homol">R.T.Homol</label>
							<input type="text" class="form-control" id="r_t_homol" name="r_t_homol_txt" required>
						</div>
						<div>
							<label for="b_ref_mov">B.Ref.Mov</label>
							<input type="text" class="form-control" id="b_ref_mov" name="b_ref_mov_txt" required>
						</div>
						<div>
							<label for="c_v_contra">D.U.073</label>
							<input type="text" class="form-control" id="c_v_contra" name="c_v_contra_txt" required>
						</div>
						<div>
							<label for="bcp_espec">Bcp.Eapec</label>
							<input type="text" class="form-control" id="bcp_espec" name="bcp_espec_txt" required>
						</div>
						<div>
							<label for="c_t_serv">C.T.Serv</label>
							<input type="text" class="form-control" id="c_t_serv" name="c_t_serv_txt" required>
						</div>
						<div>
							<label for="g_t_serv">G.T.Serv</label>
							<input type="text" class="form-control" id="g_t_serv" name="g_t_serv_txt" required>
						</div>
						<div>
							<label for="d_u_090_96">D.U.090-96</label>
							<input type="text" class="form-control" id="d_u_090_96" name="d_u_090_96_txt" required>
						</div>
						<div>
							<label for="d_l_20530">D.L.20530</label>
							<input type="text" class="form-control" id="d_l_20530" name="d_l_20530_txt" required>
						</div>
						<div>
							<label for="pre_salud">Pre Salud</label>
							<input type="text" class="form-control" id="pre_salud" name="pre_salud_txt" required>
						</div>
						<div>
							<label for="judiciales">Judiciales</label>
							<input type="text" class="form-control" id="judiciales" name="judiciales_txt" required>
						</div>
						<div>
							<label for="sesdid">Sesdid</label>
							<input type="text" class="form-control" id="sesdis" name="sesdis_txt" required>
						</div>
					</div>

					<div class="col-md-2">
						<div>
							<label for="cimpi">Cimpi</label>
							<input type="text" class="form-control" id="cimpi" name="cimpi_txt" required>
						</div>
						<div>
							<label for="s_tra_adm">S.Tra.Adm</label>
							<input type="text" class="form-control" id="s_tra_adm" name="s_tra_adm_txt" required>
						</div>
						<div>
							<label for="sutep">S.U.T.E.P</label>
							<input type="text" class="form-control" id="sutep" name="sutep_txt" required>
						</div>
						<div>
							<label for="bon_per">Bonif.Pers:</label>
							<input type="text" class="form-control" id="bon_per" name="bon_per_txt" required>
						</div>
						<div>
							<label for="f_dif_z_r">B.Dif.Z.R:</label>
							<input type="text" class="form-control" id="f_dif_z_r" name="f_dif_z_r_txt" required>
						</div>
						<div>
							<label for="dse_021">DSE.021-92</label>
							<input type="text" class="form-control" id="dse_021" name="dse_021_txt" required>
						</div>
						<div>
							<label for="ds_077">DS.077</label>
							<input type="text" class="form-control" id="ds_077" name="ds_077_txt" required>
						</div>
						<div>
							<label for="reunificada">Reunidicada</label>
							<input type="text" class="form-control" id="reunificada" name="reunificada_txt" required>
						</div>
						<div>
							<label for="propinas">Propinas</label>
							<input type="text" class="form-control" id="propinas" name="propinas_txt" required>
						</div>
						<div>
							<label for="d_u_80_94">D.U.80-94</label>
							<input type="text" class="form-control" id="d_u_80_94" name="d_u_80_94_txt" required>
						</div>
						<div>
							<label for="d_l_19990">D.L.19990</label>
							<input type="text" class="form-control" id="d_l_19990" name="d_l_19990_txt" required>
						</div>
						<div>
							<label for="derrama">Derrama</label>
							<input type="text" class="form-control" id="derrama" name="derrama_txt" required>
						</div>
					</div>

					<div class="col-md-2">
						<div>
							<label for="responsabilidad">Responsab</label>
							<input type="text" class="form-control" id="responsabilidad" name="responsabilidad_txt" required>
						</div>
						<div>
							<label for="inter_trab">Inter/Trab</label>
							<input type="text" class="form-control" id="inter_trab" name="inter_trab_txt" required>
						</div>
						<div>
							<label for="ad_fo_pen">Ad.Fo.Pen</label>
							<input type="text" class="form-control" id="ad_fo_pen" name="ad_fo_pen_txt" required>
						</div>
						<div>
							<label for="dsct_var">Dctos.Var</label>
							<input type="text" class="form-control" id="dsct_var" name="dsct_var_txt" required>
						</div>
						<div>
							<label for="d_l_25671">DL.25671:</label>
							<input type="text" class="form-control" id="d_l_25671" name="d_l_25671_txt" required>
						</div>
						<div>
							<label for="bon_familiar">Bon.Famil</label>
							<input type="text" class="form-control" id="bon_familiar" name="bon_familiar_txt" required>
						</div>
						<div>
							<label for="contrato">Contrato</label>
							<input type="text" class="form-control" id="contrato" name="contrato_txt" required>
						</div>
						<div>
							<label for="aguinaldo">Aginaldo</label>
							<input type="text" class="form-control" id="aguinaldo" name="aguinaldo_txt" required>
						</div>
						<div>
							<label for="igv">Igv.DS.261</label>
							<input type="text" class="form-control" id="igv" name="igv_txt" required>
						</div>
						<div>
							<label for="sepelio_luto">C.T.Serv</label>
							<input type="text" class="form-control" id="sepelio_luto" name="sepelio_luto_txt" required>
						</div>
						<div>
							<label for="ds_081">DS.081</label>
							<input type="text" class="form-control" id="ds_081" name="ds_081_txt" required>
						</div>
						<div>
							<label for="pmag_art18">Pmag.Art18</label>
							<input type="text" class="form-control" id="pmag_art18" name="pmag_art18_txt" required>
						</div>
					</div>

					<div class="col-md-2">
						<div>
							<label for="rein_0_rem">Rein/0 Rem</label>
							<input type="text" class="form-control" id="rein_0_rem" name="rein_0_rem_txt" required>
						</div>
						<div>
							<label for="ipss_vida">Ipss Vida</label>
							<input type="text" class="form-control" id="ipss_vida" name="ipss_vida_txt" required>
						</div>
						<div>
							<label for="s_cafae">S_Cafa/Mul</label>
							<input type="text" class="form-control" id="s_cafae" name="s_cafae_txt" required>
						</div>
						<div>
							<label for="ed_sevilla">Ed_Sevilla</label>
							<input type="text" class="form-control" id="ed_sevilla" name="ed_sevilla_txt" required>
						</div>
						<div>
							<label for="pe_p_falla">Pe.P.Falla</label>
							<input type="text" class="form-control" id="pe_p_falla" name="pe_p_falla_txt" required>
						</div>
						<div>
							<label for="funeraria">Funeraria</label>
							<input type="text" class="form-control" id="funeraria" name="funeraria_txt" required>
						</div>
						<div>
							<label for="lic_sg_rem">Lic.Sg.Rem</label>
							<input type="text" class="form-control" id="lic_sg_rem" name="lic_sg_rem_txt" required>
						</div>
	  				</div> 

	  				<div class="col-md-4" > 
	  					<h4 class="box-title">Otros Campos</h4>  			
							<form id="agregar_otros_campos" name="agregar_frm"  method="post" >						
								<div class="row">
				                	<div class="col-sm-6">
				                	   <select id="id_otros" name="id_otros_slc" class="form-control" required>
				                            <option value="">Seleccione</option>
				                            <?php include("SeleccionarOtrosCampos.php");?>
				                        </select>
				                    </div>
				                    <div class="col-sm-4">
				                    	<input type="text" class="form-control" id="monto" name="nombre_txt" placeholder="Monto" required>
				                    </div>
				                    <div class="col-sm-2">
				                    	<button class="btn btn-success">+</button>
				                    </div>
					            </div>	
				        	</form>
			        </div>
				</div>

				<div class="box-footer" align="center">
	     			<button type="submit" id="enviar" name="enviar_sb" value="Guardar" class="btn btn-success">Guardar</button> 
	            
	            	<button type="submit" id="editar" name="editar_sb" value="Editar" class="btn btn-success">Editar</button > 
	            </div>
			</form>	
		</div>
	</div>
</div>

</section>
</div>

<?php
    $script_module='modBoleta.js';
   ?>

<?php include('../Dre-Presentacion/template_footer.php') ?>

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
			echo "<script> alert('Boleta Registrada');</script>";
		}
		else{
			echo "<script> alert('Boleta No Registrada');</script>";
		}
	}
?>


<?php  
	if(isset($_REQUEST['enviar_sb'])){
	$idOtros=$_POST["id_otros_slc"];
	$dscto=$_POST["dscto_txt"];
	$idBoleta=$_POST["id_boleta_txt"];
	
	$consulta="INSERT INTO detalle_bo(id_boleta,id_otros,dscto) VALUES ('$idBoleta','$idOtros','$dscto')";
	$ejecutar_consulta=$conexion->query($consulta);

	}
?>