<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
	header("location:../index.php?x=2");//x=2 significa que no han iniciado sesión
if (!isset($_REQUEST['pag']))
	$pag='contenido';
	
if (!isset($_REQUEST['msj']))
	$msj=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Plantilla Principal</title>
<script src="../Js/menu.js"> </script>
<link href="../Css/estilos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../Css/estiloMenu.css" >
</head>
<body>

<div id="divContenedor">
    <div id="divEncabezado"><?php include "encabezado.php"?></div>
	<div id="divMenu"> <?php include "menu.php"?> </div>
	<div id="divContenido"> <?php include $pag.".php" ?> </div>
    <div id="divPiePagina"><?php include "piePagina.php"?> </div>
</div>
</body>
</html>