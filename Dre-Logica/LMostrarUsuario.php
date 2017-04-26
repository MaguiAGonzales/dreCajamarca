<?php

	include('conexion.php');
	$sub_query = '';
	$query = "";

	$query = "SELECT * FROM usuario inner join lugar_trabajo on usuario.id_lugar_usu = lugar_trabajo.id_lugar_usu inner join tipo_usuario on usuario.id_tipo_usu = tipo_usuario.id_tipo_usu where tipo_usuario.id_tipo_usu in (5,4)  ORDER BY dni_usuario ASC";

	

	 if(isset($_POST["buscar"])){

	 	$descripcion = $_POST["filtroDescripcion"];

	 	$query = "SELECT * FROM usuario inner join lugar_trabajo on usuario.id_lugar_usu = lugar_trabajo.id_lugar_usu inner join tipo_usuario on usuario.id_tipo_usu = tipo_usuario.id_tipo_usu where usuario.dni_usuario like '%$descripcion%' and tipo_usuario.id_tipo_usu in (5,4) ORDER BY dni_usuario ASC ";

	 	// var_dump($query);
	}

	$consul = $conexion->query($query) ;
?>

<div class="col-md-12">
    <div class="box box-danger">
    	<div class="box-body">
            <input type="hidden" name="buscar" value="buscar">
            <div class="row">
				<div class="col-sm-12">
					<table  class="table table-bordered table-hover">
					    <thead>
					      <tr>
					        <th>Dni</th>
					        <th>Nombres Completos</th>
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
							<td><?= $registro['nomb_usu']?> <?= $registro['ap_pusu']?> <?= $registro['ap_musu']?></td>
							<td><?= $registro['cargo_usu'] ?></td>
							<td><?= $registro['lugar_usu'] ?></td>
							<td>
								
								<button href="" class="btn btn-info btn-sm"
								 onclick="modalDetailsLT(<?= $registro['dni_usuario'] ?>)"> <i class="fa fa-file-text-o"></i></button>
								
								<?php
									if ($_COOKIE["tipo"]=='adm') {
								?>
								<button href="" class="btn btn-warning btn-sm"
								 onclick="modalEditUsu(<?= $registro['dni_usuario'] ?>)"> <i class="fa fa-edit"></i></button>
									
								 <button href="" class="btn btn-danger btn-sm"
								 onclick="EliminarUsu(<?= $registro['dni_usuario'] ?>)"> <i class="fa fa-remove"></i></button>
								<?php
									}
								?>
												
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




