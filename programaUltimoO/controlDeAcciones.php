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
					<li><a href='modificardatos.php?cedula=".$_SESSION['cedula']."' target='mainFrame' style='text-align:left; font-size:12;'>&nbsp;&nbsp;-Modificar</a></li>
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
<script type="text/javascript" src="js/actualizacion.js"></script>
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
<script>
		$('#procesadas1').live('click',function(){
			 $('#procesadas').toggle();
			 $('procesadas').css('display','inline-table');
			});
			$('#finalzadas1').live('click',function(){
			 $('#finalizadas').toggle();
			 $('#finalizadas').css('display','inline-table');
			});
			$('#caducadas1').live('click',function(){
			 $('#caducadas').toggle();
			 $('caducadas').css('display','inline-table');
			});
</script>
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
<!----COPIA HASTA AQUI LEO EN TODAS LAS PAGINAS---->
<div id="columna2" align="center">
<div id="Titulo" align="center"><marquee width="600px" height="30px" align="center"><h6>BIENVENIDOS AL CONTROL DE INVENTARIO DEL CFS METALMINERO DE LA VICTORIA</h6></marquee> </div>
<br><br>
<?php
require('conexion.php');
		$today=date("y-m-d");
		$mantenimiento=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo where mantenimientos.estado='Proceso' and fecharecuperacion>'$today'");
			$mantenimientos=mysql_fetch_array($mantenimiento);
		$traslado=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo where traslados.estado='Proceso' and fechaentrega>'$today'");
			$traslados=mysql_fetch_array($traslado);
			$cantidad=$mantenimientos['cantidad']+$traslados['cantidad'];
		?>
         <!-- ---------------------------------------------------ACCIONES PROCESADAS------------------------------------------------------- -->
				<table align="center" border="2" bordercolor="#000" cellspacing="1" cellpadding="1" width="750">
                <tr>
			<th colspan="7"  style=" background-image:url(imagenes/Sin_titulo.png);" ><font color="#FFFFFF" size="+1">Control de Acciones</font></th>
			</tr> 
             <tr>
			<th colspan="7"  style=" background-image:url(imagenes/Sin_titulo.png);" ><font color="#FFFFFF" size="+1">Acciones en Proceso <?php echo"($cantidad)";?></font> <input type="button"value="ver" id="procesadas1" /></th>
			</tr> 
			<table id='procesadas' style='display:none' border='1'>
				<tr valign="top"  >
					<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Código Equipo</font>
          </td>
					<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Nombre</font>
                  </td>
<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Encargado</font>
                  </td>

