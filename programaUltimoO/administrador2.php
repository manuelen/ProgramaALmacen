<?php
require('conexion.php');
require('funciones.php');
//uso de la funcion verificar_usuario()
verificar_usuario();
		$today=date("y-m-d");
		if($_SESSION['cargo']!="Administrador"){
		$ip=$_SERVER['REMOTE_ADDR'];
		$nombreServidor=gethostbyaddr($ip);
		$mantenimiento=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo inner join controladores on equipos.ubicacion=controladores.ubicacion where mantenimientos.estado='Proceso' and fecharecuperacion>'$today' and controladores.nombrepc='$nombreServidor'");
			$mantenimientos=mysql_fetch_array($mantenimiento);
		$traslado=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo inner join controladores on equipos.ubicacion=controladores.ubicacion where traslados.estado='Proceso' and fechaentrega>'$today' and controladores.nombrepc='$nombreServidor'");
			$traslados=mysql_fetch_array($traslado);
		}else{
		$mantenimiento=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo where mantenimientos.estado='Proceso' and fecharecuperacion>'$today'");
			$mantenimientos=mysql_fetch_array($mantenimiento);
		$traslado=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo where traslados.estado='Proceso' and fechaentrega>'$today'");
			$traslados=mysql_fetch_array($traslado);
			}
			$cantidad=$mantenimientos['cantidad']+$traslados['cantidad'];

		?>
        <br />
         <!-- ---------------------------------------------------ACCIONES PROCESADAS------------------------------------------------------- -->
          <input value="<?php echo $mantenimientos['cantidad']; ?>" id="cantidadM" style="display:none;" />
            <input value="<?php echo $traslados['cantidad']; ?>" id="cantidadT" style="display:none;" />
				<table align="center" border="2" bordercolor="#000" cellspacing="1" cellpadding="1" width="750">
                <tr>
			<th colspan="7"  style=" background-image:url(imagenes/Sin_titulo.png);" ><font color="#FFFFFF" size="+1">Control de Acciones</font></th>
			</tr> 
             <tr>
			<th colspan="7"  style=" background-image:url(imagenes/Sin_titulo.png);" ><font color="#FFFFFF" size="+1">Acciones en Proceso <?php echo"($cantidad)";?></font> <input type="button"value="ver" id="procesadas1" />
           
            </th>
			</tr> 
			<table id='procesadas' style='display:none' border='1'>
				<tr valign="top"  >
					<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Código Equipo</font>
          </td>
					<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Nombre</font>
                  </td>
<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Encargado</font>
                  </td>

