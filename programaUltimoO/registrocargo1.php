<?php
require('conexion.php');

	$cargo=$_POST['cargo'];


	$sql= "insert into cargos (cargo) values ('$cargo')";
	$sq=mysql_query($sql);
	
	if ($sq==1) $res=1;
	else $res=2;
	
	header("Location: registrocargo.php?res=$res" );

?>