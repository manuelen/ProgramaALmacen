<?php
require("conexion.php");
include ('funciones.php');
//funcion para parsear el codigo
	verificar_usuario();
	$contrasena=$_POST['contrasena'];
	$usuario = $_SESSION['usuario'];

		$contrasenas=mysql_query("SELECT * FROM  `usuarios` where `codigo` = MD5('$contrasena') and nombreusuario='$usuario'");
		$contrasenas1=mysql_fetch_array($contrasenas);
	
	if ($contrasenas1==false){ 
	$response = "Error Contraseña Erronea";
	echo json_encode($response);
	}else{
	$response = "Disponible";
    echo json_encode($response);
		}
		
		?>