<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Descripción</font>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >fecha inicio</font>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >fecha Entrega</font>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Confirmar Acción</font>
                  </td>
				</tr> 
        <?php
		//----------------------------------------------------------------MANTENIMIENTO EN PROCESO------------------------------------------------
		if($_SESSION['cargo']!="Administrador"){
		$ip=$_SERVER['REMOTE_ADDR'];
		$nombreServidor=gethostbyaddr($ip);
			$sql="SELECT equipos.codigoequipo as codigo, equipos.nombre as nombre,mantenimientos.nombre as encargado, mantenimientos.descripcion as descripcion, mantenimientos.fecha as fecha , mantenimientos.fecharecuperacion as fecha2, mantenimientos.codigomantenimiento as codigoM FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo inner join controladores on equipos.ubicacion=controladores.ubicacion where mantenimientos.estado='Proceso'  and fecharecuperacion>'$today' and controladores.nombrepc='$nombreServidor'";
			}else{
			$sql="SELECT  equipos.codigoequipo as codigo, equipos.nombre as nombre,mantenimientos.nombre as encargado, mantenimientos.descripcion as descripcion, mantenimientos.fecha as fecha , mantenimientos.fecharecuperacion as fecha2, mantenimientos.codigomantenimiento as codigoM FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo where mantenimientos.estado='Proceso' and fecharecuperacion>'$today'";}
			$resul=mysql_query($sql);
			$fila=mysql_fetch_array($resul);
			for($i=0;$i<$fila;$i++) 
			{
				if($usuario==true){}
				echo "<tr valign='top' >";
					echo"<td>";
						echo $fila['codigo'];
                    echo "</td>";
                    echo"<td>";
						echo $fila['nombre']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['encargado'];
                    echo "</td>";
					echo"<td>";
						echo $fila['descripcion']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha2'];
                    echo "</td>";
					echo"<td>";
						echo "<input type='text' id='mantenimientos".$i."' size='10' /><input type='button' numero='".$i."' codigo='".$fila['codigoM']."' value='enviar' id='mantenimiento".$i."' />";
                    echo "</td>";
				echo"</tr>";
					$fila=mysql_fetch_array($resul);
			}
			//--------------------------------------------------------TRASLADO EN PROCESO-----------------------------------------------------
			if($_SESSION['cargo']!="Administrador"){
		$ip=$_SERVER['REMOTE_ADDR'];
		$nombreServidor=gethostbyaddr($ip);
		$sql="SELECT equipos.codigoequipo as codigo, equipos.nombre as nombre,traslados.nombre as encargado, traslados.ubicacion as descripcion, traslados.fecha as fecha , traslados.fechaentrega as fecha2, traslados.codigotranslado as codigoT FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo inner join controladores on equipos.ubicacion=controladores.ubicacion where traslados.estado='Proceso'  and fechaentrega>'$today' and controladores.nombrepc='$nombreServidor'";
		}else{
			$sql="SELECT equipos.codigoequipo as codigo, equipos.nombre as nombre,traslados.nombre as encargado, traslados.ubicacion as descripcion, traslados.fecha as fecha , traslados.fechaentrega as fecha2, traslados.codigotranslado as codigoT FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo where traslados.estado='Proceso' and fechaentrega>'$today'";
			}
			$resul=mysql_query($sql);
			$fila=mysql_fetch_array($resul);
			for($i=0;$i<$fila;$i++) 
			{
				echo "<tr valign='top'>";
					echo"<td>";
						echo $fila['codigo'];
                    echo "</td>";
                    echo"<td>";
						echo $fila['nombre']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['encargado'];
                    echo "</td>";
					echo"<td>";
						echo "Equipo Trasladado a ".$fila['descripcion']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha2'];
                    echo "</td>";
					echo"<td>";
						echo "<input type='text' id='traslados".$i."' size='10' /><input type='submit' value='enviar' numero='".$i."' codigo='".$fila['codigoT']."' id='traslado".$i."' />";
                    echo "</td>";
				echo"</tr>";
					$fila=mysql_fetch_array($resul);
			}
					echo "";
			  ?></table>
              </table>
              <?php
			  if($_SESSION['cargo']!="Administrador"){
		$ip=$_SERVER['REMOTE_ADDR'];
		$nombreServidor=gethostbyaddr($ip);
		$mantenimiento=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo inner join controladores on equipos.ubicacion=controladores.ubicacion where mantenimientos.estado='Finalizadas' and controladores.nombrepc='$nombreServidor' ");
		$traslado=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo inner join controladores on equipos.ubicacion=controladores.ubicacion where traslados.estado='Finalizadas' and controladores.nombrepc='$nombreServidor' ");
		}else{
		$mantenimiento=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo where mantenimientos.estado='Finalizadas' ");
		$traslado=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo where traslados.estado='Finalizadas'");
		}
			$mantenimientos=mysql_fetch_array($mantenimiento);
			$traslados=mysql_fetch_array($traslado);
			$cantidad=$mantenimientos['cantidad']+$traslados['cantidad'];
			   ?>
              <!-- --------------------------------------ACCIONES FINALIZADAS------------------------------------- -->
				<table align="center" border="2" bordercolor="#000" cellspacing="1" cellpadding="1" width="750">
             <tr>
			<th colspan="7"  style=" background-image:url(imagenes/Sin_titulo.png);" ><font color="#FFFFFF" size="+1">Acciones Finalizadas <?php echo"($cantidad)";?></font> <input type="button"value="ver" id="finalizadas1" /></th>
			</tr> 
            <table id='finaliza' style='display:none' border='1'>
				<tr valign="top" >
					<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Código Equipo</font>
          </td>
					<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Nombre</font>
                  </td>
<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Encargado</font>
                  </td>