<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Descripción</font>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >fecha inicio</font>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >fecha Entrega</font>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Confirmar Acción</font>
                  </td>
				</tr> 
        <?php
		//----------------------------------------------------------------MANTENIMIENTO EN PROCESO------------------------------------------------
			$sql="SELECT equipos.codigoequipo as codigo, equipos.nombre as nombre,mantenimientos.nombre as encargado, mantenimientos.descripcion as descripcion, mantenimientos.fecha as fecha , mantenimientos.fecharecuperacion as fecha2 FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo where mantenimientos.estado='Proceso' and fecharecuperacion>'$today'";
			$resul=mysql_query($sql);
			$fila=mysql_fetch_array($resul);
			for($i=0;$i<$fila;$i++) 
			{
				echo "<tr valign='top' >";
					echo"<td>";
						echo $fila['codigo'];
                    echo "</td>";
                    echo"<td>";
						echo $fila['nombre']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['encargado'];
                    echo "</td>";
					echo"<td>";
						echo $fila['descripcion']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha2'];
                    echo "</td>";
					echo"<td>";
						echo "<input type='text' id='mantenimiento' size='10' /><input type='button' value='enviar' id='mantenimiento1' />";
                    echo "</td>";
				echo"</tr>";
					$fila=mysql_fetch_array($resul);
			}
			//--------------------------------------------------------TRASLADO EN PROCESO-----------------------------------------------------
			$sql="SELECT equipos.codigoequipo as codigo, equipos.nombre as nombre,traslados.nombre as encargado, traslados.ubicacion as descripcion, traslados.fecha as fecha , traslados.fechaentrega as fecha2 FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo where traslados.estado='Proceso' and fechaentrega>'$today'";
			$resul=mysql_query($sql);
			$fila=mysql_fetch_array($resul);
			for($i=0;$i<$fila;$i++) 
			{
				echo "<tr valign='top'>";
					echo"<td>";
						echo $fila['codigo'];
                    echo "</td>";
                    echo"<td>";
						echo $fila['nombre']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['encargado'];
                    echo "</td>";
					echo"<td>";
						echo "Equipo Trasladado a ".$fila['descripcion']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha2'];
                    echo "</td>";
					echo"<td>";
						echo "<input type='text' id='traslado' size='10' /><input type='button' value='enviar' id='traslado1' />";
                    echo "</td>";
				echo"</tr>";
					$fila=mysql_fetch_array($resul);
			}
					echo "";
			  ?></table>
              </table>
              <?php
			  		$mantenimiento=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo where mantenimientos.estado='Finalizadas' and fecharecuperacion>'$today'");
			$mantenimientos=mysql_fetch_array($mantenimiento);
		$traslado=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo where traslados.estado='Finalizadas' and fechaentrega>'$today'");
			$traslados=mysql_fetch_array($traslado);
			$cantidad=$mantenimientos['cantidad']+$traslados['cantidad'];
			   ?>
              <!-- --------------------------------------ACCIONES FINALIZADAS------------------------------------- -->
				<table align="center" border="2" bordercolor="#000" cellspacing="1" cellpadding="1" width="750">
             <tr>
			<th colspan="7"  style=" background-image:url(imagenes/Sin_titulo.png);" ><font color="#FFFFFF" size="+1">Acciones Finalizadas <?php echo"($cantidad)";?></font> <input type="button"value="ver" id="finalizadas1" /></th>
			</tr> 
            <table id='finaliza' style='display:none' border='1'>
				<tr valign="top" >
					<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Código Equipo</font>
          </td>
					<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Nombre</font>
                  </td>
<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Encargado</font>
                  </td>

<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Descripción</font>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >fecha inicio</font>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >fecha Entrega</font>
                  </td>
				</tr> 
        <?php
		//------------------------------------------------------MANTENIMIENTO FINALIZADO------------------------------------------
			$sql="SELECT equipos.codigoequipo as codigo, equipos.nombre as nombre,mantenimientos.nombre as encargado, mantenimientos.descripcion as descripcion, mantenimientos.fecha as fecha , mantenimientos.fecharecuperacion as fecha2 FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo where mantenimientos.estado='Finalizada'";
			$resul=mysql_query($sql);
			$fila=mysql_fetch_array($resul);
			for($i=0;$i<$fila;$i++) 
			{
				echo "<tr valign='top' >";
					echo"<td>";
						echo $fila['codigo'];
                    echo "</td>";
                    echo"<td>";
						echo $fila['nombre']; 
                    echo "</td>";
					
					echo"<td>";
						echo $fila['encargado'];
                    echo "</td>";
					echo"<td>";
						echo $fila['descripcion']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha2'];
                    echo "</td>";
				echo"</tr>";
					$fila=mysql_fetch_array($resul);
			}
			//-----------------------------------------------------------------TRASLADO FINALIZADO-------------------------------------------------
			$sql="SELECT equipos.codigoequipo as codigo, equipos.nombre as nombre,traslados.nombre as encargado, traslados.ubicacion as descripcion, traslados.fecha as fecha , traslados.fechaentrega as fecha2 FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo where traslados.estado='Finalizada'";
			$resul=mysql_query($sql);
			$fila=mysql_fetch_array($resul);
			for($i=0;$i<$fila;$i++) 
			{
				echo "<tr valign='top' >";
					echo"<td>";
						echo $fila['codigo'];
                    echo "</td>";
                    echo"<td>";
						echo $fila['nombre']; 
                    echo "</td>";
					
					echo"<td>";
						echo $fila['encargado'];
                    echo "</td>";
					echo"<td>";
						echo "Equipo Trasladado a ".$fila['descripcion']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha2'];
                    echo "</td>";
				echo"</tr>";
					$fila=mysql_fetch_array($resul);
			}
					
			  ?>
              </table>
              </table>
              <?php 
			  		$mantenimiento=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo where mantenimientos.estado='Proceso' and fecharecuperacion<'$today'");
			$mantenimientos=mysql_fetch_array($mantenimiento);
		$traslado=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo where traslados.estado='Proceso' and fechaentrega<'$today'");
			$traslados=mysql_fetch_array($traslado);
			$cantidad=$mantenimientos['cantidad']+$traslados['cantidad'];
			  ?>
                <!-- --------------------------------------ACCIONES CADUCADAS------------------------------------- -->
          <table align="center" border="2" bordercolor="#000" cellspacing="1" cellpadding="1" width="750">
             <tr>
			<th colspan="7"  style=" background-image:url(imagenes/Sin_titulo.png);" ><font color="#FFFFFF" size="+1">Acciones Caducadas <?php echo"($cantidad)";?> <input type="button"value="ver" id="caducadas1" /></font></th>
			</tr> 
            <table id='caducadas' style='display:none' border='1'>
				<tr valign="top">
					<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Código Equipo</font>
          </td>
					<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Nombre</font>
                  </td>
