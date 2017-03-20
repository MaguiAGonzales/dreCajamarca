<?php
$id = $_POST['id'];
 
	include('conexion.php');

	$query = "DELETE FROM otros where id_otros = $id";

	$consul = $conexion->query($query);


	if($consul == 1){

		echo "1";

	}else{
		echo "no";
	}
?>