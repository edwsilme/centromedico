<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Paciente.php";
$objPaciente=new Paciente();
$pacientes=$objPaciente->consultarPacientes();
?>
<h1 align="center">LISTADO DE PACIENTES</h1>
<table width="70%" border="1" align="center">
  <tr align="center" bgcolor="#cc0000" class="texto">
    <td>Identificacion</td>
    <td>Nombres</td>
    <td>Apellidos</td>
    <td>Fecha Nacimiento</td>
    <td>Sexo</td>
  </tr>
 <?php
while($registro=$pacientes->fetch_object())
{
?>
  <tr>
    <td><?php echo $registro->pacIdentificacion?></td>
    <td><?php echo $registro->pacNombres?></td>
    <td><?php echo $registro->pacApellidos?></td>
    <td><?php echo $registro->pacFechaNacimiento?></td>
    <td><?php echo $registro->pacSexo?></td>
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>