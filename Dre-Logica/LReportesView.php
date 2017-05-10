<?php

	include('conexion.php');

	$query = "SELECT * FROM boleta inner join usuario on boleta.dni_usuario = usuario.dni_usuario ORDER BY id_boleta ASC";

	 if(isset($_POST["buscar"])){

	 	$descripcion = $_POST["filtroDescripcion"];

	 	$query = "SELECT * FROM boleta inner join usuario on boleta.dni_usuario = usuario.dni_usuario where numeroBo like '%$descripcion%' ORDER BY id_boleta ASC";
	}

	$consul = $conexion->query($query) ;
?>
<div style="padding: 15px">
<div class="col-md-12">
    <div class="box box-danger">
    	<div class="box-body">
            <input type="hidden" name="buscar" value="buscar">
            <div class="row">
				<div class="col-sm-12">
					<table class="table table-bordered table-hover">
					    <thead>
					      <tr>
					      	<th>Código</th>
					      	<th>Número Boleta</th>
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
							<td><?= $registro['numeroBo'] ?></td>
							<td><?= $registro['dni_usuario'] ?></td>


							<td><?= $registro['nomb_usu']?> <?= $registro['ap_pusu']?> <?= $registro['ap_musu']?></td>
							<td><?= $registro['fecha'] ?></td>
							<td>
								<a href="GenerarReporte.php?id= <?= $registro['id_boleta'] ?>" class="btn btn-info btn-sm"><i class="fa fa-download"></i></a>
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
</div>

<div class="col-sm-12">
	
	
</div>