<?php
	require('conexion.php');

	$codigo=$_POST['codigoequipo'];
	$codigom=$_POST['codigomante'];
	$encargado=$_POST['cedulaencargado'];
	$tipo=$_POST['tipo'];
	$descripcion=$_POST['descripcion'];
	$fecha=$_POST['fecha'];
	$sql= "UPDATE registros SET codigomante='$codigom',cedulaencargado='$encargado',tipo='$tipo',descripcion='$descripcion',fecha='$fecha' where codigoequipo='$codigo'";
	$sq=mysql_query($sql);
	if ($sq==1) $res=1;
	else $res=2;
	
	header("Location: modificar.php?res=$res");

?>

