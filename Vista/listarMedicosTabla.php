<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Medico.php";
$objMedico = new Medico();
$medicos = $objMedico -> consultarMedicos();
?>
<h1 align="center">LISTADO DE MEDICOS</h1>
<table width="70%" border="1" align="center">
  <tr align="center" bgcolor="#cc0000" class="texto">
    <td>Identificacion</td>
    <td>Nombres</td>
    <td>Apellidos</td>
    <td>Especialidad</td>
    <td>Telefono</td>
    <td>Correo</td>
  </tr>
 <?php
while($registro = $medicos ->fetch_object())
{
?>
  <tr>
    <td><?php echo $registro->medIdentificacion?></td>
    <td><?php echo $registro->medNombres?></td>
    <td><?php echo $registro->medApellidos?></td>
    <td><?php echo $registro->medEspecialidad?></td>
    <td><?php echo $registro->medTelefono?></td>
    <td><?php echo $registro->medCorreo?></td>
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>