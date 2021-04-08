<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Medico.php";
//Creamos el objeto Medico
$objMedico = new Medico();
$objMedico -> CrearMedico ($_REQUEST['identificacion'],$_REQUEST['nombres'],$_REQUEST['apellidos'],
$_REQUEST['especialidad'],$_REQUEST['telefono']),$_REQUEST['correo']);

$resultado = $objMedico -> agregarMedico();
if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarMedico&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarMedico&msj=2");

?>