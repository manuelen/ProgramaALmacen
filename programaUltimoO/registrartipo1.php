<?php
require('conexion.php');

	$tipo=$_POST['tipo'];


	$sql= "insert into tipos (tipo) values ('$tipo')";
	$sq=mysql_query($sql);
	
	if ($sq==1) $res=1;
	else $res=2;
	
	header("Location: registrotipo.php?res=$res" );

?>