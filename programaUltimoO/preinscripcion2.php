<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Web Site CFS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="menu.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="866" border="0" align="center">
  <tr>
    <td colspan="3"> <div align="center"><img src="cintillo.png" width="860" height="57"></div></td><br>
  </tr>
  <tr>
    <td colspan="3"><br>
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
	
    <td width="572" valign="top"><br>
	<div align="center">
<br/>

<form name="preinscripcion" method="post" action="preinscripcion1.php">
<table align="center" width="274" style="margin-left:10;" border="1" bgcolor="#FFFFFF">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">PRE-INSCRIPCIÓN</font></th>
	</tr>
	<tr>
		<td width="60" ><font>Cédula: </font></td>
		<td width="198"><input name="cedula" type="text"  size="25" maxlength="8"><font color="red">*</font></td>
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
		<td><input  type="text" name="telefono" maxlength="11" size="25"><font color="red">*</font></td>
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
    <input type=button value="Ingresar otro Curso" onClick="window.open('registrocurso.php','miventana','width=300,height=200,menubar=no'); "></td>
        
	</tr>
  
	
	<tr>
		<td colspan="2" align="center"><br>
		<input type="submit" name="enviar" value="Registrar" onClick="valida_envia4()"/>&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/>&nbsp;
		</br>
		<font color="red"><h3>(*) campos obligatorios<h1></font>
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
	</td>
    <td width="170" valign="top">
		<?php 
		require('sub-2.php');
		?>
	</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<tr>
    <?php 
		require('pie.php');
		?>
  </tr>
</body>
</html>
