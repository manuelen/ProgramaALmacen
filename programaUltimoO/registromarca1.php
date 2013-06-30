<?php
require('conexion.php');

	$marca=$_POST['marca'];


	$sql= "insert into marcas (marca) values ('$marca')";
	$sq=mysql_query($sql);
	
	if ($sq==1) $res=1;
	else $res=2;
	
	header("Location: registromarca.php?res=$res" );

?>