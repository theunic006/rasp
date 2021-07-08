<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Tutoria
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($apellidos,$nombres,$edad,$domicilio,$localidad,$telefono,$celular,$celularpadre,$celularmadre,$fechanacimiento,$lugarnacimiento,$distrito,$provincia,$departamento,$apellidopadre,$nombrepadre,$edadpadre,$profpadre,$trabpadre,$apellidomadre,$nombremadre,$edadmadre,$profmadre,$trabmadre,$canthermanos,$estadopadres,$viven,$solovive,$relacion,$conquienvives,$alguienmas,$dialogo,$dialogotext,$llevarhermano,$llevarhermanotext,$vivirfamilia,$vivirfamiliatext,$situacionespecial,$tiposestudio01,$tiposdeestudiotext02,$esperan03,$esperantext04,$problema01,$problema02,$problema03,$problema04,$problema05,$problema06,$problema07,$problema08,$problema09,$problema10,$problema11,$problema12,$problema13,$problema14,$motivo15,$actividades01,$actividades02,$actividades03,$actividades04,$actividades05,$actividades06,$motivo07,$calificaciones01,$dedicacion02,$convinene03,$amigo04,$datmedico01,$datmedico02,$datmedico03,$datmedico04,$datmedico05,$datmedico06,$datmedico07,$datmedico08,$datmedico09,$datmedico10,$datmedico11,$datmedico12,$datmedico13,$habito01,$habito02,$habito03,$habito04,$habito05,$habito06,$habito07,$habito08,$habito09,$otrasrazones10,$estudios01,$estudios02,$estudios03,$estudios04,$horariocol1,$horariocol2,$horariocol3,$horariocol4,$horariocol5,$horariocol6,$horariocol7,$horariocol8,$aficiones01,$aficiones02,$aficiones03,$aficiones04,$aficiones05,$aficiones06,$aficiones07,$aficiones08,$aficiones09)
	{
		$sql="INSERT INTO tutoria (apellidos,nombres,edad,domicilio,localidad,telefono,celular,celularpadre,celularmadre,fechanacimiento,lugarnacimiento,distrito,provincia,departamento,condicion,apellidopadre,nombrepadre,edadpadre,profpadre,trabpadre,apellidomadre,nombremadre,edadmadre,profmadre,trabmadre,canthermanos,estadopadres,viven,solovive,relacion,conquienvives,alguienmas,dialogo,dialogotext,llevarhermano,llevarhermanotext,vivirfamilia,vivirfamiliatext,situacionespecial)
		VALUES ('$apellidos','$nombres','$edad','$domicilio','$localidad','$telefono','$celular','$celularpadre','$celularmadre','$fechanacimiento','$lugarnacimiento','$distrito','$provincia','$departamento','1','$apellidopadre','$nombrepadre','$edadpadre','$profpadre','$trabpadre','$apellidomadre','$nombremadre','$edadmadre','$profmadre','$trabmadre','$canthermanos','$estadopadres','$viven','$solovive','$relacion','$conquienvives','$alguienmas','$dialogo','$dialogotext','$llevarhermano','$llevarhermanotext','$vivirfamilia','$vivirfamiliatext','$situacionespecial')";
		//return ejecutarConsulta($sql);
		$idtutorianew=ejecutarConsulta_retornarID($sql);


		$sw=true;

			$sql_detalle = "INSERT INTO datosescolares(idtutoria, tiposestudio01, tiposdeestudiotext02, esperan03, esperantext04, problema01, problema02, problema03, problema04, problema05, problema06, problema07, problema08, problema09, problema10, problema11, problema12, problema13, problema14, motivo15, actividades01, actividades02, actividades03, actividades04, actividades05, actividades06, motivo07, calificaciones01, dedicacion02, convinene03, amigo04, datmedico01, datmedico02, datmedico03, datmedico04, datmedico05, datmedico06, datmedico07, datmedico08, datmedico09, datmedico10, datmedico11, datmedico12, datmedico13) VALUES ('$idtutorianew','$tiposestudio01','$tiposdeestudiotext02','$esperan03','$esperantext04','$problema01','$problema02','$problema03','$problema04','$problema05','$problema06','$problema07','$problema08','$problema09','$problema10','$problema11','$problema12','$problema13','$problema14','$motivo15','$actividades01','$actividades02','$actividades03','$actividades04','$actividades05','$actividades06','$motivo07','$calificaciones01','$dedicacion02','$convinene03','$amigo04','$datmedico01','$datmedico02','$datmedico03','$datmedico04','$datmedico05','$datmedico06','$datmedico07','$datmedico08','$datmedico09','$datmedico10','$datmedico11','$datmedico12','$datmedico13')";

			ejecutarConsulta($sql_detalle) or $sw = false;

			$sql_detalle2 = "INSERT INTO habitosescolares(idtutoria, habito01, habito02, habito03, habito04, habito05, habito06, habito07, habito08, habito09, otrasrazones10, estudios01, estudios02, estudios03, estudios04) VALUES ('$idtutorianew','$habito01','$habito02','$habito03','$habito04','$habito05','$habito06','$habito07','$habito08','$habito09','$otrasrazones10','$estudios01','$estudios02','$estudios03','$estudios04')";

			ejecutarConsulta($sql_detalle2) or $sw = false;

			$sql_detalle4 = "INSERT INTO horario(idtutoria, horariocol1, horariocol2, horariocol3, horariocol4, horariocol5, horariocol6, horariocol7, horariocol8) VALUES ('$idtutorianew','$horariocol1','$horariocol2','$horariocol3','$horariocol4','$horariocol5','$horariocol6','$horariocol7','$horariocol8')";

			ejecutarConsulta($sql_detalle4) or $sw = false;

			$sql_detalle3 = "INSERT INTO aficiones(idtutoria, aficiones01, aficiones02, aficiones03, aficiones04, aficiones05, aficiones06, aficiones07, aficiones08, aficiones09) VALUES ('$idtutorianew','$aficiones01','$aficiones02','$aficiones03','$aficiones04','$aficiones05','$aficiones06','$aficiones07','$aficiones08','$aficiones09')";

			ejecutarConsulta($sql_detalle3) or $sw = false;

		return $sw;

	}

	//Implementamos un método para editar registros
	public function editar($idtutoria,$apellidos,$nombres,$edad,$domicilio,$localidad,$telefono,$celular,$celularpadre,$celularmadre,$fechanacimiento,$lugarnacimiento,$distrito,$provincia,$departamento,$apellidopadre,$nombrepadre,$edadpadre,$profpadre,$trabpadre,$apellidomadre,$nombremadre,$edadmadre,$profmadre,$trabmadre,$canthermanos,$estadopadres,$viven,$solovive,$relacion,$conquienvives,$alguienmas,$dialogo,$dialogotext,$llevarhermano,$llevarhermanotext,$vivirfamilia,$vivirfamiliatext,$situacionespecial,$tiposestudio01,$tiposdeestudiotext02,$esperan03,$esperantext04,$problema01,$problema02,$problema03,$problema04,$problema05,$problema06,$problema07,$problema08,$problema09,$problema10,$problema11,$problema12,$problema13,$problema14,$motivo15,$actividades01,$actividades02,$actividades03,$actividades04,$actividades05,$actividades06,$motivo07,$calificaciones01,$dedicacion02,$convinene03,$amigo04,$datmedico01,$datmedico02,$datmedico03,$datmedico04,$datmedico05,$datmedico06,$datmedico07,$datmedico08,$datmedico09,$datmedico10,$datmedico11,$datmedico12,$datmedico13,$habito01,$habito02,$habito03,$habito04,$habito05,$habito06,$habito07,$habito08,$habito09,$otrasrazones10,$estudios01,$estudios02,$estudios03,$estudios04,$horariocol1,$horariocol2,$horariocol3,$horariocol4,$horariocol5,$horariocol6,$horariocol7,$horariocol8,$aficiones01,$aficiones02,$aficiones03,$aficiones04,$aficiones05,$aficiones06,$aficiones07,$aficiones08,$aficiones09)
	{
		$sql="UPDATE tutoria SET nombre='$nombre',descripcion='$descripcion' WHERE idtutoria='$idtutoria'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar categorías
	public function desactivar($idtutoria)
	{
		$sql="UPDATE tutoria SET condicion='0' WHERE idtutoria='$idtutoria'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($idtutoria)
	{
		$sql="UPDATE tutoria SET condicion='1' WHERE idtutoria='$idtutoria'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idtutoria)
	{
		$sql="SELECT * FROM tutoria t INNER JOIN datosescolares e ON t.idtutoria=e.idtutoria INNER JOIN habitosescolares h ON t.idtutoria = h.idtutoria INNER JOIN horario o ON t.idtutoria = o.idtutoria INNER JOIN aficiones a ON t.idtutoria = a.idtutoria WHERE t.idtutoria = '$idtutoria'";
		return ejecutarConsultaSimpleFila($sql);
	}
	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrartodo($idtutoria)
	{
		$sql="SELECT * FROM tutoria WHERE idtutoria='$idtutoria'";
		return ejecutarConsultaSimpleFila($sql);
	}
	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM tutoria";
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM tutoria where condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>