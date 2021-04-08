<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql="select p.pacNombres, p.pacApellidos, ci.citObservaciones 
from pacientes p, citas ci
where (p.idPaciente = ci.citPaciente) and 
	  (ci.idCita='$_REQUEST[idCita]')";	  
$citas = $objConexion->query($sql);
$cita=$citas->fetch_object();
?>
<form id="form1" name="form1" method="post" action="../Controlador/validarEditarCita.php">
  <table width="43%" border="0" align="center">
    <tr bgcolor="#cc0000" class="texto">
      <td colspan="2" align="center">ATENDER CITA</td>
    </tr>
    <tr>
      <td width="33%" align="right" bgcolor="#fbec88">Paciente:</td>
      <td width="67%"><label for="paciente"></label>
      <input name="paciente" type="text" id="paciente" readonly="readonly" size="60" 
      value="<?php echo $cita->pacNombres." ".$cita->pacApellidos?>" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#fbec88">Observaciones</td>
      <td><label for="observaciones"></label>
      <textarea name="observaciones" id="observaciones" cols="50" rows="10" required="required"></textarea></td>
    </tr>
    <tr bgcolor="#cc0000" class="texto">
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
  <input name="idCita" type="hidden" value="<?php echo $_REQUEST['idCita']?>" />
</form>
<p>