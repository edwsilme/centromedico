<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql="select pacIdentificacion, pacNombres, pacApellidos, pacFechaNacimiento, pacSexo from pacientes where idPaciente = '$_REQUEST[idPaciente]'";  
$resultadoPaciente = $objConexion->query($sql);
$registro = $resultadoPaciente->fetch_object();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Actualizar Pacientes</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="../Controlador/validaractualizarpaciente.php">
  <table width="42%" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00">ACTUALIZAR PACIENTE</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">Identificacion</td> 
      <td width="63%"><label for="identificacion"></label>
      
      <input name="identificacion" type="text" id="identificacion" value="<?php echo $registro->pacIdentificacion ?>" size="40" />
      
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Nombre</td>
      <td><label for="nombre"></label>
      <input name="nombre" type="text" id="nombre" value="<?php echo $registro->pacNombres?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Apellido</td>
      <td><label for="apellido"></label>
      <input name="apellido" type="text" id="apellido" style="width:270px" value="<?php echo $registro->pacApellidos ?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Fecha Nacimiento</td>
      <td><label for="fechanacimiento"></label>
      <input name="fechanacimiento" type="date" id="fechanacimiento" value="<?php echo $registro->pacFechaNacimiento?>" size="40" /></td>
    </tr>
	 
    <tr>
      <td align="right" bgcolor="#EAEAEA">Sexo</td>
      <td><label for="sexo"></label>
        <select name="sexo" id="sexo" style="width:270px">
          <option value="0">Seleccione</option>
          
		  <?php 
			  
		  if ($registro->pacSexo=="Femenino")
		  {		  
		  ?>
              <option value="Femenino" selected="selected">Femenino</option>
              <option value="Masculino">Masculino</option>
          <?php
          }
		  else
		  {
          ?>
          		<option value="Femenino">Femenino</option>
                <option value="Masculino" selected="selected">Masculino</option>
           <?php
		  }
		  ?>          
      </select>
        
        
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
	</table>
   <input name="idPaciente" type="hidden" value="<?php echo $_REQUEST['idPaciente'] ?>" />
		  
</form>
</body>
</html>