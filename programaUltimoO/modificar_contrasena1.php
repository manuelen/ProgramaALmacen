<?php
require('conexion.php');

	$clave=$_POST['clave'];
	$clave1=$_POST['clave1'];

	$sql= "UPDATE  `csf`.`usuarios` SET `codigo` = MD5('$clave1') WHERE  codigo=MD5('$clave')";
	$sq=mysql_query($sql);
	
	
	if ($sq==1){ 
	$response = "Modificacion Exitosa";
    echo json_encode($response);
		
	}else{
	  $response = "Error al Modificar";
    echo json_encode($response);
	}
	
?>