<?php 
require('conexion.php');
include ('funciones.php');
$codigoconfirmacion=$_REQUEST['codigoconfirmacion'];
$codigo=$_REQUEST['codigo'];

	$sql = "UPDATE `mantenimientos`SET `estado`='Finalizadas' WHERE `codigoconfirmacion` = '$codigoconfirmacion' and codigomantenimiento ='$codigo'";
	$sq=mysql_query($sql);
	$sql=mysql_query("select * from `mantenimientos` WHERE `codigoconfirmacion` = '$codigoconfirmacion' and codigomantenimiento ='$codigo' and estado='Finalizadas'");
	$sqll=mysql_fetch_array($sql);
	
	if ($sqll==true){ 
	$response = "Confirmacion Exitosa";
    echo json_encode($response);
	verificar_usuario();
	mysql_query("INSERT INTO `csf`.`auditorias` (`usuario`, `accion`, `fecha`, `hora`) VALUES ('$_SESSION[usuario]', 'Confirmacion de Mantenimiento: ".$codigoconfirmacion."', '".date("d/m/y")."', '".date("g:i:s a")."')");
	}else{
	  $response = "Error al Confirmar";
    echo json_encode($response);

	}

?>