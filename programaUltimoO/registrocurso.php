<form name="curso" method="post" action="registrocurso1.php">
<table align="center" width="300">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">REGISTRAR CURSO</font></th>
	</tr>
	<tr>
		<td ><br><font>Curso: </font></td>
		<td><input name="curso" type="text" size="22"></td>
	</tr>
	
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Registrar" onClick="valida_envia6()/>&nbsp;&nbsp;&nbsp;&nbsp";
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
</form>


<div align="center">
<?php
if (!isset($_GET['res'])){
	}else{
if($_GET['res']==1) echo "Registro Exitoso";
else if ($_GET['res']==2) echo "Ocurrio un error al registrar";
	}
?>
<br>
 <input type="button" value="Cerra y Actualizar" onClick="window.opener.location.reload(); window.close()"/>
</div>