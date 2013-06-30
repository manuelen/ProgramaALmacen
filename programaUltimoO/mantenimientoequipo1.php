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

	
	$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	$codigoconfirmacion = "";
	for($i=0;$i<12;$i++){
	$codigoconfirmacion .= substr($str,rand(0,62),1);
	}
	$codigo=$_REQUEST['codigoequipo'];
	$cedula=$_REQUEST['nombre'];
	$tipo=$_REQUEST['tipo'];
	$descripcion=$_REQUEST['descripcion'];
	$fecha=date("y/m/d");
	$fecha2=$_REQUEST['fecha2'];
	if($cedula==""){ ?>
		<script>
		alert("Debe Ingresar El Personal");
		this.location.href='mantenimientoequipo.php';
		</script>
        <?php
	}if($tipo==""){ ?>
		<script>
		alert("Debe Ingresar el Tipo de Mantenimiento");
		this.location.href='mantenimientoequipo.php';
		</script>
	<?php }if($descripcion==""){ ?>
		<script>
		alert("Debe Ingresar La Descripcion");
		this.location.href='mantenimientoequipo.php';
		</script>

	<?php }if(($cedula=="")||($tipo=="")||($descripcion=="")){
		$sq=0;
	}else{
		
	$sql= "INSERT INTO mantenimientos (codigoequipo,codigoconfirmacion,nombre,tipo,descripcion,estado,fecha,fecharecuperacion) VALUES ('$codigo','$codigoconfirmacion','$cedula','$tipo','$descripcion','Proceso','$fecha','$fecha2')";
	$sq=mysql_query($sql);
	$equipo="update equipos set estado='Mantenimiento' where codigoequipo='$codigo'";
	$equipo1=mysql_query($equipo);
	
	
						$resultado=mysql_query("select * from mantenimientos where codigoequipo= '$codigo' order by  codigomantenimiento desc");
						if(!$resultado)
						{
							echo 'No se pudo ejecutar la consulta';
						}
						else
						{
											$fila=mysql_fetch_array($resultado);
		$correos=mysql_query("select * from usuarios where cargo='Administrador'");
		$correo=mysql_fetch_array($correos);
		for($e=0;$e<$correo;$e++) 
								{
									mail("$correo[correo]","Mantenimiento de Herramienta o equipo","Sr/a ".$correo['nombre']." el equipo cuyo codigo es: ".$fila['codigoequipo']." ha sido enviado a mantenimiento ".$fila['tipo']." con la siguiente descripcion ".$fila['descripcion']." su Codigo de Confirmacion es ".$fila['codigoconfirmacion']." \n el dia ".strftime("%A %d de %B del %Y")." a las ".date("g:i:s a")."\n"); 	
									$correo=mysql_fetch_array($correos);
									}
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
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">MANTENIMIENTO DE EQUIPO</font></th>
	</tr>
                    <tr valign="top">
					<td >
						<font>Código Confirmación:&nbsp;</font></td>
					<td>
					<?php echo $codigoconfirmacion; ?>
					</td>
				</tr> 
				<tr valign="top">
					<td >
						<font >Código:&nbsp;</font></td>
					<td>
					<?php echo $fila['codigoequipo']; ?>
					</td>
				</tr> 
				              
	<tr valign="top">
			<td ><font>Personal Encargado: </font></td>
			<td><?php echo $fila['nombre']; ?></td>
	</tr>
  				<tr valign="top">
					<td >
						<font >Tipo:&nbsp;</font></td>
					<td>

				<?php echo $fila['tipo']; ?>              
           				</td>
				</tr> 
                
                	<tr valign="top">
					<td >
						<font>Descripción:&nbsp;</font></td>
					<td>
					<textarea name="descripcion" readonly> <?php echo $fila['descripcion']; ?></textarea>
					</td>
				</tr> 				
                  				<tr valign="top">
					<td >
						<font >Fecha:&nbsp;</font></td>
					<td>
					<?php echo $fila['fecha']; ?>
					</td>
				
  				 </tr>
                 </tr> 				
                  				<tr valign="top">
					<td >
						<font >Fecha Recuperación:&nbsp;</font></td>
					<td>
					<?php echo $fila['fecharecuperacion']; ?>
					</td>
				
  				 </tr>
                 	<tr>
		<td colspan="2" align="center"><br>
		<img src="pdf.jpg" width="50" height="50" align="center">
		<input type='button' value="Descargar" onClick="window.open('pdfmantenimiento.php?codigo=<?php echo $fila['codigomantenimiento']; ?>','miventana','width=300,height=200,menubar=no'); ">
		</td>
	</tr>
			</table>

            
                	
			<?php	
						}
						}
					}if ($sq==1){
					mysql_query("
		INSERT INTO `csf`.`auditorias` (`usuario`, `accion`, `fecha`, `hora`) VALUES ('$_SESSION[nombre]', 'Mantenimiento de Equipo', '".DATE('y/m/d')."', '".DATE('g:i:s a')."')");

					?>
				<script>
				alert("Mantenimiento Exitoso");
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