<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Encargado</font>
                  </td>

<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Descripción</font>
                  </td>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >fecha inicio</font>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >fecha Entrega</font>
                  </td>
				</tr> 
        <?php
		//------------------------------------------------------MANTENIMIENTO CADUCADO------------------------------------------
			$sql="SELECT equipos.codigoequipo as codigo, equipos.nombre as nombre,mantenimientos.nombre as encargado, mantenimientos.descripcion as descripcion, mantenimientos.fecha as fecha , mantenimientos.fecharecuperacion as fecha2 FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo where mantenimientos.estado='Proceso' and fecharecuperacion<'$today'";
			$resul=mysql_query($sql);
			$fila=mysql_fetch_array($resul);
			for($i=0;$i<$fila;$i++) 
			{
				echo "<tr valign='top'>";
					echo"<td>";
						echo $fila['codigo'];
                    echo "</td>";
                    echo"<td>";
						echo $fila['nombre']; 
                    echo "</td>";
					
					echo"<td>";
						echo $fila['encargado'];
                    echo "</td>";
					echo"<td>";
						echo $fila['descripcion']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha2'];
                    echo "</td>";
				echo"</tr>";
					$fila=mysql_fetch_array($resul);
			}
			//-----------------------------------------------------------------TRASLADO CADUCADO-------------------------------------------------
			$sql="SELECT equipos.codigoequipo as codigo, equipos.nombre as nombre,traslados.nombre as encargado, traslados.ubicacion as descripcion, traslados.fecha as fecha , traslados.fechaentrega as fecha2 FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo where traslados.estado='Proceso' and fechaentrega<'$today'";
			$resul=mysql_query($sql);
			$fila=mysql_fetch_array($resul);
			for($i=0;$i<$fila;$i++) 
			{
				echo "<tr valign='top' >";
					echo"<td>";
						echo $fila['codigo'];
                    echo "</td>";
                    echo"<td>";
						echo $fila['nombre']; 
                    echo "</td>";
					
					echo"<td>";
						echo $fila['encargado'];
                    echo "</td>";
					echo"<td>";
						echo "Equipo Trasladado a ".$fila['descripcion']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha2'];
                    echo "</td>";
				echo"</tr>";
					$fila=mysql_fetch_array($resul);
			}
					
			  ?>
              </table>
              </table>

</div>



</div><div id="pie" align="center">
Copyright © 2013 Derechos Reservados - Diseñado por: Rodriguez Juan, Tapias Juan, Mendoza Leonardo.
</div>
</div>
<div id="top2"></div>
</div>
</div>
</div>
</body>
</html>