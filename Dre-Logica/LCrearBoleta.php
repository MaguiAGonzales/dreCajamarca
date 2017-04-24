<?php include('../Dre-Presentacion/template_cabecera.php') ?>

<div class="content-wrapper">
<section class="content" id="content">  
	<h4 class="box-title">Crear Boleta</h4>
<div class="row" >
	<div class="col-md-12">
	    <div class="box box-danger">
	        <div class="box-header with-border">
		        <h3 class="box-title">Datos del Usuario</h3>
	        </div>
	        
	        <form  id="agregar_dni" method="post" >
	            <div class="box-body">
	            	
	                <input type="hidden" name="buscar" value="buscar">

	                <div class="row">
	                    <div class="col-sm-2">
	                        <input class="form-control" id="filDNI" type="text" name="filtroDescripcion" placeholder="Ingrese N° de Dni" @focus='loadFecha()'>
	                    </div>

	                    <div class="col-sm-1">
	                        <a @click="traerPersona()" class="btn btn-success">Buscar</a>
	                    </div>
			            <div class="col-sm-3">
							<input type="text" class="form-control" id="nomb_completo" name="nomb_completo_txt" disabled=>
			            </div>

			            <div class="col-sm-3">
							<input type="date"  class="form-control" id="fecha" name="fecha" @focus='loadFecha()'>
			            </div>

			            <div class="col-sm-2">
							<input type="text" @focus='loadFecha()' class="form-control" id="numeroBo" name="numeroBo" placeholder="Ingrese N° de Boleta">
			            </div>
			         </div>
	            </div>
	        </form>
	  	</div>
  	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="box box-danger">
	        <div class="box-header with-border">
		        <h3 class="box-title"> <span id="titulo_lt"></span> Boleta</h3>
	        </div>

			<form id="agregar_boleta" name="agregar_frm"  method="post" >
				<div class="box-body">
	  				<div class="col-md-2">
		  				<div>
							<label for="rem_bas">Rem.Básica</label>
							<input type="text" class="form-control" id="rem_bas"  @keyup='calcularTotal()'  name="rem_bas_txt" required>
						</div>
						<div>
							<label for="r_t_homol">R.T.Homol</label>
							<input type="text" class="form-control" id="r_t_homol"  @keyup='calcularTotal()' name="r_t_homol_txt" required>
						</div>
						<div>
							<label for="b_ref_mov">B.Ref.Mov</label>
							<input type="text" class="form-control" id="b_ref_mov"  @keyup='calcularTotal()' name="b_ref_mov_txt" required>
						</div>
						<div>
							<label for="c_v_contra">D.U.073</label>
							<input type="text" class="form-control" id="c_v_contra"  @keyup='calcularTotal()' name="c_v_contra_txt" required>
						</div>
						<div>
							<label for="bcp_espec">Bcp.Eapec</label>
							<input type="text" class="form-control" id="bcp_espec"  @keyup='calcularTotal()' name="bcp_espec_txt" required>
						</div>
						<div>
							<label for="c_t_serv">C.T.Serv</label>
							<input type="text" class="form-control" id="c_t_serv"  @keyup='calcularTotal()' name="c_t_serv_txt" required>
						</div>
						<div>
							<label for="g_t_serv">G.T.Serv</label>
							<input type="text" class="form-control" id="g_t_serv" @keyup='calcularTotal()'  name="g_t_serv_txt" required>
						</div>
						<div>
							<label for="d_u_090_96">D.U.090-96</label>
							<input type="text" class="form-control" id="d_u_090_96" @keyup='calcularTotal()'  name="d_u_090_96_txt" required>
						</div>
						<div>
							<label for="d_l_20530">D.L.20530</label>
							<input type="text" class="form-control" id="d_l_20530"  @keyup='calcularTotal()' name="d_l_20530_txt" required>
						</div>
						<div>
							<label for="pre_salud">Pre Salud</label>
							<input type="text" class="form-control" id="pre_salud"  @keyup='calcularTotal()' name="pre_salud_txt" required>
						</div>
						<div>
							<label for="judiciales">Judiciales</label>
							<input type="text" class="form-control" id="judiciales" @keyup='calcularTotal()'  name="judiciales_txt" required>
						</div>
						<div>
							<label for="sesdid">Sesdid</label>
							<input type="text" class="form-control" id="sesdis"  @keyup='calcularTotal()' name="sesdis_txt" required>
						</div>
					</div>

					<div class="col-md-2">
						<div>
							<label for="cimpi">Cimpi</label>
							<input type="text" class="form-control" id="cimpi" name="cimpi_txt" @keyup='calcularTotal()'   required>
						</div>
						<div>
							<label for="s_tra_adm">S.Tra.Adm</label>
							<input type="text" class="form-control" id="s_tra_adm" name="s_tra_adm_txt"  @keyup='calcularTotal()' required>
						</div>
						<div>
							<label for="sutep">S.U.T.E.P</label>
							<input type="text" class="form-control" id="sutep" name="sutep_txt" @keyup='calcularTotal()'  required>
						</div>
						<div>
							<label for="bon_per">Bonif.Pers:</label>
							<input type="text" class="form-control" id="bon_per" name="bon_per_txt" @keyup='calcularTotal()'  required>
						</div>
						<div>
							<label for="f_dif_z_r">B.Dif.Z.R:</label>
							<input type="text" class="form-control" id="f_dif_z_r" name="f_dif_z_r_txt"  @keyup='calcularTotal()' required>
						</div>
						<div>
							<label for="dse_021">DSE.021-92</label>
							<input type="text" class="form-control" id="dse_021" name="dse_021_txt"  @keyup='calcularTotal()' required>
						</div>
						<div>
							<label for="ds_077">DS.077</label>
							<input type="text" class="form-control" id="ds_077" name="ds_077_txt" @keyup='calcularTotal()'  required>
						</div>
						<div>
							<label for="reunificada">Reunidicada</label>
							<input type="text" class="form-control" id="reunificada" name="reunificada_txt" @keyup='calcularTotal()'  required>
						</div>
						<div>
							<label for="propinas">Propinas</label>
							<input type="text" class="form-control" id="propinas" name="propinas_txt" @keyup='calcularTotal()'  required>
						</div>
						<div>
							<label for="d_u_80_94">D.U.80-94</label>
							<input type="text" class="form-control" id="d_u_80_94" name="d_u_80_94_txt" @keyup='calcularTotal()'  required>
						</div>
						<div>
							<label for="d_l_19990">D.L.19990</label>
							<input type="text" class="form-control" id="d_l_19990" name="d_l_19990_txt" @keyup='calcularTotal()'  required>
						</div>
						<div>
							<label for="derrama">Derrama</label>
							<input type="text" class="form-control" id="derrama" name="derrama_txt" @keyup='calcularTotal()'  required>
						</div>
					</div>

					<div class="col-md-2">
						<div>
							<label for="responsabilidad">Responsab</label>
							<input type="text" class="form-control" id="responsabilidad" @keyup='calcularTotal()' name="responsabilidad_txt" required>
						</div>
						<div>
							<label for="inter_trab">Inter/Trab</label>
							<input type="text" class="form-control" id="inter_trab" @keyup='calcularTotal()' name="inter_trab_txt" required>
						</div>
						<div>
							<label for="ad_fo_pen">Ad.Fo.Pen</label>
							<input type="text" class="form-control" id="ad_fo_pen" @keyup='calcularTotal()' name="ad_fo_pen_txt" required>
						</div>
						<div>
							<label for="dsct_var">Dctos.Var</label>
							<input type="text" class="form-control" id="dsct_var" @keyup='calcularTotal()' name="dsct_var_txt" required>
						</div>
						<div>
							<label for="d_l_25671">DL.25671:</label>
							<input type="text" class="form-control" id="d_l_25671" @keyup='calcularTotal()' name="d_l_25671_txt" required>
						</div>
						<div>
							<label for="bon_familiar">Bon.Famil</label>
							<input type="text" class="form-control" id="bon_familiar" @keyup='calcularTotal()' name="bon_familiar_txt" required>
						</div>
						<div>
							<label for="contrato">Contrato</label>
							<input type="text" class="form-control" id="contrato" @keyup='calcularTotal()' name="contrato_txt" required>
						</div>
						<div>
							<label for="aguinaldo">Aginaldo</label>
							<input type="text" class="form-control" id="aguinaldo" @keyup='calcularTotal()' name="aguinaldo_txt" required>
						</div>
						<div>
							<label for="igv">Igv.DS.261</label>
							<input type="text" class="form-control" id="igv" @keyup='calcularTotal()' name="igv_txt" required>
						</div>
						<div>
							<label for="sepelio_luto">C.T.Serv</label>
							<input type="text" class="form-control" id="sepelio_luto" @keyup='calcularTotal()' name="sepelio_luto_txt" required>
						</div>
						<div>
							<label for="ds_081">DS.081</label>
							<input type="text" class="form-control" id="ds_081" @keyup='calcularTotal()' name="ds_081_txt" required>
						</div>
						<div>
							<label for="pmag_art18">Pmag.Art18</label>
							<input type="text" class="form-control" id="pmag_art18" @keyup='calcularTotal()' name="pmag_art18_txt" required>
						</div>
					</div>

					<div class="col-md-2">
						<div>
							<label for="rein_0_rem">Rein/0 Rem</label>
							<input type="text" class="form-control" id="rein_0_rem" @keyup='calcularTotal()'  name="rein_0_rem_txt" required>
						</div>
						<div>
							<label for="ipss_vida">Ipss Vida</label>
							<input type="text" class="form-control" id="ipss_vida"  @keyup='calcularTotal()' name="ipss_vida_txt" required>
						</div>
						<div>
							<label for="s_cafae">S_Cafa/Mul</label>
							<input type="text" class="form-control" id="s_cafae"  @keyup='calcularTotal()' name="s_cafae_txt" required>
						</div>
						<div>
							<label for="ed_sevilla">Ed_Sevilla</label>
							<input type="text" class="form-control" id="ed_sevilla"  @keyup='calcularTotal()' name="ed_sevilla_txt" required>
						</div>
						<div>
							<label for="pe_p_falla">Pe.P.Falla</label>
							<input type="text" class="form-control" id="pe_p_falla" @keyup='calcularTotal()'  name="pe_p_falla_txt" required>
						</div>
						<div>
							<label for="funeraria">Funeraria</label>
							<input type="text" class="form-control" id="funeraria"  @keyup='calcularTotal()' name="funeraria_txt" required>
						</div>
						<div>
							<label for="lic_sg_rem">Lic.Sg.Rem</label>
							<input type="text" class="form-control" id="lic_sg_rem" @keyup='calcularTotal()'  name="lic_sg_rem_txt" required>
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
				                    	<a @click="addAdicional()" class="btn btn-success">+</a>
				                    </div>
					            </div>	
				        	</form>

				        	<table class="table">
				        		 <tr v-for="item in adicionales">
								    <td>{{ item.descripcion }} </td>
								    <td>{{ item.monto }}</td>
								 </tr>
				        	</table>
			        </div>
			        <div class="col-md-2 col-md-offset-10">
			        	<label for="total">Total</label>
						<input type="text" class="form-control" id="total" name="total" required>
			        </div>
				</div>

				<div class="box-footer" align="center">
	     			<a type="submit" id="enviar" name="enviar_sb" value="Guardar" class="btn btn-success" @click="sendData()">Guardar</a> 
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