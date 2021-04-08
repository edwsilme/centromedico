<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
//Guardamos en una variable la sentencia sql que permite actualizar la Cita
echo $sql="update citas 
set citObservaciones='$_REQUEST[observaciones]', citEstado='Atendido' 
where idCita='$_REQUEST[idCita]'";
//Ejecutamos la consulta llamando al método query del objeto conexión y pasando la sentencia sql
$resultado=$objConexion->query($sql);

if ($resultado)	
	header("location:../Vista/index2.php?pag=atenderCita&msj=1");
else
	header("location:../Vista/index2.php?pag=atenderCita&msj=2");
$objConexion->close();
?>





