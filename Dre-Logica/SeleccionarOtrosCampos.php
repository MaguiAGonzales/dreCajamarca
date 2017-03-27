<?php
include("conexion.php");
$consulta="select * from otros order by id_otros";
$ejecutar_consulta=$conexion->query($consulta);
while ($registro=$ejecutar_consulta->fetch_assoc()) {
	$id_otros=$registro["id_otros"];
	$nombre=$registro["nombre"];
	
	echo "<option value='$id_otros'>$nombre</option>";
}
?>