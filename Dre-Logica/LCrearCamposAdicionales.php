<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
	        <h3 class="box-title">Crear Campos Adicionales</h3>
        </div>
        
        <form class="form-horizontal" id="agregar_lugar_trabajo" name="agregar_Lugar_Trabajo_frm"  method="post" enctype="multipart/form-data">
            <div class="box-body">

            	<div class="form-group">
                	<label for="nombre" class="col-sm-2 control-label">Nombre del Campo Adicional</label>
                	<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre_txt" placeholder="Nombre del Campo Adicional" title="Nombre del Campo Adicional" pattern="[a-Z]" required>
                	</div>
            	</div>
         	
         	<div class="box-footer" align="center">
         		<button type="submit" id="enviar" name="enviar_sb" value="Guardar" class="btn btn-success">Guardar</button> 
            </div>
        </form>
  	</div>
</div>

<?php 
    if(isset($_REQUEST['enviar_sb'])){
        $nombre=$_POST["nombre_txt"];
            include ("conexion.php");
            $consulta="INSERT INTO otros(nombre) VALUES ('$nombre')";
            $ejecutar_consulta=$conexion->query($consulta);
            if ($ejecutar_consulta) {
                    echo "<script> alert('Campo Adicional Registrado');</script>";
                }
                else{
                    echo "<script> alert('Campo Adicional No Registrado');</script>";
                }
    }
?>



