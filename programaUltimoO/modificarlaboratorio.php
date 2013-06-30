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
<script type="text/javascript" src="index.js"></script>

</head>

<body onLoad="asignaVariables();" >



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

<form name="herramienta" method="post" action="modificarlaboratorio.php">
<table align="center" width="300">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">BÚSQUEDA DE LABORATORIO</font></th>
	</tr>
	<tr>
		<td ><font>Nombre: </font></td>
		<td><input name="nombre" type="text" size="22" maxlength="20"></td>
	</tr>
        
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Buscar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
</form>

			<?php 
				require('conexion.php');
				if (!isset($_REQUEST['nombre'])){
					}else{
						$laboratorio=$_REQUEST['nombre'];
						$resultado=mysql_query("select * from laboratorios where nombre= '$laboratorio'");
						if(!$resultado)
						{ ?>
					<script>
					alert("No se pudo Ejecutar Consulta");
					</script>
						<?php
						}
						else
						{
											$fila=mysql_fetch_array($resultado);
										if (!$fila)
			{?>
		<script>
		alert("Datos No Existentes");
		</script>
			<?php
			}
			else
			{?>
            <br>
            <form name="registrolaboratorio" method="POST" action="modificarlaboratorio1.php">
				<table align="center" border="1">
                	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">MODIFICAR LABORATORIO</font></th>
	</tr>
    
    <tr>
		<td ><font>Nombre: </font></td>
		<td><input name="nombre" type="text"  size="20" maxlength="20" value="<?php echo $fila['nombre']; ?>"></td>
	</tr>
	<tr>
		<td><font>Dependencia: </font></td>
		<td><input  type="text" name="dependencia" maxlength="50" size="20" value="<?php echo $fila['dependencia']; ?>"></td>
	</tr>
           </td>
				</tr>
	<tr valign="top">
			<td ><font>Personal Encargado: </font></td>
            <td><select name="encargado">
			<option selected><?php echo $fila['encargado'];?></option>
			<?php
		$encargado=mysql_query("select * from encargados order by nombre");
		$option=mysql_fetch_array($encargado);
				
		for($i=0;$i<$option;$i++) 
		{

		echo "<option>";
		echo $option['nombre'];
		echo"</option>";
		echo $option['nombre'];
		$option=mysql_fetch_array($encargado);
		}
				
        ?>
        </select>
        </td>
        </tr>
        	<tr valign="top">
			<td ><font>Otro Personal: </font></td>
            <td><select name="encargado2">
			<option selected value="vacio">---Personal--- </option>
			<?php
		$encargado=mysql_query("select * from encargados order by nombre");
		$option=mysql_fetch_array($encargado);
				
		for($i=0;$i<$option;$i++) 
		{

		echo "<option>";
		echo $option['nombre'];
		echo"</option>";
		$option=mysql_fetch_array($encargado);
		}
				
        ?>
        </select>
        </td>
        </tr>
                     
                	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Modificar"  onClick="valida_envia2()"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
                
			</table>
            					<?php
						}
						}
					}
				
			?>	
            </form>
            <br>
            
            
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
