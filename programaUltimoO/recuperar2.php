<?php
require('conexion.php');

	$cedula=$_POST['cedula'];
	$contrasena=$_POST['contrasena'];
	 
	$cedulas=mysql_query("select * from usuarios where cedula='$cedula'");
	$cedulas1=mysql_fetch_array($cedulas);
	$sql= "UPDATE  `csf`.`usuarios` SET `codigo` = MD5('$contrasena') WHERE  `usuarios`.`cedula` ='$cedula'";

	$sq=mysql_query($sql);
	
	if ($sq==1){ 
	$response = "Modificación Exitosa";
    echo json_encode($response);
	mysql_query("INSERT INTO `csf`.`auditoria` (`usuario`, `accion`, `fecha`, `hora`) VALUES ('$cedulas1[nombreusuario]', 'Recupración de contraseña: Datos personales', '".date("y/m/d")."', '".date("g:i:s a")."')");
	
	}else{
	  $response = "Error al Modificar";
    echo json_encode($response);
	}
	?>
	