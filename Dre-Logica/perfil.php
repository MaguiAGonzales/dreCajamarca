<?php
session_start();
if($_SESSION["docente"]==false){
	header("location:salir.php");
}else{
?>

<?php include('../Dre-Presentacion/template_cabecera.php') ?>

<div class="content-wrapper">
	<section class="content">  
		<div class="box-header with-border">
	        <h3 class="box-title">Editar Perfil</h3>
        </div>

		<FORM id="agregar_otros" name="agregar_otros_frm" action="perfil.php" method="post" enctype="multipart/form-data">
					<?php 
					include("conexion.php");
					$bus=$_SESSION["doc"];
					
					$consulta="SELECT dni_usuario, nomb_usu, concat(ap_pusu,' ',ap_musu) AS apellidos,fech_nac, pass_usu, direc_usu,telef_usu,e_mail, lugar_usu AS lugar FROM usuario u  INNER JOIN lugar_trabajo lt ON u.id_lugar_usu = lt.id_lugar_usu where dni_usuario='$bus'";
					$ejecutar_consulta=$conexion->query($consulta);
					$num_regs=$ejecutar_consulta->num_rows;
					if($registro=$ejecutar_consulta->fetch_assoc()){ 
								
							?>
							<input type="hidden" id="dni" class="cambio" name="dni_txt" placeholder="Escribe tu dni" title="Tu dni" value="<?php echo $registro["dni_usuario"]; ?>">
							
							<ul class="list-group">
							  <li class="list-group-item" >DNI: <?php echo $_SESSION["doc"]; ?></li>
							  <li class="list-group-item">Nombre: <?php echo $registro["nomb_usu"]; ?></li>
							  <li class="list-group-item">Apellidos: <?php echo $registro["apellidos"]; ?></li>
							  <li class="list-group-item">Fecha Nacimiento: <?php echo $registro["fech_nac"]; ?></li>
							  <li class="list-group-item">Contraseña: <input type="text" id="pass" class="cambio" name="pass_txt" title="Contraseña" value="<?php echo $registro["pass_usu"]; ?>" required/>    <span class='label label-warning'>SU CONTRASEÑA PODRÁ SER CAMBIADA TAN SOLO POR 8 DÍGITOS O MENOS</span></li>
							  <li class="list-group-item">Teléfono: <input type="tel" id="telefono" name="telefono_txt" placeholder="Ingresa tu telefono" title="Ejemplo:076345678/999999999" pattern="[0-9]{9}" value="<?php echo $registro["telef_usu"]; ?>"/>
							  </li>
							  <li class="list-group-item">Correo: <input type="email" id="email" name="email_txt" placeholder="Ingresa tu email" title="email"  value="<?php echo $registro["e_mail"]; ?>" required/></li>
							  <li class="list-group-item">Dirección: <input type="text" id="direccion" class="cambio" name="direccion_txt" title="Tu direccion" value="<?php echo $registro["direc_usu"]; ?>"/></li>
							  <li class="list-group-item">Institución Educativa: <?php echo $registro["lugar"]; ?></li>
							</ul>							
							<?php		
						}					
					?>
					<div>
						<button type="submit" type="submit" id="enviar" name="btn_actualizar" value="Actualizar" class="btn btn-success">Guardar Cambios</button> 
					</div>	
 			   		</FORM>    
	

			<?php
				include("conexion.php");

				if(isset($_REQUEST['btn_actualizar'])){
				$dni = $_POST["dni_txt"];
				$direccion= $_POST["direccion_txt"];
				$telefono = $_POST["telefono_txt"];
				$email = $_POST["email_txt"];
				$pass = $_POST["pass_txt"];

				$consulta1 = "UPDATE usuario SET direc_usu='$direccion',telef_usu='$telefono',e_mail='$email',pass_usu='$pass' WHERE dni_usuario='$dni'";
				
				$ejecutar_consulta1 = $conexion->query($consulta1);

					header("location:perfil.php");
			}
			?>
    </section>
</div>

<?php include('../Dre-Presentacion/template_footer.php') ?>

<?php } ?>