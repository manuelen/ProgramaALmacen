<?php
require('conexion.php');

	$nombre=$_POST['nombre'];
	$dependencia=$_POST['dependencia'];
	$encargado=$_POST['cedula'];
	$encargado2=$_POST['cedula2'];
	if (($nombre=="")||($dependencia=="")||($encargado=="")){
		$sq=0;
	}else{
	
	$sql= "insert into laboratorios (nombre,dependencia,encargado,encargado2)
VALUES ('$nombre','$dependencia','$encargado','$encargado2')";
	
	$sq=mysql_query($sql);
	}
	if ($sq==1){ $res=1;
	}else{ $res=2;
    }
header("Location: registrolaboratorio.php?res=$res" );
?>