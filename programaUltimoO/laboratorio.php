﻿<span id="usuario" style="position:absolute;right:0;top:0; width:300px;">
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

<form name="laboratorio" method="post" action="laboratorio.php">
<table align="center" width="300">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">CONSULTAR LABORATORIO</font></th>
	</tr>
	<tr>
		<td ><font>Nombre: </font></td>
		<!--<td><input name="nombre" type="text" size="22" maxlength="20"></td>!-->
		<td><select name="nombre">

		<?php
        require('conexion.php');
		$Tipo=mysql_query("select * from laboratorios order by nombre");
		$opcion=mysql_fetch_array($Tipo);
				
		for($i=0;$i<$opcion;$i++) 
		{

		echo "<option>";
		echo $opcion['nombre'];
		echo"</option>";
		$opcion=mysql_fetch_array($Tipo);
		}
	

        ?>

	</select></td>
	</tr>
        
	<tr>
		<td colspan="2" align="center"><input type="submit" name="consultar" value="Consultar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
</form>

			<?php 
				/*if($_GET['res']==1)  echo "Registro Exitoso";
				else if($_GET['res']==2)  echo "Ocurrio un Error al Registrar";*/
				$img_eli='<img src="imagenes/eliminar.png" border="0" align="absmiddle" width="30" height="30" title="Eliminar" />';
				$img_modi='<img src="imagenes/modificar.png" border="0" align="absmiddle" width="30" height="30" title="Modificar" />';
				 if (!isset($_REQUEST['nombre'])){
					 }else{
						$nombre=$_REQUEST['nombre'];
						$resultado=mysql_query("select * from laboratorios where nombre='$nombre'");
						if(!$resultado)
						{
							echo 'No se pudo ejecutar la consulta';
						}
						else
						{
											$fila=mysql_fetch_array($resultado);
										if (!$fila)
			{
			?>
							<script>
		             alert("Debe Seleccionar un Laboratorio");
		             this.location.href='laboratorio.php';
		             </script>
						<?php
			}
			else
			{?>
            <br>
				<table align="center">
                	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">DATOS DEL LABORATORIO</font></th>
	</tr>
				<tr valign="top">
					<td >
						<font>Nombre:&nbsp;</font></td>
					<td>
					<?php echo $fila['nombre']; ?>
					</td>
				</tr> 
				<tr valign="top">
					<td >
						<font >Dependencia:&nbsp;</font></td>
					<td>
					<?php echo $fila['dependencia']; ?>
                    </td>
				</tr> 
                				<tr valign="top">
					<td >
						<font >Personal Encargado:&nbsp;</font></td>
					<td>
					<?php echo $fila['encargado']; ?>
                    </td>
				</tr> 
				
				<tr valign="top">
				<?php
											if ($_SESSION['cargo']=='Administrador'){?>
				<td >
					<font>Acciones:</font>
                         </td>
					<td>
                  
                    		<?php
							echo 	"<a href='modificarlaboratorio.php?nombre=".$fila['nombre']."' >";
							echo	$img_modi;		
							echo	"</a>";
						 ?> &nbsp;&nbsp;
                    
					<?php 	echo	"<a href='eliminarlaboratorio.php?nombre=".$fila['nombre']."' >";
							echo	$img_eli;		
							echo	"</a>\n";
											}?>
                    

                    </td>
				</tr>
                
                
                
			</table>
                
                	
			<?php	
						}
						}
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
