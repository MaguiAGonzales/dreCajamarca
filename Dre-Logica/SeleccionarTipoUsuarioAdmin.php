<?php
	include ("conexion.php");

	$consulta="SELECT * FROM tipo_usuario where WHERE usuario.id_tipo_usu = 1 and usuario.id_tipo_usu = 3 order by cargo_usu";
	$ejecutar_consulta=$conexion->query($consulta);
	while ($registro=$ejecutar_consulta->fetch_assoc()) {
		$id_tipo_usu=$registro["id_tipo_usu"];
		$nombre=($registro["cargo_usu"]);
		
		echo "<option value='$id_tipo_usu'>$nombre </option>";
	}
?>