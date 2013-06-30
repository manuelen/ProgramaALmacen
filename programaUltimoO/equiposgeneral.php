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
				$img_eli='<img src="imagenes/eliminar.png" border="0" align="absmiddle" width="25" height="25" title="Eliminar" />';
				$img_modi='<img src="imagenes/modificar.png" border="0" align="absmiddle" width="25" height="25" title="Modificar" />';

						$resultado=mysql_query("select * from equipos");
						$numeroRegistros=mysql_num_rows($resultado);
						if(!$resultado)
						{
							echo 'No se pudo ejecutar la consulta';
						}
						else
						{
						
						if($numeroRegistros<=0){
						echo "<div align='center'>";
						echo "<font face='verdana' size='-2'>No se encontraron resultados</font>";
						echo "</div>";
						}else{
						if(!isset($orden))
							{
							$orden="codigoequipo";
							}
						$tamPag=14;
						//validacion de pàgina
						
						//pagina actual si no esta definida y limites
						if(!isset($_GET["pagina"]))
						{
						$pagina=1;
						$inicio=1;
						$final=$tamPag;
						}else{
						$pagina = $_GET["pagina"];
						}
						//calculo del limite inferior
						$limitInf=($pagina-1)*$tamPag;
						//calculo del numero de paginas
						$numPags=ceil($numeroRegistros/$tamPag);
						if(!isset($_GET["pagina"]))
							{
							$pagina=1;
							$inicio=1;
						$final=$tamPag;
						}else{
						$seccionActual=intval(($pagina-1)/$tamPag);
						$inicio=($seccionActual*$tamPag)+1;
							if($pagina<$numPags)
							{
							$final=$inicio+$tamPag-1;
							}else{
							$final=$numPags;
							}
						}?>
 
            <br>
						
				<table align="center" border="2" bordercolor="#000" cellspacing="1" cellpadding="1" width="">
                <tr>
			<th colspan="10"  style=" background-image:url(imagenes/Sin_titulo.png);" ><font color="#FFFFFF" size="+1">INFORMACIÓN GENERAL DE EQUIPOS</font></th>
			</tr> 
				<tr valign="top">
					<td  align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Código</font>
          </td>
					<td  align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Nombre</font>
                  </td>
<td  align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Tipo</font>
                  </td>
<td  align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Marca</font>
					</td>
                    <td  align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Serial</font>
					</td>
                    <td  align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Descripción</font>
					</td>
                    <td  align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Cantidad</font>
					</td>
<td  align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Estado</font>
                  </td>
		
<td  align="center" style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Ubicación</font>
                  </td>
					<?php
											if ($_SESSION['cargo']=='Administrador'){?>
<td  align="center" style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Acción</font>
                  </td>
				<?php } ?>
				</tr> 
        <?php
			$sql="SELECT * FROM equipos ORDER BY ".$orden.",codigoequipo ASC LIMIT ".$limitInf.",".$tamPag;
			$resul=mysql_query($sql);
			$fila=mysql_fetch_array($resul);
			
			for($i=0;$i<$fila;$i++) 
			{
				echo "<tr valign='top'>";
					
                    echo"<td>";
						echo $fila['codigoequipo']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['nombre'];
                    echo "</td>";
					echo"<td>";
						echo $fila['tipo'];
                    echo "</td>";
					echo"<td>";
						echo $fila['marca']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['serial']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['descripcion']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['cantidad']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['estado'];
                    echo "</td>";
					echo"<td>";
						echo $fila['ubicacion'];
                    echo "</td>";
					if ($_SESSION['cargo']=='Administrador'){
					echo"<td>";
						 ?>
                            &nbsp;
                            						<?php
							echo 	"<a href='modificarherramienta.php?codigoequipo=".$fila['codigoequipo']."' >";
							echo	$img_modi;		
							echo	"</a>";
			
                    echo "</td>";
					}
					echo"</tr>";	
						 $fila=mysql_fetch_array($resul);
						 }
						
								
			?>	
                
                
                
			</table>
             <?php
	if($pagina>1)
	{
		echo "<a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".($pagina-1)."&orden=".$orden."'>";
		echo "<font face='verdana' size='-2' color='#000000'>Anterior</font>";
		echo "</a>&nbsp;";
	}

	for($i=$inicio;$i<=$numPags;$i++)
	{
		if($i==$pagina)
		{
			echo "<font face='verdana' size='-2'><b>".$i."</b>&nbsp;</font>";
		}else{
			echo "<a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".$i."&orden=".$orden."'>";
			echo "<font face='verdana' size='-2' color='#000000'>".$i."</font></a>&nbsp;";
		}
	}
	if($pagina<$numPags)
	{
		
		echo "&nbsp;<a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".($pagina+1)."&orden=".$orden."'>";
		echo "<font face='verdana' size='-2' color='#000000'>siguiente</font></a>";
	}
	//////////fin de la paginacion	
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
