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

<form name="estado" method="post" action="estado.php">
<table align="center" width="320">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">CONSULTAR INCORPORAR/DESINCORPORAR</font></th>
	</tr>
	<tr>
		<td ><font>Código: </font></td>
        <script>
				$(document).ready(function() {
            $("#input_2").keyup(function(){
			$("#lista").load("index_proceso.php?busqueda="+$("#input_2").val());
			$("#lista").css({"display": "block"});
			});
        });
        
        </script>
		<td><input type="text" name="codigoequipo" id="input_2" class="input" autocomplete="off">
					<div id="lista" onMouseOut="v=1;" onMouseOver="v=0;"></div></td>
                    
                    
	</tr>
        
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Consultar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
</form>

			<div id="metodo_ajax">
            
            </div>

			<?php 
			require('conexion.php');
				 $img_modi='<img src="imagenes/modificar.png" border="0" align="absmiddle" width="30" height="30" title="Modificar" />';
				if (!isset($_POST['codigoequipo'])){
					}else{
						$codigo=$_POST['codigoequipo'];
						$resultado=mysql_query("select * from controles where codigoequipo='$codigo' order by  codigocontrol desc");
						if(!$resultado)
						{?>
							<script>
		             alert("Debe Ingresar Codigo");
		             this.location.href='estado.php';
		             </script>
						<?php
						}
						else
						{
											$fila=mysql_fetch_array($resultado);
										if (!$fila)
			{
				?>
							<script>
		             alert("Debe Ingresar un Codigo Válido");
		             this.location.href='estado.php';
		             </script>
						<?php
			}
			else
			{?>
            <br>
				<table align="center">
                	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">DATOS DEL ESTADO</font></th>
	</tr>
    
    			<tr valign="top">
					<td >
						<font>Código Estado:&nbsp;</font></td>
					<td>
					<?php echo $fila['codigocontrol']; ?>
					</td>
				</tr> 
				<tr valign="top">
					<td >
						<font>Código Equipo:&nbsp;</font></td>
					<td>
					<?php echo $fila['codigoequipo']; ?>
					</td>
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
						<font>Fecha:&nbsp;</font></td>
					<td>
					<?php echo $fila['fecha']; ?>
                    </td>
             

				<tr valign="top">
				<td >
	
                         </td>
					<td>
                    						<?php
											if ($_SESSION['cargo']=='Administrador'){
							echo 	"<a href='estadoequipo1.php?codigoequipo=".$fila['codigoequipo']."' >";
							echo	$img_modi;		
							echo	"</a>";
											}
						 ?> &nbsp;&nbsp;
                    

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
