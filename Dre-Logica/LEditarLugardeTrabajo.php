
<?php

    include ("conexion.php");

    $id = $_GET['id'];
    
    $consulta="INSERT INTO lugar_trabajo(id_lugar_usu,lugar_usu) VALUES ('$id_lugar_usu','$lugar_usu')";
    $ejecutar_consulta=$conexion->query($consulta);
    if ($ejecutar_consulta) {
            echo "<script> alert('Lugar de Trabajo Registrado');</script>";
        }
        else{
            echo "<script> alert('Lugar de Trabajo No Registrado');</script>";
        }
    }
    

 ?>


<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
	        <h3 class="box-title">Editar Lugar de Trabajo</h3>
        </div>
        
        <form class="form-horizontal" id="agregar_lugar_trabajo" name="agregar_Lugar_Trabajo_frm"  method="post" enctype="multipart/form-data">
            <div class="box-body">
            	<div class="form-group">
                	<label for="id_lugar_usu" class="col-sm-2 control-label">Código del lugar</label>
                	<div class="col-sm-10">
                    	<input type="text" class="form-control" id="id_lugar_usu" name="id_lugar_usu_txt" placeholder="Código del lugar" title="Código del lugar" required>
                	</div>
            	</div>
        
            	<div class="form-group">
                	<label for="lugar_usu" class="col-sm-2 control-label">Nombre del Lugar</label>
                	<div class="col-sm-10">
						<input type="text" class="form-control" id="lugar_usu" name="lugar_usu_txt" placeholder="Nombre del Lugar" title="Nombre del Lugar"   pattern="[a-Z]" required>
                	</div>
            	</div>
         	
         	<div class="box-footer" align="center">
         		<button type="submit" id="enviar" name="enviar_sb" value="Guardar" class="btn btn-success">Guardar</button> 
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
?>	
