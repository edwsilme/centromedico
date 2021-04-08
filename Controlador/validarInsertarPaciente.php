<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Paciente.php";
//Creamos el objeto Paciente
$objPaciente= new Paciente();
$objPaciente->CrearPaciente($_REQUEST['identificacion'],$_REQUEST['nombres'],$_REQUEST['apellidos'],
$_REQUEST['fechaNacimiento'],$_REQUEST['sexo']);

$resultado = $objPaciente->agregarPaciente();
if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarPaciente&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarPaciente&msj=2");

?>



