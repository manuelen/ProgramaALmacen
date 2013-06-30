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
    </form>
            <br>
            
            <form name="encargado" method="post" action="modificarencargado.php">
<table align="center" width="300">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">BÚSQUEDA DE PERSONAL</font></th>
	</tr>
	<tr>
		<td ><font>Cédula: </font></td>
		<td><input name="cedula" type="text" size="22" maxlength="8"></td>
	</tr>
        
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Buscar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
</form>


			<?php 
				require('conexion.php');
				if (!isset($_REQUEST['cedula'])){
					}else{
						$cedula=$_REQUEST['cedula'];
						$resultado=mysql_query("select * from encargados where cedula= $cedula");
						if(!$resultado)
						{?>
						<script>
						alert("No se Puedo Ejecutar Consulta");
						</script>
						<?php
						}
						else
						{
											$fila=mysql_fetch_array($resultado);
										if (!$fila)
			{ ?>
						<script>
						alert("Datos No Existentes");
						</script>
			<?php
			}
			else
			{?>
            <br>
            <form name="registroencargado" method="POST" action="modificarencargado1.php">
				<table align="center" border="2">
                	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">MODIFICAR PERSONAL</font></th>
	</tr>
				<tr valign="top">
					<td >
						<font >Cédula:&nbsp;</font></td>
					<td>
					<input name="cedula" readonly value="<?php echo $fila['cedula']; ?>">
					</td>
				</tr> 
				<tr valign="top">
					<td >
						<font >Nombre:&nbsp;</font></td>
					<td>
					<input type="text" name="nombre" size="15" maxlength="30" value="<?php echo $fila['nombre']; ?>">
                    </td>
				</tr> 
				<tr valign="top">
				<td >
						<font >Apellido:&nbsp;</font></td>
					<td>
					<input name="apellido" type="text" size="15" maxlength="30" value="<?php echo $fila['apellido']; ?>">
                    </td>
				</tr>
                
                    <tr>
		<td><font>Cargo: </font></td>
		<td><select name="cargo">

  		<option selected><?php echo $fila['cargo']; ?></option>

		<?php

		$cargo=mysql_query("select * from cargos order by codigocargo");
		$opcion=mysql_fetch_array($cargo);
				
		for($i=0;$i<$opcion;$i++) 
		{

		echo "<option>";
		echo $opcion['cargo'];
		echo"</option>";
		$opcion=mysql_fetch_array($cargo);
		}
	

        ?>

	</select><br>
	<input type=button value="Ingresar otro Cargo" onClick="window.open('registrocargo.php','miventana','width=300,height=200,menubar=no'); "></td>
        
	</tr>  
                	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Modificar"  onClick="valida_envia4()"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
                
			</table>
            </form>
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
