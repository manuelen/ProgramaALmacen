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
</br>
<div id="fondo2">

<table align="center" width="600" border="1">
	<tr>
	<th colspan="4"  style=" background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">CONTÁCTENOS</font></th>
	</tr>
  				<tr valign="top">
					<td width="100" align="center" style="background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Nombre</font>
          </td>
					<td width="100" align="center" style="background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Apellido</font>
                  </td>
<td width="100" align="center" style="background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Teléfono</font>
                  </td>
					
<td width="100" align="center" style="background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Correo</font>
                  </td>
				
				</tr> 
				
        
	<tr>
				<td align="center">Manuel José</td>
				<td align="center">Sotomayor</td>
				<td align="center">0414-0539599</td>
				<td align="center">manuelenchon@hotmail.com</td>
	</tr>
	<tr>
				<td align="center">Leonardo</td>
				<td align="center">Mendoza</td>
				<td align="center">0426-2365140</td>
				<td align="center">leonardomendoza_98@hotmail.com</td>
	</tr>
	<tr>
				<td align="center">Joselin</td>
				<td align="center">Bergara</td>
				<td align="center">0412-4404089</td>
				<td align="center">joselinber@hotmail.com</td>
	</tr>
	<tr>
				<td align="center">Juan José</td>
				<td align="center">Rodriguez</td>
				<td align="center">0424-3504335</td>
				<td align="center">elgranjuan138@hotmail.com</td>
	</tr>
	<tr>
				<td align="center">Liz Gabriela</td>
				<td align="center">Sojo</td>
				<td align="center">0412-6777849</td>
				<td align="center">lizgabriela230@hotmail.com</td>
	</tr>
</table> 
</div>
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
