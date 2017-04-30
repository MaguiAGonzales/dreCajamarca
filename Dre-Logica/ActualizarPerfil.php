<?php
				include("conexion.php");

				if(isset($_REQUEST['btn_actualizar'])){
				$dni = $_POST["dni_txt"];
				$direccion= $_POST["direccion_txt"];
				$telefono = $_POST["telefono_txt"];
				$email = $_POST["email_txt"];
				$pass = $_POST["pass_txt"];

				$consulta1 = "UPDATE usuario SET direc_usu='$direccion',telef_usu='$telefono',e_mail='$email',pass_usu='$pass' WHERE dni_usuario='$dni'";
				
				$ejecutar_consulta1 = $conexion->query($consulta1);
				header("location:Datos.php");
				

			}
			?>