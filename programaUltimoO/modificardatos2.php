<span id="usuario" style="position:absolute;right:0;top:0; width:300px;">
<?php

include('funciones.php');
//uso de la funcion verificar_usuario()
if (verificar_usuario()){
error_reporting(0); 
	//si el usuario es verificado puede acceder al contenido permitido a el
	print "<div class='usuario'> <a class='menuitem submenuheader' href='central.php' style='text-align:left'>Hola $_SESSION[nombre] $_SESSION[apellido]</a>
		<div class='submenu'>
				<ul>
					<li><a href='modificardatos.php?cedula=".$_SESSION['cedula']."' target='mainFrame' style='text-align:left; font-size:12;'>&nbsp;&nbsp;-´Modificar</a></li>
					<li><a href='salir.php' target='mainFrame' style='text-align:left; font-size:12;'>&nbsp;&nbsp;-Desconectarse</a></li>
				</ul>
			</div>
			</div>";

} else {
	//si el usuario no es verificado volvera al formulario de ingreso
	header('Location:ingresousuario.html');
}
?> </span>
<!-- COMIENZA A COPIAR AQUI EN TODAS LAS PAGINAS... ABAJO TE APARECERA DONDE TERMINA-->
<html>
<head>
<title>Inventario-CFS Metalminero</title>
<link rel="StyleSheet" href="miestilo.css" type="text/css">
<link rel="stylesheet" href="css/azul.css" type="text/css"/>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/ddaccordion.js">
/***********************************************
* Accordion Content script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/
</script>
<script type="text/javascript" src="js/java.js"></script>
<!-- para menú vertical desplegable "FIN" -->
<SCRIPT src="js/top.js" type=text/javascript></SCRIPT>
<script type="text/javascript" src="js/hora.js"></script>
<script type="text/javascript" src="js/validacion.js"></script>
<script type="text/javascript" src="js/popcalendar.js"></script>
</head>

<body >



<div id="contenedor">
<div id="top">
  <div id="envoltura">
  <div id="cabecera">
	<div id="sj">
       	  <p class="color_ye" align="center">
          <span id="liveclock" style="position:absolute;left:0;top:0; width:100px;">
</span>

		 <script language="javascript"><!--
new show5('Verdana','2','CDBF1E',' ',' ','','110','0','1','0','0','+1');
//--></script></p>
<!--/sj-->
</div>
<!--/cabecera-->  
</div>
<!--/envoltura-->
</div>
<div id="envoltura">
<div id="principal">
<div id="cabeceras"></div>
<div id="linea">
<?php 
require('barra.php');
?>
		</div>
        
       
<div id="columna1" >
	
<?php 
require('menu.php');
?>

<div id="columna2" align="center">

<br/>

<?php
require('conexion.php');

				$img_modi='<img src="imagenes/iconomodifica.jpg" border="0" align="absmiddle" width="30" height="30" title="Modificar" />';

	$cedula=$_POST['cedula'];
	$telefono=$_POST['telefono'];
	$cargo=$_POST['cargo'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$nombreusuario=$_POST['nombreusuario'];
	$contrasena=$_POST['codigo'];
	$pregunta=$_POST['pregunta'];
	$respuesta=$_POST['respuesta'];
	if (($telefono=="")||($nombre=="")||($apellido=="")||($nombreusuario=="")||($contrasena=="")||($pregunta=="")||($respuesta=="")){
		$sq=0;
	}else{
	$sql="update usuarios set telefono='$telefono',nombre='$nombre',apellido='$apellido',nombreusuario='$nombreusuario',codigo=md5('$contrasena'),pregunta='$pregunta',respuesta='$respuesta' where cedula='$cedula'";
	
	$sq=mysql_query($sql);
	

						$resultado=mysql_query("select * from usuarios where cedula= $cedula");
						if(!$resultado)
						{
							echo 'No se pudo ejecutar la consulta';
						}
						else
						{
											$fila=mysql_fetch_array($resultado);
										if (!$fila)
			{
				echo "Datos No Existentes";
			}
			else
			{?>
            <br>
            <br>
				<table align="center">
                <tr>
			<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">DATOS DE MODIFICACIÓN</font></th>
			</tr> 
				<tr valign="top">
					<td >
						<font >Cédula:&nbsp;</font></td>
					<td>
					<?php echo $fila['cedula']; ?>
					</td>
				</tr> 
				<tr valign="top">
					<td >
						<font >Teléfono:&nbsp;</font></td>
					<td>
					<?php echo $fila['telefono']; ?>
                    </td>
				</tr> 
				<tr valign="top">
					<td >
						<font>Cargo:&nbsp;</font></td>
					<td>
					<?php echo $fila['cargo']; ?>
                    </td>
				</tr>
				<tr valign="top">
				<td >
						<font >Nombre:&nbsp;</font></td>
					<td>
					<?php echo $fila['nombre']; ?>
                    </td>
				</tr>
				<tr valign="top">
				<td >
						<font>Apellido:&nbsp;</font></td>
					<td><?php echo $fila['apellido']; ?></td>
				</tr>
				<tr valign="top">
				<td >
						<font >Usuario:&nbsp;</font></td>
					<td>
					<?php echo $fila['nombreusuario']; ?>
                    </td>
				</tr>
                <tr valign="top">
				<td >
						<font >Contraseña:&nbsp;</font></td>
					<td>
					
                    </td>
				</tr>
                  <tr valign="top">
				<td >
						<font >Pregunta Secreta:&nbsp;</font></td>
					<td>
					<?php echo $fila['pregunta']; ?>
                    </td>
				</tr>
                  <tr valign="top">
				<td >
						<font >Respuesta Secreta:&nbsp;</font></td>
					<td>
					<?php echo $fila['respuesta']; ?>
                    </td>
				</tr>

				<tr valign="top">
				<td >
                <font>Acciones: &nbsp;</font>
                         </td>
					<td>
					<?php if($_SESSION['cargo']=="Administrador"){	echo	"<a href='eliminarusuario.php?cedula=".$fila['cedula']."' >";
							echo	$img_eli;		
							echo	"</a>\n"; }?>
                            &nbsp;&nbsp;
                            
                            						<?php
							echo 	"<a href='modificardatos.php?cedula=".$fila['cedula']."' >";
							echo	$img_modi;		
							echo	"</a>";
						 ?> 
                    </td>
				</tr>
                
                
                
			</table>
                
                	
			<?php	
			}

						}			
						}if ($sq==1){
						mysql_query("
		INSERT INTO `csf`.`auditorias` (`usuario`, `accion`, `fecha`, `hora`) VALUES ('$_SESSION[nombre]', 'Modificar Datos de Usuario', '".DATE('y/m/d')."', '".DATE('g:i:s a')."')");	
						?>
                         <script>
						alert("Modificacion Exitosa");
						</script>	
                        <?php }else{?>
                        <script>
						alert("Error al Modificar");	
						this.location.href='modificardatos.php';
						</script>
						<?php
                        }
				
			?>	
							




</div>



</div><div id="pie" align="center">
Copyright © 2013 Derechos Reservados - Diseñado por: Rodriguez Juan, Tapias Juan, Mendoza Leonardo.
</div>
</div>
<div id="top2"></div>
</div>
</div>

</body>
</html>
