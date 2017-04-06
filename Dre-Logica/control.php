<?php
if(isset($_REQUEST['enviar_sb'])){
	$usuario=$_POST["buscar_txt"];
	$password=$_POST["pass_txt"];

	include('conexion.php');

		$administrador = "SELECT * FROM usuario WHERE dni_usuario = '$usuario' AND pass_usu= '$password' AND id_tipo_usu='1'";
		$docente="SELECT * FROM usuario WHERE dni_usuario = '$usuario' AND pass_usu= '$password' AND id_tipo_usu in (4,5)";
		$registrador = "SELECT * FROM usuario WHERE dni_usuario = '$usuario' AND pass_usu= '$password' AND id_tipo_usu='3'";
		
		$ejecutar_docente=$conexion->query($docente);
		$ejecutar_administrador=$conexion->query($administrador);
		$ejecutar_registrador=$conexion->query($registrador);

			if($registro=$ejecutar_docente->fetch_assoc()) 
			{
   			    header("location:Usuario.php");
				session_start();
				$_SESSION["docente"]=true;
				$_SESSION["doc"]=$usuario;
			}
			 
			else if($registro=$ejecutar_administrador->fetch_assoc()) 
			{
			    header("location:LugardeTrabajo.php");
				session_start();
				$_SESSION["administrador"]=true;
				$_SESSION["adm"]=$usuario;
			} 
			else if($registro=$ejecutar_registrador->fetch_assoc()) 
			{
			    header("location:Boleta.php");
				session_start();
				$_SESSION["registrador"]=true;
				$_SESSION["reg"]=$usuario;
			} 
			else 
			{
			   echo "<script> alert('Datos Incorrectos');</script>";
			   header("Location:Dre-Presentacion/login.php");
			}
}
?>