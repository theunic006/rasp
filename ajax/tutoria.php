<?php 
require_once "../modelos/Tutoria.php";

$tutoria=new Tutoria();

$idtutoria=isset($_POST["idtutoria"])? limpiarCadena($_POST["idtutoria"]):"";
$apellidos=isset($_POST["apellidos"])? limpiarCadena($_POST["apellidos"]):"";
$nombres=isset($_POST["nombres"])? limpiarCadena($_POST["nombres"]):"";
$edad=isset($_POST["edad"])? limpiarCadena($_POST["edad"]):"";
$domicilio=isset($_POST["domicilio"])? limpiarCadena($_POST["domicilio"]):"";
$localidad=isset($_POST["localidad"])? limpiarCadena($_POST["localidad"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$celular=isset($_POST["celular"])? limpiarCadena($_POST["celular"]):"";
$celularpadre=isset($_POST["celularpadre"])? limpiarCadena($_POST["celularpadre"]):"";
$celularmadre=isset($_POST["celularmadre"])? limpiarCadena($_POST["celularmadre"]):"";
$fechanacimiento=isset($_POST["fechanacimiento"])? limpiarCadena($_POST["fechanacimiento"]):"";
$lugarnacimiento=isset($_POST["lugarnacimiento"])? limpiarCadena($_POST["lugarnacimiento"]):"";
$distrito=isset($_POST["distrito"])? limpiarCadena($_POST["distrito"]):"";
$provincia=isset($_POST["provincia"])? limpiarCadena($_POST["provincia"]):"";
$departamento=isset($_POST["departamento"])? limpiarCadena($_POST["departamento"]):"";
$apellidopadre=isset($_POST["apellidopadre"])? limpiarCadena($_POST["apellidopadre"]):"";
$nombrepadre=isset($_POST["nombrepadre"])? limpiarCadena($_POST["nombrepadre"]):"";
$edadpadre=isset($_POST["edadpadre"])? limpiarCadena($_POST["edadpadre"]):"";
$profpadre=isset($_POST["profpadre"])? limpiarCadena($_POST["profpadre"]):"";
$trabpadre=isset($_POST["trabpadre"])? limpiarCadena($_POST["trabpadre"]):"";
$apellidomadre=isset($_POST["apellidomadre"])? limpiarCadena($_POST["apellidomadre"]):"";
$nombremadre=isset($_POST["nombremadre"])? limpiarCadena($_POST["nombremadre"]):"";
$edadmadre=isset($_POST["edadmadre"])? limpiarCadena($_POST["edadmadre"]):"";
$profmadre=isset($_POST["profmadre"])? limpiarCadena($_POST["profmadre"]):"";
$trabmadre=isset($_POST["trabmadre"])? limpiarCadena($_POST["trabmadre"]):"";
$canthermanos=isset($_POST["canthermanos"])? limpiarCadena($_POST["canthermanos"]):"";

$estadopadres=isset($_POST["estadopadres"])? limpiarCadena($_POST["estadopadres"]):"";
$viven=isset($_POST["viven"])? limpiarCadena($_POST["viven"]):"";
$solovive=isset($_POST["solovive"])? limpiarCadena($_POST["solovive"]):"";
$relacion=isset($_POST["relacion"])? limpiarCadena($_POST["relacion"]):"";
$conquienvives=isset($_POST["conquienvives"])? limpiarCadena($_POST["conquienvives"]):"";
$alguienmas=isset($_POST["alguienmas"])? limpiarCadena($_POST["alguienmas"]):"";
$situacionespecial=isset($_POST["situacionespecial"])? limpiarCadena($_POST["situacionespecial"]):"";
$dialogo=isset($_POST["dialogo"])? limpiarCadena($_POST["dialogo"]):"";
$dialogotext=isset($_POST["dialogotext"])? limpiarCadena($_POST["dialogotext"]):"";
$llevarhermano=isset($_POST["llevarhermano"])? limpiarCadena($_POST["llevarhermano"]):"";
$llevarhermanotext=isset($_POST["llevarhermanotext"])? limpiarCadena($_POST["llevarhermanotext"]):"";
$vivirfamilia=isset($_POST["vivirfamilia"])? limpiarCadena($_POST["vivirfamilia"]):"";
$vivirfamiliatext=isset($_POST["vivirfamiliatext"])? limpiarCadena($_POST["vivirfamiliatext"]):"";

//DATOS ESCOLARES
$tiposestudio01=isset($_POST["tiposestudio01"])? limpiarCadena($_POST["tiposestudio01"]):"";
$tiposdeestudiotext02=isset($_POST["tiposdeestudiotext02"])? limpiarCadena($_POST["tiposdeestudiotext02"]):"";
$esperan03=isset($_POST["esperan03"])? limpiarCadena($_POST["esperan03"]):"";
$esperantext04=isset($_POST["esperantext04"])? limpiarCadena($_POST["esperantext04"]):"";
$problema01=isset($_POST["problema01"])? limpiarCadena($_POST["problema01"]):"";
$problema02=isset($_POST["problema02"])? limpiarCadena($_POST["problema02"]):"";
$problema03=isset($_POST["problema03"])? limpiarCadena($_POST["problema03"]):"";
$problema04=isset($_POST["problema04"])? limpiarCadena($_POST["problema04"]):"";
$problema05=isset($_POST["problema05"])? limpiarCadena($_POST["problema05"]):"";
$problema06=isset($_POST["problema06"])? limpiarCadena($_POST["problema06"]):"";
$problema07=isset($_POST["problema07"])? limpiarCadena($_POST["problema07"]):"";
$problema08=isset($_POST["problema08"])? limpiarCadena($_POST["problema08"]):"";
$problema09=isset($_POST["problema09"])? limpiarCadena($_POST["problema09"]):"";
$problema10=isset($_POST["problema10"])? limpiarCadena($_POST["problema10"]):"";
$problema11=isset($_POST["problema11"])? limpiarCadena($_POST["problema11"]):"";
$problema12=isset($_POST["problema12"])? limpiarCadena($_POST["problema12"]):"";
$problema13=isset($_POST["problema13"])? limpiarCadena($_POST["problema13"]):"";
$problema14=isset($_POST["problema14"])? limpiarCadena($_POST["problema14"]):"";
$motivo15=isset($_POST["motivo15"])? limpiarCadena($_POST["motivo15"]):"";

$actividades01=isset($_POST["actividades01"])? limpiarCadena($_POST["actividades01"]):"";
$actividades02=isset($_POST["actividades02"])? limpiarCadena($_POST["actividades02"]):"";
$actividades03=isset($_POST["actividades03"])? limpiarCadena($_POST["actividades03"]):"";
$actividades04=isset($_POST["actividades04"])? limpiarCadena($_POST["actividades04"]):"";
$actividades05=isset($_POST["actividades05"])? limpiarCadena($_POST["actividades05"]):"";
$actividades06=isset($_POST["actividades06"])? limpiarCadena($_POST["actividades06"]):"";
$motivo07=isset($_POST["motivo07"])? limpiarCadena($_POST["motivo07"]):"";
$calificaciones01=isset($_POST["calificaciones01"])? limpiarCadena($_POST["calificaciones01"]):"";
$dedicacion02=isset($_POST["dedicacion02"])? limpiarCadena($_POST["dedicacion02"]):"";
$convinene03=isset($_POST["convinene03"])? limpiarCadena($_POST["convinene03"]):"";
$amigo04=isset($_POST["amigo04"])? limpiarCadena($_POST["amigo04"]):"";

//DATOS MADICOS
$datmedico01=isset($_POST["datmedico01"])? limpiarCadena($_POST["datmedico01"]):"";
$datmedico02=isset($_POST["datmedico02"])? limpiarCadena($_POST["datmedico02"]):"";
$datmedico03=isset($_POST["datmedico03"])? limpiarCadena($_POST["datmedico03"]):"";
$datmedico04=isset($_POST["datmedico04"])? limpiarCadena($_POST["datmedico04"]):"";
$datmedico05=isset($_POST["datmedico05"])? limpiarCadena($_POST["datmedico05"]):"";
$datmedico06=isset($_POST["datmedico06"])? limpiarCadena($_POST["datmedico06"]):"";
$datmedico07=isset($_POST["datmedico07"])? limpiarCadena($_POST["datmedico07"]):"";
$datmedico08=isset($_POST["datmedico08"])? limpiarCadena($_POST["datmedico08"]):"";
$datmedico09=isset($_POST["datmedico09"])? limpiarCadena($_POST["datmedico09"]):"";
$datmedico10=isset($_POST["datmedico10"])? limpiarCadena($_POST["datmedico10"]):"";
$datmedico11=isset($_POST["datmedico11"])? limpiarCadena($_POST["datmedico11"]):"";
$datmedico12=isset($_POST["datmedico12"])? limpiarCadena($_POST["datmedico12"]):"";
$datmedico13=isset($_POST["datmedico13"])? limpiarCadena($_POST["datmedico13"]):"";

//HABITOS

$habito01=isset($_POST["habito01"])? limpiarCadena($_POST["habito01"]):"";
$habito02=isset($_POST["habito02"])? limpiarCadena($_POST["habito02"]):"";
$habito03=isset($_POST["habito03"])? limpiarCadena($_POST["habito03"]):"";
$habito04=isset($_POST["habito04"])? limpiarCadena($_POST["habito04"]):"";
$habito05=isset($_POST["habito05"])? limpiarCadena($_POST["habito05"]):"";
$habito06=isset($_POST["habito06"])? limpiarCadena($_POST["habito06"]):"";
$habito07=isset($_POST["habito07"])? limpiarCadena($_POST["habito07"]):"";
$habito08=isset($_POST["habito08"])? limpiarCadena($_POST["habito08"]):"";
$habito09=isset($_POST["habito09"])? limpiarCadena($_POST["habito09"]):"";
$otrasrazones10=isset($_POST["otrasrazones10"])? limpiarCadena($_POST["otrasrazones10"]):"";
$estudios01=isset($_POST["estudios01"])? limpiarCadena($_POST["estudios01"]):"";
$estudios02=isset($_POST["estudios02"])? limpiarCadena($_POST["estudios02"]):"";
$estudios03=isset($_POST["estudios03"])? limpiarCadena($_POST["estudios03"]):"";
$estudios04=isset($_POST["estudios04"])? limpiarCadena($_POST["estudios04"]):"";

//HORARIO 
//
$horariocol1=isset($_POST["horariocol1"])? limpiarCadena($_POST["horariocol1"]):"";
$horariocol2=isset($_POST["horariocol2"])? limpiarCadena($_POST["horariocol2"]):"";
$horariocol3=isset($_POST["horariocol3"])? limpiarCadena($_POST["horariocol3"]):"";
$horariocol4=isset($_POST["horariocol4"])? limpiarCadena($_POST["horariocol4"]):"";
$horariocol5=isset($_POST["horariocol5"])? limpiarCadena($_POST["horariocol5"]):"";
$horariocol6=isset($_POST["horariocol6"])? limpiarCadena($_POST["horariocol6"]):"";
$horariocol7=isset($_POST["horariocol7"])? limpiarCadena($_POST["horariocol7"]):"";
$horariocol8=isset($_POST["horariocol8"])? limpiarCadena($_POST["horariocol8"]):"";

//AFICIONES
//

$aficiones01=isset($_POST["aficiones01"])? limpiarCadena($_POST["aficiones01"]):"";
$aficiones02=isset($_POST["aficiones02"])? limpiarCadena($_POST["aficiones02"]):"";
$aficiones03=isset($_POST["aficiones03"])? limpiarCadena($_POST["aficiones03"]):"";
$aficiones04=isset($_POST["aficiones04"])? limpiarCadena($_POST["aficiones04"]):"";
$aficiones05=isset($_POST["aficiones05"])? limpiarCadena($_POST["aficiones05"]):"";
$aficiones06=isset($_POST["aficiones06"])? limpiarCadena($_POST["aficiones06"]):"";
$aficiones07=isset($_POST["aficiones07"])? limpiarCadena($_POST["aficiones07"]):"";
$aficiones08=isset($_POST["aficiones08"])? limpiarCadena($_POST["aficiones08"]):"";
$aficiones09=isset($_POST["aficiones09"])? limpiarCadena($_POST["aficiones09"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idtutoria)){
			$rspta=$tutoria->insertar($apellidos,$nombres,$edad,$domicilio,$localidad,$telefono,$celular,$celularpadre,$celularmadre,$fechanacimiento,$lugarnacimiento,$distrito,$provincia,$departamento,$apellidopadre,$nombrepadre,$edadpadre,$profpadre,$trabpadre,$apellidomadre,$nombremadre,$edadmadre,$profmadre,$trabmadre,$canthermanos,$estadopadres,$viven,$solovive,$relacion,$conquienvives,$alguienmas,$dialogo,$dialogotext,$llevarhermano,$llevarhermanotext,$vivirfamilia,$vivirfamiliatext,$situacionespecial,$tiposestudio01,$tiposdeestudiotext02,$esperan03,$esperantext04,$problema01,$problema02,$problema03,$problema04,$problema05,$problema06,$problema07,$problema08,$problema09,$problema10,$problema11,$problema12,$problema13,$problema14,$motivo15,$actividades01,$actividades02,$actividades03,$actividades04,$actividades05,$actividades06,$motivo07,$calificaciones01,$dedicacion02,$convinene03,$amigo04,$datmedico01,$datmedico02,$datmedico03,$datmedico04,$datmedico05,$datmedico06,$datmedico07,$datmedico08,$datmedico09,$datmedico10,$datmedico11,$datmedico12,$datmedico13,$habito01,$habito02,$habito03,$habito04,$habito05,$habito06,$habito07,$habito08,$habito09,$otrasrazones10,$estudios01,$estudios02,$estudios03,$estudios04,$horariocol1,$horariocol2,$horariocol3,$horariocol4,$horariocol5,$horariocol6,$horariocol7,$horariocol8,$aficiones01,$aficiones02,$aficiones03,$aficiones04,$aficiones05,$aficiones06,$aficiones07,$aficiones08,$aficiones09);
			echo $rspta ? "Estudiante registrado" : "Estudiante no se pudo registrar";
		}
		else {
			$rspta=$tutoria->editar($idtutoria,$apellidos,$nombres,$edad,$domicilio,$localidad,$telefono,$celular,$celularpadre,$celularmadre,$fechanacimiento,$lugarnacimiento,$distrito,$provincia,$departamento,$apellidopadre,$nombrepadre,$edadpadre,$profpadre,$trabpadre,$apellidomadre,$nombremadre,$edadmadre,$profmadre,$trabmadre,$canthermanos,$estadopadres,$viven,$solovive,$relacion,$conquienvives,$alguienmas,$dialogo,$dialogotext,$llevarhermano,$llevarhermanotext,$vivirfamilia,$vivirfamiliatext,$situacionespecial,$tiposestudio01,$tiposdeestudiotext02,$esperan03,$esperantext04,$problema01,$problema02,$problema03,$problema04,$problema05,$problema06,$problema07,$problema08,$problema09,$problema10,$problema11,$problema12,$problema13,$problema14,$motivo15,$actividades01,$actividades02,$actividades03,$actividades04,$actividades05,$actividades06,$motivo07,$calificaciones01,$dedicacion02,$convinene03,$amigo04,$datmedico01,$datmedico02,$datmedico03,$datmedico04,$datmedico05,$datmedico06,$datmedico07,$datmedico08,$datmedico09,$datmedico10,$datmedico11,$datmedico12,$datmedico13,$habito01,$habito02,$habito03,$habito04,$habito05,$habito06,$habito07,$habito08,$habito09,$otrasrazones10,$estudios01,$estudios02,$estudios03,$estudios04,$horariocol1,$horariocol2,$horariocol3,$horariocol4,$horariocol5,$horariocol6,$horariocol7,$horariocol8,$aficiones01,$aficiones02,$aficiones03,$aficiones04,$aficiones05,$aficiones06,$aficiones07,$aficiones08,$aficiones09);
			echo $rspta ? "Estudiante actualizado" : "Estudiante no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$tutoria->desactivar($idtutoria);
 		echo $rspta ? "Alumno Desactivo" : "Alumno no se puede desactivar";
	break;

	case 'activar':
		$rspta=$tutoria->activar($idtutoria);
 		echo $rspta ? "Alumno Activo" : "Alumno no se puede activar";
	break;

	case 'mostrar':
		$rspta=$tutoria->mostrar($idtutoria);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$tutoria->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idtutoria.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idtutoria.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idtutoria.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idtutoria.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->apellidos,
 				"2"=>$reg->nombres,
 				"3"=>$reg->nombres,
 				"4"=>$reg->celular,
 				"5"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
}
?>