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
<script type="text/javascript" src="js/ddaccordion.js"></script>
<script type="text/javascript" src="js/java.js"></script>
<!-- para menú vertical desplegable "FIN" -->
<SCRIPT src="js/top.js" type=text/javascript></SCRIPT>
<script type="text/javascript" src="js/hora.js"></script>
<script type="text/javascript" src="js/validacion.js"></script>
<script type="text/javascript" src="js/popcalendar.js"></script>
</head>

<body>



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

<form name="recuperar" method="post" action="recuperarcontrasena.php">
<table align="center" width="300">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">RECUPERACIÓN DE DATOS</font></th>
	</tr>
	<tr>
		<td ><font>Ingrese su Nr.Cédula: </font></td>
		<td><input name="cedula" type="text" size="22" maxlength="8"></td>
	</tr>
        
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Enviar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
</form>

			<?php 
				require('conexion.php');
				
				$img_eli='<img src="imagenes/plus.gif" border="0" align="absmiddle" width="18" height="18" title="Eliminar" />';
				$img_modi='<img src="imagenes/minus.gif" border="0" align="absmiddle" width="18" height="18" title="Actualizar" />';
		
						if (!isset($_POST['cedula'])){
							}else{
						$cedula=$_POST['cedula'];
						
								$cedula=$_POST['cedula'];
						$resultado=mysql_query("select * from usuarios where cedula= $cedula");
						if(!$resultado)
						{?>
                        <script>
						alert("Por Favor, Ingrese la Cedula");
						this.location.href='recuperarcontrasena.php';
						</script>
						<?php
                        }
						else
						{
											$fila=mysql_fetch_array($resultado);
							if (!$fila)
								{?>
								 <script>
								alert("Cedula no Existente");
								this.location.href='recuperarcontrasena.php';
								</script>
									<?php
                                    }
								else
						{		echo "<br>";
							echo "<br>";
							echo "<div align='center'>";
										
							echo "<table align='center' border='2' style='border-style:groove' cellpadding='0' cellspacing='0'>";
							echo "<tr bgcolor='#CCCCCC'>";
							echo 	"<th align='center' width='80'  style='background-image:url(imagenes/Sin_titulo.png);'><font color='#FFFFFF' size='+1'>Cédula</font></th>";
							echo 	"<th align='center' width='100'  style='background-image:url(imagenes/Sin_titulo.png);'><font color='#FFFFFF' size='+1'>Usuario</font></th>";
							echo 	"<th align='center' width='100'  style='background-image:url(imagenes/Sin_titulo.png);'><font color='#FFFFFF' size='+1'>Contrasena</font></th>";
					
							echo "</tr>";
							
							//$pintafila=1;

							for($i=0;$i<$fila;$i++) 
							{
							echo "<tr>";
							echo 	"<td align='right'>";
									echo $fila['cedula'];		echo "\n";
							echo 	"</td>";			
							echo 	"<td align='left'>";
									echo $fila['nombreusuario'];		echo "\n";
							echo 	"</td>";			
							echo 	"<td align='left'>";
									echo $fila['codigo'];		echo "\n";
							echo 	"</td>";			
							
				//para mostrar las acciones: eliminar y actualizar
							
							echo "</tr>"; $fila=mysql_fetch_array($resultado);
							}
							echo "</table>";
							echo "</div>";
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