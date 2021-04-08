<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
//Consulta Datos Medico para poder Mostrar Medico en la Lista
$sql="Select idMedico, medNombres, medApellidos, medEspecialidad from medicos";
$medicos=$objConexion->query($sql);
//Consulta Datos Pacientes para poder Mostrar Pacientes en la Lista
$sql= "select idPaciente, pacIdentificacion, pacNombres, pacApellidos from pacientes";
$pacientes=$objConexion->query($sql);
//Consulta Datos Consltorios para poder Mostrar Consultorios en la Lista
$sql="select * from consultorios";
$consultorios=$objConexion->query($sql);
?>

<form id="form1" name="form1" method="post" action="../Controlador/validarAsignarCita.php">
  <table width="43%" border="0" align="center">
    <tr bgcolor="#cc0000" class="texto">
      <td colspan="2" align="center">ASIGNAR CITA</td>
    </tr>
    <tr>
      <td width="33%" align="right" bgcolor="#fbec88">Paciente:</td>
      <td width="67%"><select name="paciente" id="paciente" style="width:300px">
        <option value="0">Seleccione</option>
        <?php
		//Agrego a la lista paciente los pacientes existentes para poder seleccionar		
		while ($paciente=$pacientes->fetch_object())
		{
			?>
             <option value="<?php echo $paciente->idPaciente;?> ">
			 	<?php echo $paciente->pacIdentificacion. "-".$paciente->pacNombres." ".$paciente->pacApellidos;?>
             </option>
		<?php	
		}//cerrando el ciclo while		
		?>
      </select></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#fbec88">Fecha:</td>
      <td><label for="fecha"></label>
      <input type="date" name="fecha" id="fecha" required="required" style="width:290px" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#fbec88">Hora:</td>
      <td><input type="time" name="hora" id="hora" required="required" style="width:290px"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#fbec88">Medico:</td>
      <td><label for="medico"></label>
        <select name="medico" id="medico" style="width:300px">
          <option value="0">Seleccione</option>
          <?php
		  //Agrego a la lista Medico los Medicos existentes para poder seleccionar
		while ($medico=$medicos->fetch_object())
		{
		?>
             <option value="<?php echo $medico->idMedico;?>">
				<?php echo $medico->medNombres." ".$medico->medApellidos. "-->".$medico->medEspecialidad?> 
             </option>
		<?php	
		}//Cerrando ciclo while		
		?>          
      </select></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#fbec88">Consultorio</td>
      <td><select name="consultorio" id="consultorio" style="width:300px">
        <option value="0">Seleccione</option>
        <?php
		//Agrego a la lista Consultorio los Consultorios existentes para poder seleccionar
		while ($consultorio=$consultorios->fetch_object())
		{
		?>
             <option value="<?php echo $consultorio->idConsultorio;?> ">
			 	<?php echo $consultorio->conNombre?>
             </option>
		<?php	
		}	//cerrando cuclo while	
		?>        
      </select></td>
    </tr>
    <tr bgcolor="#cc0000" class="texto">
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
</form>


<p>
<?php
if ($msj==1)
	echo '<p align="center" >Se ha Asignado la cita correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al asignar la Cita, favor revisar';
?>