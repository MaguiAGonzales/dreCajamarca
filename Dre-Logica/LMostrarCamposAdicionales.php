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
								<button href="" class="btn btn-warning btn-sm"
								 onclick="modalEditCA(<?= $registro['id_otros'] ?>)"> <i class="fa fa-edit"></i></button>
								
								<button href="" class="btn btn-danger btn-sm"
								 onclick="EliminarCA(<?= $registro['id_otros'] ?>)"> <i class="fa fa-remove"></i></button>


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


