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

	<link rel="stylesheet" href="css/form-field-tooltip.css" media="screen" type="text/css">
	<script type="text/javascript" src="js/rounded-corners.js"></script>
	<script type="text/javascript" src="js/form-field-tooltip.js"></script>

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

<form name="nuevaherramienta" method="post" action="nuevaherramienta1.php">
<table align="center" width="320" style="margin-left:10;" border="2">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">REGISTRAR EQUIPO</font>
		<a href="ayuda.php?ubicar=<?php echo $pagina=15; ?>"><img src="imagenes/ayuda.png" align="right" height="20px" width="30px" title="Ayuda"></a></th>
	</tr>
	<tr>
		<td ><font>Código: </font></td>
		<td><input name="codigoequipo" type="text"  size="23" maxlength="10" onBlur="valida_envia()" id="lastname" placeholder="Código" tooltipText="Ingrese el Código del equipo" required><font color="red"><font color="red">*</font></font></td>
	</tr>
	<tr>
		<td><font>Nombre: </font></td>
		<td><input  type="text" name="nombreequipo" maxlength="50" size="23" id="lastname" placeholder="Nombre" tooltipText="Ingrese Nombre del Equipo a registrar" required><font color="red">*</font></td>
	</tr>
    <tr>
		<td ><font>Tipo: </font></td>
		<td><select name="tipo" id="lastname" tooltipText="Seleccione La categoría a la cual pertenece el Equipo" required>

  		<option selected value="">-------Selecione Tipo-------</option>


        		<?php
require('conexion.php');

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

	</select><font color="red">*</font>
    <br>
    <input type=button value="Ingresar otro Tipo" title="Oprima aqui para registrar otro tipo y posteriormente seleccionar de la lista" onClick="window.open('registrotipo.php','miventana','width=300,height=200,menubar=no'); " id="lastname" tooltipText="Oprima 'Aqui' para registrar otro tipo y posteriormente seleccionar de la lista"> 
    </td>
	</tr>
          	<tr>
		<td><font>Marca: </font></td>
		<td> <select name="marca" id="lastname" tooltipText="Seleccione la Marca del equipo" required>
        <option value="vacio">------Seleccione Marca-----</option>
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
   		 <input type=button value="Ingresar otra Marca" title="Oprima aqui para registrar otra marca y posteriormente seleccionar de la lista" onClick="window.open('registromarca.php','miventana','width=300,height=200,menubar=no'); " id="lastname" tooltipText="Oprima 'Aqui' para registrar otra Marca y posteriormente seleccionar de la lista" required>
         </td>
         </tr>
         	<tr>
		<td ><font>Serial: </font></td>
		<td> <input name="serial" type="text"  size="23" id="lastname" placeholder="Serial" tooltipText="Ingrese el Serial del equipo o código de barras si lo desea" required></td>
	</tr>
    	<tr>
		<td><font>Descripción: </font></td>
		<td> <textarea name="descripcion" size="24" rows="3" id="lastname" placeholder=" Añada Breve Descripción" tooltipText="Añada una breve descripción que caracterice al equipo" required></textarea></td>
        
	</tr>
    <tr>
		<td ><font>Cantidad: </font></td>
		<td> <input name="cantidad" type="text"  size="23" maxlength="4" id="lastname" placeholder="Cantidad" tooltipText="Ingrese la cantidad de equipos que pertenezcan al mismo tipo" required></td>
	</tr>
    <tr>
		<td><font>Estado: </font></td>
		<td><select name="estado" id="lastname" tooltipText="Seleccione el Estado actual de dicho equipo" required>

  		<option value="">-----Seleccione Estado-----</option>

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

	</select><font color="red">*</font><input type=button value="Ingresar otro Estado" title="Oprima aqui para registrar otro estado y posteriormente seleccionar de la lista" onClick="window.open('registroestado.php','miventana','width=300,height=200,menubar=no'); " id="lastname" tooltipText="Oprima 'Aqui' para registrar otro Estado y posteriormente seleccionar de la lista"></td>
        
	</tr>
    
          	<tr>
		<td><font>Ubicación: </font></td>
		<td><select name="ubicacion" id="lastname" tooltipText="Seleccione el laboratorio donde permanecerá dicho equipo" required>
        <option value="" onBlur="valida_envia()">----Seleccione Ubicaci&oacute;n---</option>
			<?php

		$laboratorio=mysql_query("select * from laboratorios order by nombre");
		$opcion=mysql_fetch_array($laboratorio);
				
		for($i=0;$i<$opcion;$i++) 
		{

		echo "<option>";
		echo $opcion['nombre'];
		$opcion=mysql_fetch_array($laboratorio);
		}
	

        ?>
        </select><font color="red">*</font>

        </td>
    
        
	</tr>
	
	<tr>
		<td colspan="2" align="center">
		<input type="submit" name="enviar" value="Registrar" onClick="valida_envia()"/>&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/>&nbsp;
		</br></br>
		<font color="red"><h6 style="font-size:12px;">(*) campos obligatorios<h6></font>
		</td>
	</tr>
</table>
</form>

<?php
if(!isset($_GET['res'])){
	}else{
if($_GET['res']==1){
mysql_query("INSERT INTO `csf`.`auditorias` (`usuario`, `accion`, `fecha`, `hora`) VALUES ('$_SESSION[nombre]', 'Registro de Equipo', '".DATE('y/m/d')."', '".DATE('g:i:s a')."')");
?>
		<script>
        alert("Registro Exitoso");
		</script>
<?php
}else if ($_GET['res']==2){?>

		<script>
        alert("A Ocurrido un Error al Regitrar La Herramienta");
		</script>
<?php
}
	}
?>
</div>

<script type="text/javascript">
var tooltipObj = new DHTMLgoodies_formTooltip();
tooltipObj.setTooltipPosition('right');
tooltipObj.setPageBgColor('#EEEEEE');
tooltipObj.setTooltipCornerSize(15);
tooltipObj.initFormFieldTooltip();
</script>


</div><div id="pie" align="center">
Copyright © 2013 Derechos Reservados - Diseñado por: Rodriguez Juan, Tapias Juan, Mendoza Leonardo.
</div>
</div>
<div id="top2"></div>
</div>
</div>

</body>
</html>
