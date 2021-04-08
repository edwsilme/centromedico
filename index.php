<?php
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$x=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Plantilla Principal</title>
<script src="Js/menu.js"> </script>
<link href="Css/estilos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="Css/estiloMenu.css" >
</head>
<body>

<div id="divContenedor">
    <div id="divEncabezado"><?php include "Vista/encabezado.php"?></div>
	<div id="divContenido"> <?php include "Vista/iniciarSesion.php" ?> </div>
    <div id="divPiePagina"><?php include "Vista/piePagina.php"?> </div>
</div>
</body>
</html>