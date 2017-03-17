<?php

	include('conexion.php');

	$query = "SELECT * FROM usuario ORDER BY dni_usuario ASC";

	 if(isset($_POST["buscar"])){

	 	$descripcion = $_POST["filtroDescripcion"];

	 	$query = "SELECT * FROM usuario where dni_usuario like '%$descripcion%' ORDER BY dni_usuario ASC";
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
					        <th>Dni</th>
					        <th>Nombres</th>
					        <th>Apellido Paterno</th>
					        <th>Apellido Materno</th>
					        <th>Tipo Usuario</th>
					        <th>Lugar de Trabajo</th>
					        <th>Opciones</th>
					      </tr>
					    </thead> 
					    <tbody>
					<?php
						while ($registro = $consul->fetch_assoc()) {
						?>
						<tr>
							<td><?= $registro['dni_usuario'] ?></td>
							<td><?= $registro['nomb_usu'] ?></td>
							<td><?= $registro['ap_pusu'] ?></td>
							<td><?= $registro['ap_musu'] ?></td>
							<!--
							<td><?= $registgro['tipo_usuario/cargo_usu'] ?></td>
							<td><?= $registgro['lugar_trabajo/lugar_usu'] ?></td>
							-->
							<td>
								<a href="" class="btn btn-info btn-sm"> <i class="fa fa-file"></i></a>
								<a href="" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>
								<a href="" class="btn btn-danger btn-sm"> <i class="fa fa-remove"></i></a>
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




