<?php
class Medico
{
	private $identificacion;
	private $nombres;
	private $apellidos;
	private $especialidad;
	private $correo;
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
	
	public function setEspecialidad($especialidad)
	{
		$this->especialidad=$especialidad;
	}
	
	public function getEspecialidad()
	{
		return ($this->especialidad);
	}
	
	public function setCorreo($correo)
	{
		$this->correo=$correo;
	}
	
	public function getCorreo()
	{
		return ($this->correo);
	}
	
	public function Medico()
	{
		//$objConexion = Conectarse();
	}
	
	public function crearMedico($identificacion,$nombres,$apellidos,$especialidad,$correo)
	{
		$this->identificacion=$identificacion;
		$this->nombres=$nombres;
		$this->apellidos=$apellidos;
		$this->especialidad=$especialidad;
		$this->correo=$correo;		
	}
	
	public function agregarMedico()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into medicos(medIdentificacion,medNombres,medApellidos,medEspecialidad,medCorreo)
values ('$this->identificacion','$this->nombres','$this->apellidos','$this->especialidad','$this->correo')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarMedicos()
	{
		$this->Conexion=Conectarse();
		$sql="select * from medicos";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarMedico($identificacion)
	{
		$this->Conexion=Conectarse();
		$sql="select * from medicos where medIdentificacion='$identificacion'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
}

?>