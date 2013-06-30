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

	$codigo=$_REQUEST['codigoequipo'];
	$cedula=$_REQUEST['cedula'];
	$control=$_REQUEST['control'];
	$fecha=date("y/m/d");
	$activo="Activo";
	$inactivo="Inactivo";
	
	if($cedula==""){?>
		<script>
		alert("Debe Ingresar El Personal");
		this.location.href='estadoequipo1.php';
		</script> <?php }
	if($control==""){ ?>
		<script>
		alert("Debe Ingresar La Accion");
		this.location.href='estadoequipo1.php';
		</script> <?php }

	if(($cedula=="")||($control=="")||($fecha=="")){
		$sq=0;
	}else{
		
	$sql= "INSERT INTO controles (codigoequipo,personal,accion,fecha) VALUES ('$codigo','$cedula','$control','$fecha')";
	if($control=="Incorporar"){
	$consulta="update equipos set estado='$activo' where codigoequipo='$codigo'";
	}else if($control=="Desincorporar"){
	$consulta="update equipos set estado='$inactivo' where codigoequipo='$codigo'";
		}
	$sq=mysql_query($sql);
	$consul=mysql_query($consulta);

	
	
						$resultado=mysql_query("select * from controles where codigoequipo= '$codigo' order by  codigocontrol desc");
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
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">ESTADO DE EQUIPOS</font></th>
	</tr>
				<tr valign="top">
					<td >
						<font >Código de Estado:&nbsp;</font></td>
					<td>
					<?php echo $fila['codigocontrol']; ?>
					</td>
				</tr> 
				              
	<tr valign="top">
			<td ><font>Codigo Equipo: </font></td>
			<td><?php echo $fila['codigoequipo'];?></td>
	</tr>
  				<tr valign="top">
					<td >
						<font >Personal Encargado:&nbsp;</font></td>
					<td>

				<?php echo $fila['personal']; ?>              
           				</td>
				</tr> 
                
                	<tr valign="top">
					<td >
						<font>Acción:&nbsp;</font></td>
					<td>
					<?php echo $fila['accion']; ?>
					</td>
				</tr> 				
                  				<tr valign="top">
					<td >
						<font >Fecha:&nbsp;</font></td>
					<td>
					<?php echo $fila['fecha']; ?>
					</td>
				
   
			</table>

            </form>
                	
			<?php	
						}
						}
					}if ($sq==1){
				mysql_query("
		INSERT INTO `csf`.`auditorias` (`usuario`, `accion`, `fecha`, `hora`) VALUES ('$_SESSION[nombre]', '$control', '".DATE('y/m/d')."', '".DATE('g:i:s a')."')");	
					
				?>
				<script>
				alert("Accion Exitosa");
				</script> 	
		<?php
        }	?>	
							




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
