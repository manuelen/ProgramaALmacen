<?php 
$servidor="localhost";
$login="root";
$clave="123456";
$base="csf";
$conecta= mysql_connect($servidor,$login,$clave) or die("No Se Puede Conectar");
if (!isset($conecta)){
	die ('Fallo la conexion con el servidor MySql'.mysql_error());
}else{
	$dbselecciona=mysql_select_db("$base",$conecta)  or die("No Hay Base de Datos Seleccionada.");

if(!isset($dbselecciona)){
		die('Fallo la conexion con el servidor Mysql'.mysql_error());}

}

class DB{  
    var $conect;  
    var $BaseDatos;  
    var $Servidor;  
    var $Usuario;  
    var $Clave;  
    function DB(){  
        $this->BaseDatos = "csf";  
        $this->Servidor = "localhost";  
        $this->Usuario = "root";  
        $this->Clave = "123456";  
    }  
  
     function conectar() {  
        if(!($con=@mysql_connect($this->Servidor,$this->Usuario,$this->Clave))){  
            echo"<h1>Error al conectar a la base de datos</h1>";  
            exit();  
        }  
        if (!@mysql_select_db($this->BaseDatos,$con)){  
            echo "<h1>Error al seleccionar la base de datos</h1>";  
            exit();  
        }  
        $this->conect=$con;  
        return true;  
    }  
} 

?>