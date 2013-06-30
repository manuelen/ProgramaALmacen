<?php
require('conexion.php');

	$curso=$_POST['curso'];


	$sql= "insert into cursos (curso) values ('$curso')";
	$sq=mysql_query($sql);
	
	if ($sq==1) $res=1;
	else $res=2;
	
	header("Location: registrocurso.php?res=$res" );

?>