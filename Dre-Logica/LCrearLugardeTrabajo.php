<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
	        <h3 class="box-title"> <span id="titulo_lt"></span> Lugar de Trabajo</h3>
        </div>
        
        <form class="form-horizontal" id="agregar_lugar_trabajo" name="agregar_Lugar_Trabajo_frm"  method="post" >
            <div class="box-body">
            	<div class="form-group">
                	<label for="id_lugar_usu" class="col-sm-3 control-label">Código</label>
                	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="id_lugar_usu" name="id_lugar_usu_txt" placeholder="Código del lugar" title="Código del lugar" required>
                	</div>
            	</div>
        
            	<div class="form-group">
                	<label for="lugar_usu" class="col-sm-3 control-label">Nombre</label>
                	<div class="col-sm-9">
						<input type="text" class="form-control" id="lugar_usu" name="lugar_usu_txt" placeholder="Nombre del Lugar" title="Nombre del Lugar" pattern="[a-Z]" required>
                	</div>
            	</div>
         	
         	<div class="box-footer" align="center">
         		<button type="submit" id="enviar" name="enviar_sb" value="Guardar" class="btn btn-success">Guardar</button> 
                
                <button type="submit" id="editar" name="editar_sb" value="Editar" class="btn btn-success">Editar</button > 

            </div>
        </form>
  	</div>
</div>
<?php  
    if(isset($_REQUEST["enviar_sb"])){
    
    $id_lugar_usu=$_POST["id_lugar_usu_txt"];
	$lugar_usu=$_POST["lugar_usu_txt"];

	include ("conexion.php");
    
	$consulta="INSERT INTO lugar_trabajo(id_lugar_usu,lugar_usu) VALUES ('$id_lugar_usu','$lugar_usu')";
	$ejecutar_consulta=$conexion->query($consulta);
	if ($ejecutar_consulta) {
			echo "<script> alert('Lugar de Trabajo Registrado');</script>";
		}
		else{
			echo "<script> alert('Lugar de Trabajo No Registrado');</script>";
		}
	}

    if(isset($_REQUEST["editar_sb"])){
    
    $id_lugar_usu=$_POST["id_lugar_usu_txt"];
    $lugar_usu=$_POST["lugar_usu_txt"];

    //var_dump($_POST); 

    include ("conexion.php");
    
    $consulta="UPDATE lugar_trabajo SET lugar_usu = '$lugar_usu' where id_lugar_usu = '$id_lugar_usu'";
    $ejecutar_consulta=$conexion->query($consulta);
    if ($ejecutar_consulta) {
            echo "<script> alert('Lugar de Trabajo Actualizado');</script>";
        }
        else{
            echo "<script> alert('Lugar de Trabajo No Actualizado');</script>";
        }
    }
?>	
