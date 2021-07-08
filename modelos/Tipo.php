<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Tipo
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($nombre,$Precio)
	{
		$sql="INSERT INTO tipoveliculo (nombre,valor)
		VALUES ('$nombre','$valor')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idtipo,$nombre,$valor)
	{
		$sql="UPDATE tipoveliculo SET nombre='$nombre',valor='$valor' WHERE idtipo='$idtipo'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar categorías
	public function desactivar($idtipo)
	{
		$sql="UPDATE tipoveliculo SET condicion='0' WHERE idtipo='$idtipo'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($idtipo)
	{
		$sql="UPDATE tipoveliculo SET condicion='1' WHERE idtipo='$idtipo'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idtipo)
	{
		$sql="SELECT * FROM tipoveliculo WHERE idtipo='$idtipo'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM tipoveliculo";
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM tipoveliculo";
		return ejecutarConsulta($sql);		
	}
}

?>