<?php
require('conexion.php');

	$estado=$_POST['estado'];


	$sql= "insert into estados (estado) values ('$estado')";
	$sq=mysql_query($sql);
	
	if ($sq==1) $res=1;
	else $res=2;
	
	header("Location: registroestado.php?res=$res" );

?>