<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Descripción</font>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >fecha inicio</font>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >fecha Entrega</font>
                  </td>
				</tr> 
        <?php
		//------------------------------------------------------MANTENIMIENTO FINALIZADO------------------------------------------
		if($_SESSION['cargo']!="Administrador"){
		$ip=$_SERVER['REMOTE_ADDR'];
		$nombreServidor=gethostbyaddr($ip);
		$sql="SELECT equipos.codigoequipo as codigo, equipos.nombre as nombre,mantenimientos.nombre as encargado, mantenimientos.descripcion as descripcion, mantenimientos.fecha as fecha , mantenimientos.fecharecuperacion as fecha2 FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo inner join controladores on equipos.ubicacion=controladores.ubicacion where mantenimientos.estado='Finalizadas' and controladores.nombrepc='$nombreServidor'";
		}else{
			$sql="SELECT equipos.codigoequipo as codigo, equipos.nombre as nombre,mantenimientos.nombre as encargado, mantenimientos.descripcion as descripcion, mantenimientos.fecha as fecha , mantenimientos.fecharecuperacion as fecha2 FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo where mantenimientos.estado='Finalizadas'";}
			$resul=mysql_query($sql);
			$fila=mysql_fetch_array($resul);
			for($i=0;$i<$fila;$i++) 
			{
				echo "<tr valign='top' >";
					echo"<td>";
						echo $fila['codigo'];
                    echo "</td>";
                    echo"<td>";
						echo $fila['nombre']; 
                    echo "</td>";
					
					echo"<td>";
						echo $fila['encargado'];
                    echo "</td>";
					echo"<td>";
						echo $fila['descripcion']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha2'];
                    echo "</td>";
				echo"</tr>";
					$fila=mysql_fetch_array($resul);
			}
			//-----------------------------------------------------------------TRASLADO FINALIZADO-------------------------------------------------
			if($_SESSION['cargo']!="Administrador"){
		$ip=$_SERVER['REMOTE_ADDR'];
		$nombreServidor=gethostbyaddr($ip);
		$sql="SELECT equipos.codigoequipo as codigo, equipos.nombre as nombre,traslados.nombre as encargado, traslados.ubicacion as descripcion, traslados.fecha as fecha , traslados.fechaentrega as fecha2 FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo inner join controladores on equipos.ubicacion=controladores.ubicacion where traslados.estado='Finalizadas'  and controladores.nombrepc='$nombreServidor'";
		}else{
			$sql="SELECT equipos.codigoequipo as codigo, equipos.nombre as nombre,traslados.nombre as encargado, traslados.ubicacion as descripcion, traslados.fecha as fecha , traslados.fechaentrega as fecha2 FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo where traslados.estado='Finalizadas' ";
			}
			$resul=mysql_query($sql);
			$fila=mysql_fetch_array($resul);
			for($i=0;$i<$fila;$i++) 
			{
				echo "<tr valign='top' >";
					echo"<td>";
						echo $fila['codigo'];
                    echo "</td>";
                    echo"<td>";
						echo $fila['nombre']; 
                    echo "</td>";
					
					echo"<td>";
						echo $fila['encargado'];
                    echo "</td>";
					echo"<td>";
						echo "Equipo Trasladado a ".$fila['descripcion']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha2'];
                    echo "</td>";
				echo"</tr>";
					$fila=mysql_fetch_array($resul);
			}
					
			  ?>
              </table>
              </table>
              <?php 
			  		$mantenimiento=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo where mantenimientos.estado='Proceso' and fecharecuperacion<'$today'");
			$mantenimientos=mysql_fetch_array($mantenimiento);
		$traslado=mysql_query("SELECT count(equipos.codigoequipo) as cantidad FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo where traslados.estado='Proceso' and fechaentrega<'$today'");
			$traslados=mysql_fetch_array($traslado);
			$cantidad=$mantenimientos['cantidad']+$traslados['cantidad'];
			  ?>
                <!-- --------------------------------------ACCIONES CADUCADAS------------------------------------- -->
          <table align="center" border="2" bordercolor="#000" cellspacing="1" cellpadding="1" width="750">
             <tr>
			<th colspan="7"  style=" background-image:url(imagenes/Sin_titulo.png);" ><font color="#FFFFFF" size="+1">Acciones Caducadas <?php echo"($cantidad)";?> <input type="button"value="ver" id="caducadas1" /></font></th>
			</tr> 
            <table id='caducadas' style='display:none' border='1'>
				<tr valign="top">
					<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Código Equipo</font>
          </td>
					<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Nombre</font>
                  </td>
<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Encargado</font>
                  </td>

