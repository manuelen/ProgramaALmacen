<?php
include ('funciones.php');
//usuario y clave pasados por el formulario
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
//usa la funcion conexiones() que se ubica dentro de funciones.php
if (conexiones($usuario, $clave)){
	mysql_query("INSERT INTO `csf`.`auditorias` (`usuario`, `accion`, `fecha`, `hora`) VALUES ('$_SESSION[nombre]', 'Inicio de Sesion', '".DATE('y/m/d')."', '".DATE('g:i:s a')."')");
	//si es valido accedemos a ingreso.php
	header('Location:administrador.php');
} else {?>
	
	<script>
        alert("Usuario o clave incorrecta");
		this.location.href='ingresousuario.html';
		</script>
<?php
}
?>
