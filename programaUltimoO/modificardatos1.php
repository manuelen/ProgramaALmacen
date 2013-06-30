<?php
require('conexion.php');

	$cedula=$_POST['cedula'];
	$telefono=$_POST['telefono'];
	$cargo=$_POST['cargo'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$nombreusuario=$_POST['nombreusuario'];
	$contrasena=$_POST['codigo'];
	if (($telefono=="")||($cargo=="")||($nombre=="")||($apellido=="")||($nombreusuario=="")||($contrasena=="")){
		$sq=0;
	}else{
	$sql="update usuarios set telefono='$telefono',nombre='$nombre',apellido='$apellido',nombreusuario='$nombreusuario',codigo= md5('$contrasena') where cedula='$cedula'";
	$sq=mysql_query($sql);	
	if ($sq==1) $res=1;
	else $res=2;
	}
	header("Location: modificardatos.php?res=$res");
?>