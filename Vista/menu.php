<ul id="sddm">
	<li><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">Medicos</a>
		<div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="index2.php?pag=insertarMedico">Agregar</a>
		<a href="index2.php?pag=listarMedicosTabla">Consultar</a>
		<a href="index2.php?pag=listarMedico">Actualizar</a>		
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Pacientes</a>
		<div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="index2.php?pag=insertarPaciente">Agregar</a>
		<a href="index2.php?pag=listarPacientesTabla">Consultar</a>
		<a href="index2.php?pag=listarPacientes">Actualizar</a>	
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">Citas</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="index2.php?pag=insertarCita">Agregar</a>
		<a href="index2.php?pag=listarCitas">Consultar</a>
		<a href="index2.php?pag=atenderCita">Atender Cita</a>	
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">Reportes </a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="#">Medicos</a>
		<a href="#">Pacientes</a>
        <a href="#">Citas</a>
		</div>
	</li>
	<li><a href="salir.php" onmouseover="mopen('m5')" onmouseout="mclosetime()">Salir</a>
		
	</li>    
</ul>
<div>Usuario:   <?php echo $_SESSION['user']?> </div>
<div style="clear:both"></div>

<div style="clear:both"></div>