<?php
require('conexion.php');

	$codigo=$_POST['codigoequipo'];
	$nombre=$_POST['nombreequipo'];
	$tipo=$_POST['tipo'];
	$modelo=$_POST['marca'];
	$serial=$_POST['serial'];
	$descripcion=$_POST['descripcion'];
	$cantidad=$_POST['cantidad'];
	$estado=$_POST['estado'];
	$ubicacion=$_POST['ubicacion'];
	if ($cantidad==""){
	$cantidad="1";
	}
	if ($serial==""){
		$serial="vacio";
	}
	if (($codigo=="")||($nombre=="")||($tipo=="")||($estado=="")||($ubicacion=="")){
		$sq=0;
	}else{
	$sql= "insert into equipos (codigoequipo,nombre,tipo,marca,serial,descripcion,cantidad,estado,ubicacion) values ('$codigo','$nombre','$tipo','$modelo','$serial','$descripcion','$cantidad','$estado','$ubicacion')";

	$sq=mysql_query($sql);
	}
	if ($sq==1) {$res=1;
	}else {$res=2;
		 }
	header("Location: registroherramienta.php?res=$res" );
?>