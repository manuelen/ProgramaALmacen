<?php
require('conexion.php');

	$correo=$_REQUEST['correo'];
	
	$sql= "select * from usuarios where correo='$correo'";
	$sq=mysql_query($sql);

	$emails=mysql_fetch_array($sq);
	if ($emails==true){ 

	$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	$clave = "";
	for($i=0;$i<12;$i++) {
	$clave .= substr($str,rand(0,62),1);
	}
		$sql="UPDATE  `csf`.`usuarios` SET `codigo` = MD5('$clave') WHERE  `usuarios`.`correo` ='$correo'";
		$sq=mysql_query($sql);
								$sheader="";
								$sheader=$sheader."X-Mailer:PHP/".phpversion()."\n";
								$sheader=$sheader."Mime-Version: 1.0\n";
								$sheader=$sheader."Content-Type: text/html";
	mail($correo,"Recuperar Contraseña Sr/a ".$emails['nombre'],"Sr/a ".$emails['nombre']." ".$emails['apellido']." Su usuario es: ".$emails['nombreusuario']." \n Contraseña: ".$clave."\n Si Desea Modificar su Contraseña Acceda a este link:\n <a href='localhost/dropbox/ProgramaLeo/programaUltimoO-27-03/modificar_contrasena.php?contrasena=".$clave."'>haz click aqui</a>\n el dia ".strftime("%A %d de %B del %Y")." a las ".date("g:i:s a"),$sheader); 
	$response = "Email Enviado Exitosamente";
    echo json_encode($response);

	mysql_query("INSERT INTO `csf`.`auditorias` (`usuario`, `actividad`, `fecha`, `hora`) VALUES ('$emails[nombreusuario]', 'Recupracion de Clave', '".date('y/m/d')."', '".DATE('g:i:s a')."');");
	
	}else{
	  $response = "Email no Registrado";
    echo json_encode($response);

	}
	?>
	