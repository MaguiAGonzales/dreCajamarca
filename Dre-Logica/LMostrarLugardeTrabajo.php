<?php

	include('conexion.php');

	$query = "SELECT * FROM lugar_trabajo ORDER BY lugar_usu ASC";

	 if(isset($_POST["buscar"])){

	 	$descripcion = $_POST["filtroDescripcion"];

	 	$query = "SELECT * FROM lugar_trabajo where lugar_usu like '%$descripcion%' ORDER BY lugar_usu ASC";
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
					        <th>Id</th>
					        <th>Nombre</th>
					        <th>Opciones</th>
					      </tr>
					    </thead> 
					    <tbody>
					<?php
						while ($registro = $consul->fetch_assoc()) {
						?>
						<tr>
							<td><?= $registro['id_lugar_usu'] ?></td>
							<td><?= $registro['lugar_usu'] ?></td>

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




