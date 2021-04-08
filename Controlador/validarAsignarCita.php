<?php
session_start();
extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
//Asignar a $sql el texto de la Consulta
$sql="insert into citas (citFecha,citHora, citPaciente, citMedico, citConsultorio) values ('$_REQUEST[fecha]','$_REQUEST[hora]','$_REQUEST[paciente]','$_REQUEST[medico]','$_REQUEST[consultorio]')";

$resultado=$objConexion->query($sql);

if($resultado)
{
	/*si se ejecutó bien, se retorna a la pagina y se envia variable msj=1, indicando que
	se agregó correctamentw*/
	header("location:../Vista/index2.php?pag=insertarCita&msj=1");
}
else
{
	/*si no se ejecutó bien, se retorna a la pagina y se envia variable msj=2, indicando que
	no se puedo agregar*/
	header("location:../Vista/index2.php?pag=insertarCita&msj=2");
}

?>



