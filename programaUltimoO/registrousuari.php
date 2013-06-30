<?php
require('conexion.php');

	$cedula=$_POST['cedula'];
	$telefono=$_POST['telefono'];
	$cargo=$_POST['cargo'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$nombreusuario=$_POST['nombreusuario'];
	$contrasena=$_POST['codigo'];
	$correo=$_POST['correo'];
	$pregunta=$_POST['pregunta'];
	$respuesta=$_POST['respuesta'];
	echo $correo;
	$sql= "insert into usuarios (cedula,telefono,cargo,nombre,apellido,nombreusuario,codigo,correo,pregunta,respuesta) values ('$cedula','$telefono','$cargo','$nombre','$apellido','$nombreusuario',md5('$contrasena'),'$correo','$pregunta','$respuesta')";
	$sq=mysql_query($sql);
	
	if ($sq==1){ $res=1;
	}else{ $res=2;}
	header("Location: registrousuario.php?res=$res" );
	?>