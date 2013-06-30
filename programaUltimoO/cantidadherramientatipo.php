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

			<?php 
				require('conexion.php');
				$laboratorio=$_REQUEST['nombre'];
						$resultado=mysql_query("select * from tipos");
						if(!$resultado)
						{
							echo 'No se pudo ejecutar la consulta';
						}
						else
						{		
						


		
		
												?>		
                                           
                                          <br>
                                          <br>
                                              													
							<table align="center" border="2" style="border-style:groove" cellpadding="0" cellspacing="0" width="400">
                              <tr>
			<th colspan="7"  style=" background-image:url(imagenes/Sin_titulo.png);" ><font color="#FFFFFF" size="+1"> CANTIDAD DE HERRAMIENTAS POR TIPO</font></th>
			</tr> 
                            								<tr>
		<th style=" background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">TIPO</font></th>
        		<th style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">CANTIDAD DE HERRAMIENTAS</font></th>
	</tr>
							<?php $fila=mysql_fetch_array($resultado);
						for($i=0;$i<$fila;$i++) 
		{                       
		$cantidad=mysql_query("select count(tipo) from equipos where tipo='$fila[tipo]' and ubicacion='$laboratorio'");
		$cant=mysql_fetch_array($cantidad);
		echo" <tr >";
			echo "<th align='center' width='110'>";
			echo "$fila[tipo]";
			echo "</th>";
			echo "<th width='100' align='center'>";
			echo "$cant[0]";
			echo "</th>"; $fila=mysql_fetch_array($resultado);}	?>
							</tr>
                            
							</table>
										
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
