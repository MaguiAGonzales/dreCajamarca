<?php
	
	$id = $_POST['id'];
 
	include('conexion.php');

	$query = "SELECT * FROM lugar_trabajo where id_lugar_usu = $id";

	$consul = $conexion->query($query) ;

	$registro = $consul->fetch_assoc();

	//echo var_dump($registro);

	echo json_encode($registro);

?>

