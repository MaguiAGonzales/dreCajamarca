<?php
	
	$id = $_GET['id'];
 
	include('conexion.php');

	$query = "DELETE FROM detalle_bo WHERE id_boleta = $id";

	$consul = $conexion->query($query);

	if ($consul == 1) {

		$query = "DELETE FROM boleta where id_boleta = $id";

		$consul= $conexion->query($query);

		if ($consul){

			echo "si";

			header("location:Boleta.php");

		}
		else {	
			echo "no elimina";
		}

		
	}else{
		echo "no";
	}
?>