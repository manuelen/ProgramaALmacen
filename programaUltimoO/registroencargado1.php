<?php
require('conexion.php');
	$cedula=$_POST['cedula'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$cargo=$_POST['cargo'];
	
if(($cedula==0)||($nombre=="")||($apellido=="")||($cargo=="")){
$sq=0;
}else{
	$sql= "insert into encargados (cedula,nombre,apellido,cargo) values ('$cedula','$nombre','$apellido','$cargo')";
	
	$sq=mysql_query($sql);
}
	if ($sq==1){ $res=1;
	}else {$res=2; 
}
header("Location: registroencargado.php?res=$res" );
?>