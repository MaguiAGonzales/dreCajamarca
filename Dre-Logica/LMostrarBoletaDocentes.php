<?php

	include('conexion.php');

	$query = "SELECT * FROM boleta inner join usuario on boleta.dni_usuario = usuario.dni_usuario ORDER BY id_boleta ASC";

	if($_COOKIE["tipo"] == 'doc'){

		$dni = $_COOKIE["dni"];

		$query = "SELECT * FROM boleta inner join usuario on boleta.dni_usuario = usuario.dni_usuario 
		where usuario.dni_usuario = '$dni'
		ORDER BY id_boleta ASC";

	}

	 if(isset($_POST["buscar"])){

	 	$mes = $_POST["mes"];
	 	$anio = $_POST["anio"];
	 	$nombre = $_POST['nombre'];


	 	$query = "SELECT * FROM boleta inner join usuario on boleta.dni_usuario = usuario.dni_usuario
	 	where boleta.mes = '$mes' and  boleta.anio = '$anio' and usuario.dni_usuario = '$dni'
	 	and concat(usuario.nomb_usu,' ',usuario.ap_pusu,' ',usuario.ap_musu) like  '%$nombre%' ORDER BY id_boleta ASC";

	}

	$consul = $conexion->query($query) ;
?>

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
					        <th>Mes</th>
					        <th>Año</th>
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
							<td><?= $registro['mes'] ?></td>
							<td><?= $registro['anio'] ?></td>

							<td>

								<?php
									if ($_COOKIE["tipo"]=='doc') {
								?>
								<a href="GenerarReporte.php?id= <?= $registro['id_boleta'] ?>" class="btn btn-info btn-sm"><i class="fa fa-download"></i></a>

								<?php
									}
								?>
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