<td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Descripción</font>
                  </td>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >fecha inicio</font>
                  </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >fecha Entrega</font>
                  </td>
                                    </td>
                  <td width="100" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Confirmar Acción</font>
                  </td>
				</tr> 
        <?php
		//------------------------------------------------------MANTENIMIENTO CADUCADO------------------------------------------
			$sql="SELECT mantenimientos.caduca as caduca,equipos.codigoequipo as codigo, equipos.nombre as nombre,mantenimientos.nombre as encargado, mantenimientos.descripcion as descripcion, mantenimientos.fecha as fecha , mantenimientos.fecharecuperacion as fecha2 FROM equipos inner join mantenimientos on equipos.codigoequipo=mantenimientos.codigoequipo where mantenimientos.estado='Proceso' and fecharecuperacion<'$today'";
			$resul=mysql_query($sql);
			$fila=mysql_fetch_array($resul);
			for($i=0;$i<$fila;$i++) 
			{
				echo "<tr valign='top'>";
					echo"<td>";
						echo $fila['codigo'];
                    echo "</td>";
                    echo"<td>";
						echo $fila['nombre']; 
                    echo "</td>";
					
					echo"<td>";
						echo $fila['encargado'];
                    echo "</td>";
					echo"<td>";
						echo $fila['descripcion']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha2'];
                    echo "</td>";
										echo"<td>";
						echo "<input type='text' id='mantenimientos".$i."' size='10' /><input type='button' numero='".$i."' codigo='".$fila['codigoM']."' value='enviar' id='mantenimiento".$i."' />";
                    echo "</td>";
				echo"</tr>";
				
								if($fila['caduca']!="si"){
					$correos=mysql_query("select * from usuarios where cargo='Administrador'");
		$correo=mysql_fetch_array($correos);
		for($e=0;$e<$correo;$e++) 
								{
									mail("$correo[correo]","Caduco Mantenimiento","Sr/a ".$correo['nombre']." el equipo cuyo nombre es: ".$fila['nombre']." no ha sido verificado en la fecha estipulada ".$fila['fecha2']." \n el dia ".strftime("%A %d de %B del %Y")." a las ".date("g:i:s a")."\n"); 	
									$correo=mysql_fetch_array($correos);
									mysql_query("UPDATE `mantenimientos` SET `caduca`='si' WHERE mantenimientos.estado='Proceso' and fecharecuperacion<'$today' and codigoequipo='".$fila['codigo']."'");
									}
					}
				
					$fila=mysql_fetch_array($resul);
			}
			//-----------------------------------------------------------------TRASLADO CADUCADO-------------------------------------------------
			$sql="SELECT traslados.caduca as caduca,equipos.codigoequipo as codigo, equipos.nombre as nombre,traslados.nombre as encargado, traslados.ubicacion as descripcion, traslados.fecha as fecha , traslados.fechaentrega as fecha2 FROM equipos inner join traslados on equipos.codigoequipo=traslados.codigoequipo where traslados.estado='Proceso' and fechaentrega<'$today'";
			$resul=mysql_query($sql);
			$fila=mysql_fetch_array($resul);
			for($i=0;$i<$fila;$i++) 
			{
				echo "<tr valign='top' >";
					echo"<td>";
						echo $fila['codigo'];
                    echo "</td>";
                    echo"<td>";
						echo $fila['nombre']; 
                    echo "</td>";
					
					echo"<td>";
						echo $fila['encargado'];
                    echo "</td>";
					echo"<td>";
						echo "Equipo Trasladado a ".$fila['descripcion']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha']; 
                    echo "</td>";
					echo"<td>";
						echo $fila['fecha2'];
                    echo "</td>";
								echo"<td>";
						echo "<input type='text' id='traslados".$i."' size='10' /><input type='submit' value='enviar' numero='".$i."' codigo='".$fila['codigoT']."' id='traslado".$i."' />";
                    echo "</td>";
				echo"</tr>";
				if($fila['caduca']!="si"){
					$correos=mysql_query("select * from usuarios where cargo='Administrador'");
		$correo=mysql_fetch_array($correos);
		for($e=0;$e<$correo;$e++) 
								{
									mail("$correo[correo]","Caduco Traslado","Sr/a ".$correo['nombre']." el equipo cuyo nombre es: ".$fila['nombre']." no ha sido verificado en la fecha estipulada ".$fila['fecha2']." \n el dia ".strftime("%A %d de %B del %Y")." a las ".date("g:i:s a")."\n"); 	
									$correo=mysql_fetch_array($correos);
									mysql_query("UPDATE `traslados` SET `caduca`='si' WHERE traslados.estado='Proceso' and fechaentrega<'$today' and codigoequipo='".$fila['codigo']."'");
									}
					}
					$fila=mysql_fetch_array($resul);
			}
					
			  ?>
              </table>
              </table>