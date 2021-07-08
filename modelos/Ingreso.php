<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Ingreso
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($num_placa,$modelo,$marca,$idtipo,$color,$propietario,$telefono,$idusuario)
	{
		$sql="INSERT INTO registro (num_placa,modelo,marca,idtipo,color,propietario,telefono,observaciones,fecha,activo,idusuario)
		VALUES ('$num_placa','$modelo','$marca','$idtipo','$color','$propietario','$telefono','',now(),'1','$idusuario')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idregistro,$num_placa,$modelo,$marca,$idtipo,$color,$propietario,$telefono,$observaciones)
	{
		$sql="UPDATE registro SET num_placa='$num_placa',modelo='$modelo',marca='$marca',idtipo='$idtipo',color='$color',propietario='$propietario',telefono='$telefono',observaciones='$observaciones' WHERE idregistro='$idregistro'";
		return ejecutarConsulta($sql);
	}



	//Implementamos un método para eliminar categorías

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idregistro)
	{
		$sql="SELECT * FROM registro WHERE idregistro='$idregistro'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function listarDetalle($idingreso)
	{
		$sql="SELECT di.idingreso,di.idarticulo,a.nombre,di.cantidad,di.precio_compra,di.precio_venta FROM detalle_ingreso di inner join articulo a on di.idarticulo=a.idarticulo where di.idingreso='$idingreso'";
		return ejecutarConsulta($sql);
	}
	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM registro  ORDER BY fecha desc";
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros
	public function listarEscri()
	{
		$sql="SELECT r.idregistro,r.num_placa,r.fechahoy,r.horahoy,t.nombre,r.activo,t.valor,r.observaciones FROM registro r INNER JOIN tipoveliculo t ON r.idtipo=t.idtipo WHERE r.activo = '1' ORDER BY r.idregistro DESC";
		return ejecutarConsulta($sql);		
	}

	//Función para verificar el acceso al sistema
	public function verificar($num_placa)
    {
    	$sql="SELECT idregistro,num_placa,activo FROM registro WHERE num_placa='$num_placa'"; 
    	return ejecutarConsulta($sql);  
    }

	public function imprimir($num_placa)
    {
    	$sql="SELECT idregistro,num_placa FROM registro WHERE num_placa='$num_placa'"; 
    	return ejecutarConsulta($sql);  
    }
	public function registrar($placanew,$modelo,$marca,$idtipo,$color,$propietario,$telefono,$idusuario)
	{
		$sql="INSERT INTO registro (num_placa,modelo,marca,idtipo,color,propietario,telefono,observaciones,fecha,activo,fechahoy,horahoy,idusuario)
		VALUES ('$placanew','$modelo','$marca','8','$color','$propietario','$telefono','',now(),'1',curdate(),curtime(),'$idusuario')";
		return ejecutarConsulta($sql);
	}


	public function volver($idregistro)
	{
		$sql="UPDATE registro SET activo='1',fechahoy=curdate(),horahoy=curtime() WHERE num_placa='$idregistro'";
		return ejecutarConsulta($sql);
	}

	public function anular($idregistro)
	{
		$sql="UPDATE registro SET activo='0',fechahoy=null,horahoy=null WHERE idregistro='$idregistro'";
		return ejecutarConsulta($sql);
	}
	
}

?>