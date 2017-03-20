<?php
$id = $_POST['id'];
 
include('conexion.php');

	$query = "SELECT * FROM usuario where dni_usuario = $id";

	$consul = $conexion->query($query) ;

	$registro = $consul->fetch_assoc();

	echo json_encode($registro);
?>