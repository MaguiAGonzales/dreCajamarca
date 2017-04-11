<?php
 session_start();
 if($_SESSION["docente"]==false){
 	header("location:../Dre-Presentacion/login.php");
 }else{
?>

<?php include('../Dre-Presentacion/template_cabecera.php') ?>

<div class="content-wrapper">
	<section class="content">  
		 <div class="box-header with-border">
	        <h3 class="box-title">Perfil</h3>
        </div>

		<?php 
			include("conexion.php");
			$bus=$_SESSION["doc"];
			$consulta="SELECT dni_usuario, nomb_usu, concat(ap_pusu,' ',ap_musu) AS apellidos,fech_nac,direc_usu,telef_usu,e_mail, lugar_usu AS lugar FROM usuario u  INNER JOIN lugar_trabajo lt ON u.id_lugar_usu = lt.id_lugar_usu where dni_usuario='$bus'";
			$ejecutar_consulta=$conexion->query($consulta);
			$num_regs=$ejecutar_consulta->num_rows;
			if($registro=$ejecutar_consulta->fetch_assoc()){ 	
			?>
			
			<FORM id="agregar_otros" name="agregar_otros_frm" action="perfil.php" method="post">
				<ul class="list-group">
					<li class="list-group-item">Dni: <?php echo $_SESSION["doc"]; ?></li>
					<li class="list-group-item">Nombre: <?php echo $registro["nomb_usu"]; ?></li>
					<li class="list-group-item">Apellidos: <?php echo $registro["apellidos"]; ?></li>
					<li class="list-group-item">Fecha Nacimiento: <?php echo $registro["fech_nac"]; ?></li>
					<li class="list-group-item">Teléfono: <?php echo $registro["telef_usu"]; ?></li>
					<li class="list-group-item">Correo: <?php echo $registro["e_mail"]; ?></li>
					<li class="list-group-item">Dirección: <?php echo $registro["direc_usu"]; ?></li>
					<li class="list-group-item">Institución Educativa: <?php echo $registro["lugar"]; ?></li>
				</ul>
								
					<div>
						<button type="submit" type="submit" id="enviar" name="btn_actualiza" value="Actualizar" class="btn btn-success">Actualizar Datos</button> 
					</div> 			
		   			</FORM>  
		   		<?php			
				} ?> 
    </section>
</div>
<?php } ?>

<?php include('../Dre-Presentacion/template_footer.php') ?>