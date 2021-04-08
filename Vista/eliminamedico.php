<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="delete from medicos where idMedico = '$_REQUEST[idMedico]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header("location: ../vista/listarmedicostabla.php?x=3");  //x=3 quiere decir que se eliminó bien
else
	header("location: ../vista/listarmedicostabla.php?x=4");  //x=4 quiere decir que no se pudo eliminar.
?>