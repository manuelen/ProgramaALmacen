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
<SCRIPT src="js/top2.js" type=text/javascript></SCRIPT>

<script type="text/javascript" src="js/hora.js"></script>

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
        
       

<div id="columna3" align="center"></br>


<form name="recuperar" method="post" action="recuperarcontrasena3.php">
<table align="center" width="300">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">RECUPERACIÓN DE DATOS</font></th>
	</tr>
    <tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">Por Datos Personales</font></th>
	</tr>
	<tr>
		<td ><font>Ingrese su Nr.Cédula: </font></td>
		<td><input name="cedula" type="text" size="22" maxlength="8" required /></td>
	</tr>
        
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Enviar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
</form>
<script>
		function recuperarCorreo(){
				var datos = "correo="+$("#correo1").val();
				$.post('recuperar3.php',datos, function(result2){alert(result2);},'json');
				}
</script>
<form action="javascript:recuperarCorreo();" id="form_recuperar">
<table align="center" width="300">
    <tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">Por Correo</font></th>
	</tr>
	<tr>
		<td ><font>Ingrese su Correo: </font></td>
		<td><input type="text" name="Correo" id="correo1" title="Ingrese su Correo" placeholder="Ingrese su Correo" autocomplete="off" required/></td>
	</tr>
        
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Enviar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
</form>

			<?php 
				/*if($_GET['res']==1)  echo "Registro Exitoso";
				else if($_GET['res']==2)  echo "Ocurrio un Error al Registrar";*/
				$img_eli='<img src="imagenes/plus.gif" border="0" align="absmiddle" width="18" height="18" title="Eliminar" />';
				$img_modi='<img src="imagenes/minus.gif" border="0" align="absmiddle" width="18" height="18" title="Actualizar" />';
				require('conexion.php');
				if(!isset($_REQUEST['cedula'])){
					}else{
						$cedula=$_REQUEST['cedula'];
						$resultado=mysql_query("select * from usuarios where cedula= $cedula");
						if(!$resultado)
						{?>
							<script>
					alert("Ingrese la cedula con datos numericos");
					this.location.href='recuperarcontrasena3.php';
					</script>
						<?php
                        }
						else
						{
											$fila=mysql_fetch_array($resultado);
										if (!$fila)
			{?>
			 <script>
					alert("Datos no Encontrados");
					this.location.href='recuperarcontrasena3.php';
					</script>
			<?php
            }
			else
			{				
							echo "<div align='center'>";
							?>
                            <br>
							
							<?php echo "<form name='recuperar1' method='post' action='recuperarcontrasena4.php?cedula=$cedula'> " ?>
<table align="center" width="500">
			<tr>
							<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1"> <?php 
							echo "<font size='+1' >Bienvenido   ".$fila['nombre']."  ".$fila['apellido'];
							echo "</font>";
							?></font></th>
	</tr>
	<tr>
		<td ><font>Ingrese Pregunta Secreta: </font></td>
		<td><input name="pregunta" type="password" size="22"></td>
	</tr>
    <tr>
		<td ><font>Ingrese Respuesta Secreta: </font></td>
		<td><input name="respuesta" type="password" size="22"></td>
	</tr>
        
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Enviar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
</form>
<?php
							echo "</div>";
						}
						}
					}
				
			?>	

</div>


<div id="pie" align="center">
Copyright © 2013 Derechos Reservados - Diseñado por: Rodriguez Juan, Tapias Juan, Mendoza Leonardo.
</div>
</div>
</div>
</div>
<div id="top2"></div>
</div>
</div>



</body>
</html>
