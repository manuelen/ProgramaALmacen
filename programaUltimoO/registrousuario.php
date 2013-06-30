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

<script language="JavaScript" type="text/JavaScript">
function Cancelar(){
	var confirmar = confirm("Desea Cancelar el Registro?");
	if(confirmar!=0)
	this.location.href='preinscripcion.php';
}
function borra(form)
{
//alert(form.motivo.value);
  if (form.motivo.value=="Escriba Aqui")
     form.motivo.value="";
}
function validarSiNumero(numero){
//alert(numero);
    if (!/^([0-9])*$/.test(numero)){
      alert("El valor de la C.I. no es Numérico");
	  document.usuario.cedula.focus()
	  return 0; 
	  }}
	  function validarNumero(numero){
//alert(numero);
    if (!/^([0-9])*$/.test(numero))
      alert("El valor del Nro Telefónico no es Numérico");
	  }			
</script>
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

<form name="usuario" method="post" action="registrousuari.php" action="registrousuario.php">
<table align="center" width="370" border="1">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">REGISTRAR USUARIO</font>
		<a href="ayuda.php?ubicar=<?php echo $pagina=12; ?>"><img src="imagenes/ayuda.png" align="right" height="20px" width="30px" title="Ayuda"></a></th>
	</tr>
	<tr>
		<td ><font>Cédula: </font></td>
		<td><select name="cargo">
        	<option value="">V-</option>
            <option value="">E-</option>
            </select>
			<input name="cedula" type="text" size="16" maxlength="8" onBlur=validarSiNumero(this.value) id="lastname" placeholder="Cedula" tooltipText="Por favor introduzca su Cédula de Identidad" required><font color="red">*</font></td>
	</tr>
	<tr>
		<td><font>Teléfono: </font></td>
		<td><input  type="text" name="telefono" maxlength="16" size="22" onBlur=validarNumero(this.value) id="lastname" placeholder="Teléfono" tooltipText="Ingrese un número de Contacto preferiblente Celular" required><font color="red">*</font></td>
        
	</tr>
    
    <tr>
		<td><font>Nivel: </font></td>
		<td><select name="cargo" id="lastname" placeholder="Nivel de Usuario" tooltipText="Seleccione el Nivel de Usuario que poseerá" required>
			<option value="">------Seleccione Nivel----- </option>
        	<option value="Administrador">Administrador</option>
            <option value="Encargado">Encargado</option>
            <option value="Facilitador">Facilitador</option>
            </select><font color="red">*</font></td>
    
	</tr>
    <tr>
		<td><font>Nombre: </font></td>
		<td><input  type="text" name="nombre" maxlength="40" size="22" id="lastname" placeholder="Nombre" tooltipText="Ingrese primer Nombre" required><font color="red">*</font></td>
  
	</tr>
    
    	<tr>
		<td><font>Apellido: </font></td>
		<td><input  type="text" name="apellido" maxlength="40" size="22" id="lastname" placeholder="Apellido" tooltipText="Ingrese primer Apellido" required><font color="red">*</font></td>
        
	</tr>
    
    	<tr>
		<td><font>Usuario: </font></td>
		<td><input  type="text" name="nombreusuario" maxlength="40" size="22" id="lastname" placeholder="Usuario" tooltipText="Ingrese El nombre de Usuario que desea tener" required><font color="red">*</font></td>
        
     </tr>
    <tr>
		<td><font>Contraseña: </font></td>
		<td><input  type="Password" name="codigo" maxlength="20" size="22" id="lastname" placeholder="Contraseña" tooltipText="Ingrese una contraseña que tenga numeros y letras preferiblemente mayoy de 6 dígitos" required><font color="red">*</font></td>
        
	</tr>
        <tr>
		<td><font>Correo: </font></td>
		<td><input  type="email" name="correo"  size="22" id="lastname" placeholder="Correo" tooltipText="Ingrese un correo" required><font color="red">*</font></td>
        
	</tr>
     <tr>
		<td><font>Pregunta Secreta: </font></td>
		<td><input  type="text" name="pregunta" maxlength="30" size="22" id="lastname" placeholder="Pregunta Secreta" tooltipText="Ingrese una pregunta secreta" required><font color="red">*</font></td>
        
	</tr>
     <tr>
		<td><font>Respuesta Secreta: </font></td>
		<td><input  type="text" name="respuesta" maxlength="30" size="22" id="lastname" placeholder="Respuesta Secreta" tooltipText="Ingrese la respuesta secreta de dicha pregunta" required><font color="red">*</font></td>
        
	</tr>
        
	
	<tr>
		<td colspan="2" align="center">
		<input type="submit" name="enviar" value="Registrar" onClick="valida_envia3()"/>&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/>&nbsp;
		</br>
		<font color="red"><h6 style="font-size:12px;">(*) campos obligatorios<h6></font>
		</td>
	</tr>
</table>
</form>

<?php
if (!isset($_GET['res'])){
	}else{
if($_GET['res']==1){ 
mysql_query("INSERT INTO `csf`.`auditorias` (`usuario`, `accion`, `fecha`, `hora`) VALUES ('$_SESSION[nombre]', 'Registro de Usuario', '".DATE('y/m/d')."', '".DATE('g:i:s a')."')");
?>
	<script>
	alert("Registro Exitoso");
	</script>
<?php
}else if ($_GET['res']==2){?> 	
	<script>
	alert("Error Al Registar Datos");
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
