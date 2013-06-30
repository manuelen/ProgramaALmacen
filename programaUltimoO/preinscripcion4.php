<?php

include('funciones.php');?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script type="text/javascript" src="js/validacion.js"></script>
<title>Web Site CFS-LV</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="menu.css" rel="stylesheet" type="text/css"/>
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
	  function validarNumero(numero){
//alert(numero);
    if (!/^([0-9])*$/.test(numero))
      alert("El valor del Nro Telefónico no es Numérico");
	  }
	   
				
</script>
</head>

<body>
<table width="866" border="0" align="center">
  <tr>
    <td colspan="4"> <div align="center"><img src="cintillo.png" width="860" height="75"></div></td><br>
  </tr>
  <tr>
    <td colspan="4"><br>
		<?php 
		require('menu_p.php');
		?>
      </td>
  </tr>
  <tr>
    <td width="146" valign="top">
		<?php 
		require('sub-1.php');
		?>
	</td>
	
    <td width="500" valign="top"><br>
	<div align="center">
<br/>

<form name="preinscripcion" method="post" action="preinscripcion1.php">
<table align="center" width="280" style="margin-left:10;" border="1" bgcolor="#FFFFFF">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">PRE-INSCRIPCIÓN</font>
		<a href="ayuda1.php"><img src="imagenes/ayuda.png" align="right" height="20px" width="30px" title="Ayuda"></a></th>
	</tr>
	<tr>
		<td width="60" ><font>Cédula: </font></td>
		<td width="198">
		<select name="cargo">
        	<option value="">V-</option>
            <option value="">E-</option>
            </select>
			<input name="cedula" type="text" size="18" maxlength="8" onBlur=validarSiNumero(this.value) id="lastname" tooltipText="Type in your last name in this box"><font color="red">*</font></td>
	</tr>
	<tr>
		<td><font>Nombre: </font></td>
		<td><input  type="text" name="nombre" maxlength="50" size="25"><font color="red">*</font></td>
	</tr>
    <tr>
		<td><font>Apellido: </font></td>
		<td><input  type="text" name="apellido" maxlength="50" size="25"><font color="red">*</font></td>
	</tr>
	<tr>
		<td><font>Teléfono: </font></td>
		<td><input  type="text" name="telefono" maxlength="11" size="25" onBlur=validarNumero(this.value)><font color="red">*</font></td>
	</tr>

    <tr>
		<td><font>Curso: </font></td>
		<td><select name="curso">

  		<option selected value="">---------Cursos---------</option>

        <?php
require('conexion.php');

		$curso=mysql_query("select * from cursos order by codigocurso");
		$opcion=mysql_fetch_array($curso);
				
		for($i=0;$i<$opcion;$i++) 
		{

		echo "<option>";
		echo $opcion['curso'];
		echo"</option>";
		$opcion=mysql_fetch_array($curso);
		}
	

        ?>

	</select><font color="red">*</font>
    <input type=button value="Ingresar otro Curso" onClick="window.open('registrocurso.php','miventana','width=300,height=200,menubar=no'); " title="Para ingresar otro curso haga 'Click Aquí'"></td>
        
	</tr>
  
	
	<tr>
		<td colspan="2" align="center"><br>
		<input type="submit" name="enviar" value="Registrar" onClick="valida_envia5()"/>&nbsp;
		<input type="reset" name="cancelar" value="Cancelar" onClick="Cancelar()"/>
		
		<font color="red"><h6>(*) campos obligatorios<h6></font>
		<img src="pdf.jpg" width="50" height="50" align="center">
		<input type=button value="Descargar" onClick="window.open('Busquedadplanilla.php','miventana','width=300,height=200,menubar=no'); ">
		</td>
	</tr>
	
</table>
</form>
<?php
if (!isset($_GET['res'])){
	}else{
if($_GET['res']==1){ ?>
		<script>
        alert("Registro Exitoso");
		</script> 

<?php }else if ($_GET['res']==2){ ?>
		<script>
        alert("A Ocurrido Un error Al Preinscribirse");
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

    <td width="161" valign="top">
	<?php 
		require('sub-2.php');
		?>
	</td>
   </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<div align="center">
    <?php 
		require('pie.php');
		?>
  </div>
</body>
</html>
