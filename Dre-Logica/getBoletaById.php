<?php

	$id = $_POST['id'];
 
	include('conexion.php');

	$query = "SELECT * FROM boleta where id_boleta = $id";

	$consul = $conexion->query($query);

	if(count($consul)>0){
		$registro = $consul->fetch_assoc();
		$q = "SELECT d.dscto monto, o.nombre descripcion , d.id_otros id 
				FROM detalle_bo d inner join otros o 
				ON d.id_otros = o.id_otros where d.id_boleta = $id";

		$res = $conexion->query($q);
		$detalles= [];

		while ($i = $res->fetch_assoc()) {
			array_push($detalles, $i);
		}

		$registro['detalles'] = $detalles;

	}

	echo json_encode($registro);
?>