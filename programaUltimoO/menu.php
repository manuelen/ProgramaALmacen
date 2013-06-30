<?php
if($_SESSION['cargo']!="Administrador"){
		$cedul=$_SESSION['cedula'];
		$ubi=$_SESSION['ubicacion'];
		$funcionas=mysql_query("select * from controladores where encargado = '20695525' and nombrepc = 'Personal-PC'");
		$funcionass=mysql_fetch_array($funcionas);
		if($funcionass!=true){}else{header('Location:ingresousuario.html');}
		}
 ?> 

	<div class="glossymenu">
    	<div id="menu" align="center">
  <font size="5">MEN&Uacute</font>
    </div>
    <?php 
	if (($_SESSION['cargo']=='Administrador')||($_SESSION['cargo']=='Encargado')){
    if($_SESSION['cargo']!='Encargado'){
		echo "<a class='menuitem submenuheader' href='central.php' style='text-align:left'>Sistema de Base de Datos</a>
		<div class='submenu'>
				<ul>
                    <li><a href='backup.php' target='mainFrame' style='text-align:left; font-size:15;'>&nbsp;&nbsp;-Copia de Seguridad de Base de Datos</a></li>
					<li><a href='backup_rest.php' target='mainFrame' style='text-align:left; font-size:15;'>&nbsp;&nbsp;-Restaurar Copia de Base de Datos</a></li>
				</ul>
			</div>
			<a class='menuitem submenuheader' href='central.php' style='text-align:left'>Administrador de Usuarios</a>
		<div class='submenu'>
				<ul>
					<!--<li><a href='recuperarcontrasena.php' target='mainFrame' style='text-align:left; font-size:15;'>&nbsp;&nbsp;-Recuperar Datos</a></li>
					<li><a href='modificardatos.php' target='mainFrame' style='text-align:left; font-size:15;'>&nbsp;&nbsp;-Modificar Usuario</a></li>--!>
                    <li><a href='registrousuario.php' target='mainFrame' style='text-align:left; font-size:15;'>&nbsp;&nbsp;-Registro de Usuarios</a></li>
					<li><a href='registrocontrolador.php' target='mainFrame' style='text-align:left; font-size:15;'>&nbsp;&nbsp;-Registro Equipos Manejadores</a></li>
				</ul>
			</div>";
	}
			echo "	<a class='menuitem submenuheader' href='central.php' style='text-align:left' >Registros</a>
			<div class='submenu'>
				<ul>
					<li><a href='registroencargado.php' target='mainFrame' style='text-align:left; font-size:15;'>&nbsp;&nbsp;-Personal</a></li>";
	if($_SESSION['cargo']!='Encargado'){
					echo "<li><a href='registrolaboratorio.php' target='mainFrame' style='text-align:left; font-size:15;'>&nbsp;&nbsp;-Laboratorio</a></li>";
	}
					echo" <li><a href='registroherramienta.php' target='mainFrame' style='text-align:left; font-size:15;'>&nbsp;&nbsp;-Equipos</a></li>
				</ul>
		</div>
        	
			 <a class='menuitem submenuheader' href='central.php' style='text-align:left' >Actividades</a>
			<div class='submenu'>
				<ul>
				   <li><a href='busqueda_avanzada1.php' target='mainFrame' style='text-align:left; font-size:15;'>&nbsp;&nbsp; -Procesos</a></li>
            <!--<li><a href='controlDeAcciones.php' target='mainFrame' style='text-align:left; font-size:15;'>&nbsp;&nbsp; -Control de Acciones</a></li>
				<li><a href='estadoequipo1.php' target='mainFrame' style='text-align:left; font-size:15;'>&nbsp;&nbsp; -Incorporara/Desincorporar Equipos</a></li>!-->
		</div>";
		}else{}?>

			<a class="menuitem submenuheader" href="central.php" style="text-align:left">Consulta Individual</a>
			<div class="submenu">
				<ul>
					<li><a href="herramienta.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Equipo</a></li>
                    <li><a href="encargado.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Personal</a></li>
                    <li><a href="laboratorio.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Laboratorio</a></li>
                    <li><a href="mantenimiento.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Mantenimiento</a></li>
                    <li><a href="translado.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Traslado</a></li>
                    <li><a href="estado.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Incorporado/Desincorporado</a></li                                        
				></ul>
			</div>
			<a class="menuitem submenuheader" href="central.php" style="text-align:left" >Consultas Generales</a>
			<div class="submenu">
				<ul>
					<li><a href="busqueda_avanzada.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Auditorias</a></li>
					<li><a href="cantidadherramienta1.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Equipos por Laboratorio</a></li>            
                    <li><a href="cantidadherramientatipo1.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Equipos por Tipo</a></li>
                    <li><a href="cantidadherramientaestado1.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Equipos Incorporado/Desincorporado</a></li>
                    <li><a href="equiposgeneral.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Equipos</a></li>
                    <li><a href="encargadogeneral.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Personal</a></li>
                    <li><a href="Laboratoriogeneral.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Laboratorios</a></li> 
                    <li><a href="mantenimientogeneral.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Mantenimiento de Equipos</a></li>     
					<li><a href="estadogeneral.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Incorporara/Desincorporar Equipos</a></li>                 
					<li><a href="trasladogeneral.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Traslado de Equipos</a></li>
					<li><a href="trasladoporfecha.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Traslados por Fecha</a></li>				  
				</ul>
                </div>
				<a class="menuitem submenuheader" href="central.php" style="text-align:left" >Reportes PDF</a>
			<div class="submenu">
				<ul>
					<li><a href="herramientapdf.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Equipos por Laboratorio</a></li>     
					<li><a href="trasladopdf.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Traslado por Laboratorio</a></li>    
					<li><a href="mantenimientopdf.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Mantenimiento por Laboratorio</a></li> 
					<li><a href="estadopdf.php" target="mainFrame" style="text-align:left; font-size:15;">&nbsp;&nbsp;-Incorporar/Desincorporar por Laboratorio</a></li> 
                    				  
				</ul>
                </div>
</div>

 <div id="cherry"><a href="contactenos.php"><img src="imagenes/contactenos.jpg"></a></div>
 </div>