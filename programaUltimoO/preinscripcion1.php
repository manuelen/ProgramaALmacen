<?php
require('conexion.php');
	$cedula=$_POST['cedula'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$telefono=$_POST['telefono'];
	$curso=$_POST['curso'];
	
if(($cedula==0)||($nombre=="")||($apellido=="")||($telefono=="")||($curso=="")){
$sq=0;
}else{
	$sql= "insert into aspirantes (cedula,nombre,apellido,telefono,curso) values ('$cedula','$nombre','$apellido','$telefono','$curso')";
	
	$sq=mysql_query($sql);
}
	if ($sq==1){ $res=1;
	}else {$res=2; 
}
header("Location: preinscripcion.php?res=$res");
?>