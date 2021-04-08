<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
/*hacemos la sentencia sql que me permita traer datos de las tablas medicos, pacientes,
pacientes y citas, para las citas con estado Asignado, o sea que no se han atendido*/
$sql="select ci.idCita, p.pacNombres, p.pacApellidos, m.medNombres, m.medApellidos, m.medespecialidad, 
c.conNombre, ci.citFecha, ci.citHora, ci.citEstado, ci.citObservaciones 
from pacientes p, medicos m, consultorios c, citas ci
where (p.idPaciente = ci.citPaciente) and 
	  (m.idMedico = ci.citMedico) and 
	  (c.idConsultorio = ci.citConsultorio) and
	  (ci.citEstado='Asignado')";	  
$citas = $objConexion->query($sql);
?>
<h1 align="center">LISTADO DE CITAS POR ATENDER</h1>
<table width="90%" border="1" align="center">
  <tr align="center" bgcolor="#cc0000" class="texto">
    <td>Fecha</td>
    <td>Hora</td>
    <td>Paciente</td>
    <td>Medico</td>
    <td>Consultorio</td>
    <td>Estado</td>
    <td>Atender</td>
  </tr>
 <?php
while($cita=$citas->fetch_object())
{
?>
  <tr>
    <td><?php echo $cita->citFecha?></td>
    <td><?php echo $cita->citHora?></td>
    <td><?php echo $cita->pacNombres." ".$cita->pacApellidos?></td>
    <td><?php echo $cita->medNombres." ".$cita->medApellidos?></td>
    <td><?php echo $cita->conNombre?></td>
    <td><?php echo $cita->citEstado?></td>
    <td align="center">
    	<a href="index2.php?pag=editarCita&idCita=<?php echo $cita->idCita?>" title="Clic para Atender la Cita">
    	<img src="../Recursos/editarCita.png" width="30" height="30" /></a>
    </td>
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>
<?php
if ($msj==1)
	echo "<br><p align='center'> La Cita se Actualizó Correctamente";
if ($msj==2)
	echo "<br><p align='center'> Problemas para Actualizar la Cita";
?>

