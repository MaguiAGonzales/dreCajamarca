<?php

	include('conexion.php');

	$query = "SELECT * FROM boleta inner join usuario on boleta.dni_usuario = usuario.dni_usuario ORDER BY id_boleta ASC";

	 if(isset($_POST["buscar"])){

	 	$descripcion = $_POST["filtroDescripcion"];

	 	$query = "SELECT * FROM boleta inner join usuario on boleta.dni_usuario = usuario.dni_usuario where id_boleta like '%$descripcion%' ORDER BY id_boleta ASC";
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
					      	<th>Código Boleta</th>
					      	<th>Dni</th>
					        <th>Nombre Completo</th>
					        <th>Fecha</th>
					        <th>Opciones</th>
					      </tr>
					    </thead> 
					    <tbody>
					<?php
						while ($registro = $consul->fetch_assoc()) {
						?>
						<tr>
							<td><?= $registro['id_boleta'] ?></td>
							<td><?= $registro['dni_usuario'] ?></td>
							<td><?= $registro['nomb_usu'] ?></td>
							<td><?= $registro['fecha'] ?></td>
							<td>
								<button href="" class="btn btn-warning btn-sm"
								 onclick="modalEditBO(<?= $registro['id_boleta'] ?>)"> <i class="fa fa-edit"></i></button>
								
								<button href="" class="btn btn-danger btn-sm"
								 onclick="EliminarBO(<?= $registro['id_boleta'] ?>)"> <i class="fa fa-remove"></i></button>

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