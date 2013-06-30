<?php 
$importar=$_FILES['importar'];
$importar1=$importar['tmp_name'];
$pin = `/xampp/mysql/bin/mysql --user=root -p123456 csf < $importar1`;
if ($importar1==''){
	header("Location: backup_rest.php?resul=Error al Importar");
	}else{
header("Location: backup_rest.php?resul=Importación Exitosa");
}
?>