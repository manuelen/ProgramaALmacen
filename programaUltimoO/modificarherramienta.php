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
<form name="herramienta" method="post" action="modificarherramienta.php">
<table align="center" width="300">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">BÚSQUEDA DE EQUIPO</font></th>
	</tr>
	<tr>
		<td ><font>Código: </font></td>
		<td><input type="text" name="codigoequipo" id="input_2" class="input"
					onfocus="if(document.getElementById('lista').childNodes[0]!=null && this.value!='') {
                     filtraLista(this.value);
                     formateaLista(this.value); 
					 reiniciaSeleccion();
                     document.getElementById('lista').style.display='block';
                      }" 
					onblur="if(v==1) document.getElementById('lista').style.display='none';" 
					onkeyup="if(navegaTeclado(event)==1) {
						clearTimeout(ultimoIdentificador); 
						ultimoIdentificador=setTimeout('rellenaLista()', 1000); }">
					<div id="lista" onMouseOut="v=1;" onMouseOver="v=0;"></div></td>
	</tr>
        
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Buscar" />&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
    <tr> 
		<td colspan="2" align="center"><input type="button" value="Búsqueda Avanzada" onClick="location.href='busqueda_avanzada1.php';"></td>
	</tr>
</table>
</form>


			<?php 
				require('conexion.php');
				$img_eli='<img src="imagenes/iconoeliminar.jpg" border="0" align="absmiddle" width="30" height="30" title="Eliminar" />';
				$img_modi='<img src="imagenes/iconomodifica.jpg" border="0" align="absmiddle" width="30" height="30" title="Modificar" />';
				if (!isset($_REQUEST['codigoequipo'])){
				}else{
						$codigo=$_REQUEST['codigoequipo'];
						$resultado=mysql_query("select * from equipos where codigoequipo= '$codigo'");
						if(!$resultado)
						{?>
						 <script>
		                 alert("Debe Ingresar Un Codigo");
		                 this.location.href='modificarherramienta.php';
		                 </script>
						<?php
						}
						else
						{
											$fila=mysql_fetch_array($resultado);
										if (!$fila)
			{?>
         <script>
		alert("Codigo NO Existente");
		this.location.href='modificarherramienta.php';
		</script>
			<?php
			}
			else
			{?>
            <br>
            <form name="nuevaherramienta" method="POST" action="modificarherramienta1.php">
				<table align="center" border="2">
                	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">MODIFICAR EQUIPO</font></th>
	</tr>
				<tr valign="top">
					<td >
						<font >Código:&nbsp;</font></td>
					<td>
					<input name="codigoequipo" readonly value="<?php echo $fila['codigoequipo']; ?>">
					</td>
				</tr> 
				<tr valign="top">
					<td >
						<font >Nombre:&nbsp;</font></td>
					<td>
					<input type="text" name="nombreequipo" size="15" maxlength="30" value="<?php echo $fila['nombre']; ?>">
                    </td>
				</tr> 
				<tr valign="top">
					<td >
						<font >Tipo:&nbsp;</font></td>
					<td>
					<select name="tipo">

  		<option selected value="<?php echo $fila['tipo']; ?>"><?php echo $fila['tipo']; ?></option>

		<?php
		$Tipo=mysql_query("select * from tipos order by codigotipo");
		$opcion=mysql_fetch_array($Tipo);
				
		for($i=0;$i<$opcion;$i++) 
		{

		echo "<option>";
		echo $opcion['tipo'];
		echo"</option>";
		$opcion=mysql_fetch_array($Tipo);
		}
	

        ?>

	</select>
	<br>
    <input type=button value="Ingresar otro tipo" name="añadir" onClick="window.open('registrotipo.php','miventana','width=300,height=200,menubar=no'); ">
                    </td>
				</tr>
				<tr valign="top"><br>
				<td >
						<font >Marca:&nbsp;</font></td>
					<td>
					<select name="marca">
        <option value="<?php echo $fila['marca']; ?>"><?php echo $fila['marca']; ?></option>
			<?php

		$marca=mysql_query("select * from marcas order by codigomarca");
		$opcion=mysql_fetch_array($marca);
				
		for($i=0;$i<$opcion;$i++) 
		{

		echo "<option>";
		echo $opcion['marca'];
		echo "</option>";
		$opcion=mysql_fetch_array($marca);
		}
	    ?>
        </select>
          <br>
   		 <input type=button value="Ingresar otra Marca" onClick="window.open('registromarca.php','miventana','width=300,height=200,menubar=no'); ">
         </td>
				</tr>
                				
           <tr valign="top">
					<td >
						<font >Serial:&nbsp;</font></td>
					<td>
					<input type="text" name="serial" size="15" maxlength="30" value="<?php echo $fila['serial']; ?>">
                    </td>
				</tr> 
				<tr valign="top"><br>
				<td >
						<font>Descripción:&nbsp;</font></td>
					<td><textarea rows="3" name="descripcion"><?php echo $fila['descripcion']; ?></textarea></td>
				</tr>
                				<tr valign="top">
					<td >
						<font >Cantidad:&nbsp;</font></td>
					<td>
					<input type="text" name="cantidad" size="15" maxlength="30" value="<?php echo $fila['cantidad']; ?>">
                    </td>
				</tr> 
				<tr valign="top">
				<td >
						<font >Estado:&nbsp;</font></td>
					<td>
					<select name="estado">

  		<option selected value="<?php echo $fila['estado']; ?>"><?php echo $fila['estado']; ?></option>

		 <?php

		$estado=mysql_query("select * from estados order by codigoestado");
		$opcion=mysql_fetch_array($estado);
				
		for($i=0;$i<$opcion;$i++) 
		{

		echo "<option>";
		echo $opcion['estado'];
		echo "</option>";
		$opcion=mysql_fetch_array($estado);
		}
	    ?>

	</select><br>
	<input type=button value="Ingresar otro Estado" onClick="window.open('registroestado.php','miventana','width=300,height=200,menubar=no'); ">
                    </td>
				</tr>
                
                	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Modificar"  onclick="valida_envia()"/>&nbsp;&nbsp;&nbsp;&nbsp;
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
