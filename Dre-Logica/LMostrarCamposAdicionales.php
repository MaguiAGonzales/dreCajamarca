<?php

	include('conexion.php');

	$query = "SELECT * FROM otros ORDER BY nombre ASC";

	 if(isset($_POST["buscar"])){

	 	$descripcion = $_POST["filtroDescripcion"];

	 	$query = "SELECT * FROM otros where nombre like '%$descripcion%' ORDER BY nombre ASC";
	}

	$consul = $conexion->query($query) ;
?>

<div class="col-md-12">
    <div class="box box-info">
    	<div class="box-body">
            <input type="hidden" name="buscar" value="buscar">
            <div class="row">
				<div class="col-sm-12">
					<table  class="table table-bordered table-hover">
					    <thead>
					      <tr>
					        <th>Nombre</th>
					        <th>Opciones</th>
					      </tr>
					    </thead> 
					    <tbody>
					<?php
						while ($registro = $consul->fetch_assoc()) {
						?>
						<tr>
							<td><?= $registro['nombre'] ?></td>
							<td>
								<a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
								
  								<form method="_POST" action="">
  									<input type="hidden" name="id" value= <?= $registro['id_otros']?> >
  									<input type="submit" value="eliminar" name="eliminar"></i>
  								
									<?php
	  									if (isset($_POST["eliminar"]))
										{
										$datos = $_POST["id"];

										$consulta = "DELETE FROM otros WHERE id_otros=$datos";

										$ejecutar_consulta=$conexion->query($consulta);
								            if ($ejecutar_consulta) {
								                    echo "<script> alert('Campo Adicional Eliminado');</script>";
								                }
								                else{
								                    echo "<script> alert('Campo Adicional No Eliminado');</script>";
								                }
									}?>

  								</form>
							</td>
						</tr>
					<?php } ?>
							
					    </tbody>
					</table>
				</div>
        	</div>
        </div>	
        <div class="box-footer" align="center">
         		
        </div>
        
  	</div>
</div>

<div class="col-sm-12">
	
	
</div>


