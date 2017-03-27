<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
	        <h3 class="box-title"> <span id="titulo_lt"></span> Usuario</h3>
        </div>
        <form class="form-horizontal" id="agregar_usuario" name="agregar_frm"  method="post" enctype="multipart/form-data">
            <div class="box-body">

            <div class="col-md-6">
            	<div class="form-group">
                	<label for="dni_usuario" class="col-sm-4 control-label">Dni</label>
                	<div class="col-sm-8">
                    	<input type="text" class="form-control" id="dni_usuario" name="dni_usuario_txt" placeholder="Ingrese el número de Dni" title="Ingrese el número de Dni" pattern="[0-9]{8}" required>
                	</div>
            	</div>
            	<div class="form-group">
                	<label for="nomb_usu" class="col-sm-4 control-label">Nombres</label>
                	<div class="col-sm-8">
						<input type="text" class="form-control" id="nomb_usu" name="nomb_usu_txt" placeholder="Ingrese el Nombre Completo" title="Ingrese el Nombre Completo" pattern="[a-Z]" required>
                	</div>
            	</div>
            	<div class="form-group">
                	<label for="ap_pusu" class="col-sm-4 control-label">Ap. Paterno</label>
                	<div class="col-sm-8">
						<input type="text" class="form-control" id="ap_pusu" name="ap_pusu_txt" placeholder="Ingrese el Apellido Paterno" title="Ingrese el Apellido Paterno" pattern="[a-Z]" required>
                	</div>
            	</div>
            	<div class="form-group">
                	<label for="ap_musu" class="col-sm-4 control-label">Ap. Materno</label>
                	<div class="col-sm-8">
						<input type="text" class="form-control" id="ap_musu" name="ap_musu_txt" placeholder="Ingrese el Apellido Materno" title="Ingrese el Apellido Materno" pattern="[a-Z]" required>
                	</div>
            	</div>
            	<div class="form-group">
                	<label for="fech_nac" class="col-sm-4 control-label">Fec. Nac.</label>
                	<div class="col-sm-8">
						<input type="date" class="form-control" id="fech_nac" name="fech_nac_txt" size="20%"  required>
                	</div>
            	</div>
            	<div class="form-group">
                	<label for="direc_usu" class="col-sm-4 control-label">Dirección</label>
                	<div class="col-sm-8">
						<input type="text" class="form-control" id="direc_usu" name="direc_usu_txt" placeholder="Ingresa la Dirección" title="Ingresa la Dirección" size="20%" required>
                	</div>
            	</div>            	
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="telef_usu" class="col-sm-4 control-label">Teléfono</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tel_usu" name="telef_usu_txt" placeholder="Ingrese número de telefono" title="Ejemplo:076345678 O 999999999" pattern="[0-9]{9}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="e_mail" class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="e_mail" name="e_mail_txt" placeholder="Ingrese el email" title="Email" required>
                    </div>
                </div>
            	<div class="form-group">
                	<label for="id_tipo" class="col-sm-4 control-label">Tipo Usuario</label>
                    <div class="col-sm-8">
                	   <select id="id_tipo" name="id_tipo_slc" class="form-control" required>
                            <option value="">Seleccione Tipo de Usuario</option>
                            <?php include("SeleccionarTipoUsuario.php");?>
                        </select>
                    </div>
            	</div>

            	<div class="form-group">
                	<label for="id_lugar" class="col-sm-4 control-label">Lugar Trabajo</label>
                	<div class="col-sm-8">
                        <select id="id_lugar" name="id_lugar_slc" class="form-control" required>
                            <option value="">Seleccione Lugar de Trabajo</option>
                            <?php include("SeleccionarLugarUsuario.php");?>
                        </select>
                    </div>
            	</div>

                <div class="form-group" id="input_contrasenia">
                    <label for="pass_usu" class="col-sm-4 control-label">Contraseña</label>
                    <div class="col-sm-8">
                        <input type="pass_usu" class="form-control" id="pass_usu" name="pass_usu_txt" placeholder="Ingrese contraseña" title="Contraseña" >
                    </div>
                </div>
            </div>

         	<div class="col-md-12">
             	<div class="box-footer" align="center">
             		<button type="submit" id="enviar" name="enviar_sb" value="Guardar" class="btn btn-success">Guardar</button>
                    
                    <button type="submit" id="editar" name="editar_sb" value="Editar" class="btn btn-success">Editar</button > 
                </div>
            </div>

        </form>
  	</div>
</div>
<?php  
    if(isset($_REQUEST['enviar_sb'])){

	$dni_usuario=$_POST["dni_usuario_txt"];
	$nomb_usu=$_POST["nomb_usu_txt"];
	$ap_pusu=$_POST["ap_pusu_txt"];
	$ap_musu=$_POST["ap_musu_txt"];
	$fech_nac=$_POST["fech_nac_txt"];
	$direc_usu=$_POST["direc_usu_txt"];
	$telef_usu=$_POST["telef_usu_txt"];
	$e_mail=$_POST["e_mail_txt"];
	$id_tipo_usu=$_POST["id_tipo_slc"];
	$id_lugar_usu=$_POST["id_lugar_slc"];
	
    include ("conexion.php");

	$consulta="INSERT INTO usuario(dni_usuario, nomb_usu, ap_pusu, ap_musu, fech_nac, direc_usu, telef_usu, e_mail, pass_usu, id_tipo_usu, id_lugar_usu) VALUES ('$dni_usuario','$nomb_usu','$ap_pusu','$ap_musu','$fech_nac','$direc_usu','$telef_usu','$e_mail','$dni_usuario','$id_tipo_usu','$id_lugar_usu')";

	$ejecutar_consulta=$conexion->query($consulta);

	if ($ejecutar_consulta) {
			echo "<script> alert('Usuario Registrado');</script>";
		}
		else{
			echo "<script> alert('Usuario No Registrado');</script>";
		}
	}

    if(isset($_REQUEST["editar_sb"])){
    
    $direc_usu=$_POST["direc_usu_txt"];
    $telef_usu=$_POST["telef_usu_txt"];
    $e_mail=$_POST["e_mail_txt"];
    $pass_usu=$_POST["pass_usu_txt"];
    $id_lugar_usu=$_POST["id_lugar_slc"];

    include ("conexion.php");
    
    $consulta="UPDATE usuario SET direc_usu = '$direc_usu', telef_usu = '$telef_usu', e_mail = '$e_mail', pass_usu = '$pass_usu', id_lugar_usu = '$id_lugar_usu' where dni_usuario = '$dni_usuario'";

    $ejecutar_consulta=$conexion->query($consulta);
    
    if ($ejecutar_consulta) {
            echo "<script> alert('Usuario Actualizado');</script>";
        }
        else{
            echo "<script> alert('Usuario No Actualizado');</script>";
        }
    }
?>