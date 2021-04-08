<?php
require "../Modelo/conexionBasesDatos.php";
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST


$objConexion = Conectarse();

$sql="DELETE FROM pacientes WHERE idPaciente='$_REQUEST[idPaciente]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	
	header ("location:../vista/listarPacientes.php?x=3");
else
	header ("location:../vista/listarPacientes.php?x=4");

?>