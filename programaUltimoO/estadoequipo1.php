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
 </form>
            <br>
            
            <form name="estadoequipo" method="post" action="estadoequipo1.php">
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
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Consultar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
    <tr> 
		<td colspan="2" align="center"><input type="button" value="Búsqueda Avanzada" onClick="location.href='busqueda_avanzada1.php';"></td>
	</tr>
</table>
</form>
<br/>



			<?php 
				/*if($_GET['res']==1)  echo "Registro Exitoso";
				else if($_GET['res']==2)  echo "Ocurrio un Error al Registrar";*/
				$img_eli='<img src="imagenes/iconoeliminar.jpg" border="0" align="absmiddle" width="30" height="30" title="Eliminar" />';
				$img_modi='<img src="imagenes/iconomodifica.jpg" border="0" align="absmiddle" width="30" height="30" title="Modificar" />';
				require ('conexion.php');
						if (!isset($_REQUEST['codigoequipo'])){
							}else{
						$codigo=$_REQUEST['codigoequipo'];
						$resultado=mysql_query("select * from equipos where codigoequipo= '$codigo'");
						if(!$resultado)
						{
							?>  <script>
        alert("No Se Puedo Ejecutar La Consulta");
		this.location.href='estadoequipo1.php';
		</script> <?php
						}						else
						{
											$fila=mysql_fetch_array($resultado);
										if (!$fila)
			{
				?>  <script>
        alert("Datos No Existentes");
		this.location.href='estadoequipo1.php';
		</script> <?php
			}
			else
			{
				?>
            <br>
            
            <form name="estadoequipos" method="post" action="estadoequipo2.php">
            
				<table align="center">
                	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">ESTADO DE EQUIPO</font></th>
	</tr>
				<tr valign="top">
					<td >
						<font >Código:&nbsp;</font></td>
					<td>
					<input name="codigoequipo" readonly size="15" value="<?php echo $fila['codigoequipo']; ?>">
					</td>
				</tr> 
				   
	<tr valign="top">
			<td ><font>Personal Encargado: </font></td>
            <td><select name="cedula">
            	<option selected value="">--Nombre Personal--</option>
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
  <tr valign="top">
    <td>
    <font>Acción</font></td>
    <?php 
	
	if ($fila['estado']!=="Activo"){
    echo "<td>
    <p align='left'><font><b>Incorporar</b></font>
    <input type='radio' value='Incorporar' name='control' style='float: left' checked></td>"; 
    
	}else if ($fila['estado']=="Activo"){  
	echo "<td>
    <p align='left'><font><b>Desincorporar</b></font>
    <input type='radio'  value='Desincorporar' name='control' style='float: left' checked></td>";}?>
  </tr>
 
 <tr>
  <td></td>
 
  </tr>
                                    
                	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Aplicar" onClick="valida_envia6()"/>&nbsp;&nbsp;&nbsp;&nbsp;
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
</div>
</body>
</html>
