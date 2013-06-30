<?php 
$pin = `/xampp/mysql/bin/mysqldump -u root -p123456 csf > C:/xampp/htdocs/Dropbox/ProgramaLeo/programaUltimoO-27-03/basededatos/backup.sql`;
$enlace="C:/xampp/htdocs/Dropbox/ProgramaLeo/programaUltimoO-27-03/basededatos/backup.sql";
header ("Content-Disposition: attachment; filename=Backup.sql");
header ("Content-Type: application/force-download");
header ("Content-Length: ".filesize($enlace));
readfile($enlace);
//header("Location:backup.php");?>