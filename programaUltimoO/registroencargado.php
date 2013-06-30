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
    if (!/^([0-9])*$/.test(numero))
      alert("El valor de la C.I. no es Numérico");
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

<form name="registroencargado" method="post" action="registroencargado1.php" action="registroencargado.php">
<table align="center" width="300" style="margin-left:10;" border="2">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">REGISTRAR PERSONAL</font>
		<a href="ayuda.php?ubicar=<?php echo $pagina=13; ?>"><img src="imagenes/ayuda.png" align="right" height="20px" width="30px" title="Ayuda"></a></th>
	</tr>
	<tr>
		<td ><font>Cédula: </font></td>
		<td><select name="cargo">
        	<option value="">V-</option>
            <option value="">E-</option>
            </select>
			<input name="cedula" type="text"  size="20" maxlength="8" onBlur=validarSiNumero(this.value) id="lastname" placeholder="Cédula" tooltipText="Por favor introduzca Cédula de Identidad de la persona" required><font color="red">*</font></td>
	</tr>
	<tr>
		<td><font>Nombre: </font></td>
		<td><input  type="text" name="nombre" maxlength="50" size="25" id="lastname" placeholder="Nombre" tooltipText="Ingrese primer Nombre" required><font color="red">*</font></td>
	</tr>
    <tr>
		<td><font>Apellido: </font></td>
		<td><input  type="text" name="apellido" maxlength="50" size="25" id="lastname" placeholder="Teléfono" tooltipText="Ingrese primer Apellido" required><font color="red">*</font></td>
	</tr>

    <tr>
		<td><font>Cargo: </font></td>
		<td><select name="cargo" id="lastname" tooltipText="Seleccione el Cargo que ejerce el empleado" required>

  		<option selected value="">---------Cargo---------</option>

        <?php
require('conexion.php');

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

	</select><font color="red">*</font>
    <input type=button value="Ingresar otro Cargo" title="Oprima aqui para ingresar otro cargo y posteriormente seleccionar de la lista" onClick="window.open('registrocargo.php','miventana','width=300,height=200,menubar=no'); " id="lastname" tooltipText="Para ingresar otro cargo haga 'Click Aquí' y posteriormente seleccionar de la lista" required></td>
        
	</tr>
  
	
	<tr>
		<td colspan="2" align="center">
		<input type="submit" name="enviar" value="Registrar" onClick="valida_envia4()"/>&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/>&nbsp;
		</br></br>
		<font color="red"><h6 style="font-size:12px;">(*) campos obligatorios<h6></font>
		</td>
	</tr>
</table>
</form>

<?php
if (!isset($_GET['res'])){
	}else{
if($_GET['res']==1){ 
mysql_query("INSERT INTO `csf`.`auditorias` (`usuario`, `accion`, `fecha`, `hora`) VALUES ('$_SESSION[nombre]', 'Registro de Personal', '".DATE('y/m/d')."', '".DATE('g:i:s a')."')");
?>
		<script>
        alert("Registro Exitoso");
		</script> 

<?php }else if ($_GET['res']==2){ ?>
		<script>
        alert("A Ocurrido Un error Al Registrar el Encargado");
		this.location.href='registroencargado.php';
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
Copyright © 2013 Derechos Reservados - Diseñado por: Rodriguez Juan, Tapias Juan, Mendoza Leonardo
</div>
</div>
<div id="top2"></div>
</div>
</div>

</body>
</html>
