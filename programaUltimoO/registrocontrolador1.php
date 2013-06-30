<?php
require('conexion.php');

	if (isset($_POST['ip'])){
		$ip=$_POST['ip'];
	}else{
	$ip1=$_POST['ip1'];
	$ip2=$_POST['ip2'];
	$ip3=$_POST['ip3'];
	$ip4=$_POST['ip4'];
	$ip=$ip1.".".$ip2.".".$ip3.".".$ip4;
	}
	$pc=$_POST['pc'];
	$encargado=$_POST['encargado'];
	$ubicacion=$_POST['ubicacion'];
	$sql= "insert into controladores (ip,nombrepc,encargado,ubicacion) values ('$ip','$pc','$encargado','$ubicacion')";
	$sq=mysql_query($sql);
	
	if ($sq==1){ $res=1;
	}else{ $res=2;}
	header("Location:registrocontrolador.php?res=$res" );
	?>