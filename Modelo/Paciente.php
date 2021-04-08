<?php
class Paciente
{
	private $identificacion;
	private $nombres;
	private $apellidos;
	private $sexo;
	private $fechaNacimiento;
	private $Conexion;
	
	public function setIdentificacion($identificacion)
	{
		$this->identificacion=$identificacion;
	}
	
	public function getIdentificacion()
	{
		return ($this->identificacion);
	}
	
	public function setNombres($nombres)
	{
		$this->nombres=$nombres;
	}
	
	public function getNombres()
	{
		return ($this->nombres);
	}
	
	public function setApellidos($apellidos)
	{
		$this->apellidos=$apellidos;
	}
	
	public function getApellidos()
	{
		return ($this->apellidos);
	}
	
	public function setSexo($sexo)
	{
		$this->sexo=$sexo;
	}
	
	public function getSexo()
	{
		return ($this->sexo);
	}
	
	public function setFechaNacimiento($fechaNacimiento)
	{
		$this->fechaNacimiento=$fechaNacimiento;
	}
	
	public function getFechaNacimiento()
	{
		return ($this->fechaNacimiento);
	}
	
	public function Paciente()
	{
		//$objConexion = Conectarse();
	}
	
	public function crearPaciente($identificacion,$nombres,$apellidos,$fechaNacimiento,$sexo)
	{
		$this->identificacion=$identificacion;
		$this->nombres=$nombres;
		$this->apellidos=$apellidos;
		$this->fechaNacimiento=$fechaNacimiento;
		$this->sexo=$sexo;
	}
	
	public function agregarPaciente()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into pacientes(pacIdentificacion,pacNombres,pacApellidos,pacFechaNacimiento,pacSexo)
values ('$this->identificacion','$this->nombres','$this->apellidos','$this->fechaNacimiento','$this->sexo')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarPacientes()
	{
		$this->Conexion=Conectarse();
		$sql="select * from pacientes";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarPaciente($identificacion)
	{
		$this->Conexion=Conectarse();
		$sql="select * from pacientes where pacIdentificacion='$identificacion'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
}

?>