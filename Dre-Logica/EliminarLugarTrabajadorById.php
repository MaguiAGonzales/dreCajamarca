<?php
$id = $_POST['id'];
 
	include('conexion.php');

	$query = "DELETE FROM lugar_trabajo where id_lugar_usu = $id";

	$consul = $conexion->query($query);

	

	if($consul == 1){

		echo "1";

	}else{
		echo "no";
	}
?>