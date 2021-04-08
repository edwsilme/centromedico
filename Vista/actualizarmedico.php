<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql="select medIdentificacion, medNombres, medApellidos, medEspecialidad, medTelefono, medCorreo from medicos where idMedico = '$_REQUEST[idMedico]'";  
$resultadoMedicos = $objConexion->query($sql);
$medicosr=$resultadoMedicos->fetch_object();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Actualizar Medico</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="../Controlador/validaractualizarmedico.php">
  <table width="42%" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00">ACTUALIZAR MEDICO</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">Identificacion</td>
      <td width="63%"><label for="identificacion"></label>
      
      <input name="identificacion" type="int" id="identificacion" value="<?php echo $medicosr->medIdentificacion ?>" size="40" required/>
      
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Nombre</td>
      <td><label for="nombre"></label>
      <input name="nombre" type="text" id="nombre" value="<?php echo $medicosr->medNombres?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Apellido</td>
      <td><label for="apellido"></label>
      <input name="apellido" type="text" id="apellido" style="width:270px" value="<?php echo $medicosr->medApellidos ?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Especialidad</td>
      <td><label for="especialidad"></label>
      <input name="especialidad" type="text" id="especialidad" value="<?php echo $medicosr->medEspecialidad?>" size="40" /></td>
    </tr>
	  <tr>
      <td align="right" bgcolor="#EAEAEA">Telefono</td>
      <td><label for="telefono"></label>
      <input name="telefono" type="text" id="telefono" value="<?php echo $medicosr->medTelefono?>" size="40" /></td>
    </tr>
	  <tr>
      <td align="right" bgcolor="#EAEAEA">Correo</td>
      <td><label for="correo"></label>
      <input name="correo" type="email" id="correo" value="<?php echo $medicosr->medCorreo?>" size="40" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
 
</table>

   <input name="idMedico" type="hidden" value="<?php echo $_REQUEST['idMedico'] ?>" />
		  
</form>
</body>
</html>