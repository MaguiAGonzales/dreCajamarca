<?php
	include ("conexion.php");
	
	$consulta="SELECT * FROM lugar_trabajo order by lugar_usu";
	$ejecutar_consulta=$conexion->query($consulta);
	while ($registro=$ejecutar_consulta->fetch_assoc()) {
		$id_lugar_usu=$registro["id_lugar_usu"];
		$lugar=$registro["lugar_usu"];
		
		echo "<option value='$id_lugar_usu'>$lugar</option>";
	}
?>