<?php 
  session_start();

require_once "../modelos/Ingreso.php";
require '../ticket/autoload.php'; 
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;


$ingreso=new Ingreso();

$idusuario=$_SESSION["idusuario"];
$num_placa=isset($_POST["num_placa"])? limpiarCadena($_POST["num_placa"]):"";
$modelo=isset($_POST["modelo"])? limpiarCadena($_POST["modelo"]):"";
$marca=isset($_POST["marca"])? limpiarCadena($_POST["marca"]):"";
$idtipo=isset($_POST["idtipo"])? limpiarCadena($_POST["idtipo"]):"";
$color=isset($_POST["color"])? limpiarCadena($_POST["color"]):"";
$propietario=isset($_POST["propietario"])? limpiarCadena($_POST["propietario"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$observaciones=isset($_POST["observaciones"])? limpiarCadena($_POST["observaciones"]):"";
$idregistro=isset($_POST["idregistro"])? limpiarCadena($_POST["idregistro"]):"";

// escritorio

$placanew=isset($_POST["placanew"])? limpiarCadena($_POST["placanew"]):"";
$idregistro2=isset($_POST["idregistro2"])? limpiarCadena($_POST["idregistro2"]):"";

switch ($_GET["op"]){

	case 'guardaryeditar':
		if (empty($idregistro)){
			$rspta=$ingreso->insertar($num_placa,$modelo,$marca,$idtipo,$color,$propietario,$telefono,$idusuario);
			echo $rspta ? "Vehiculo registrado" : "No se pudieron registrar todos los datos del Vehiculo";
		}
		else {

			$rspta=$ingreso->editar($idregistro,$num_placa,$modelo,$marca,$idtipo,$color,$propietario,$telefono,$observaciones);
			echo $rspta ? "Vehiculo actualizado" : "Vehiculo no se pudo actualizar";
		}

	break;


	case 'mostrar':
		$rspta=$ingreso->mostrar($idregistro);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;


	case 'listar':
		$rspta=$ingreso->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->idregistro.')"><i class="fa fa-eye"></i></button>'.
 					' <button class="btn btn-danger" onclick="anular('.$reg->idregistro.')"><i class="fa fa-close"></i></button>',
 				"1"=>$reg->num_placa,
 				"2"=>$reg->idtipo,
 				"3"=>$reg->color,
 				"4"=>$reg->fecha
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

	case "selectTipo":
		require_once "../modelos/Tipo.php";
		$tipo = new Tipo();

		$rspta = $tipo->select();

		while ($reg = $rspta->fetch_object())
				{
					echo '<option value=' . $reg->idtipo . '>' . $reg->nombre . '</option>';
				}
	break;



	case 'listarEscri':


		ini_set('date.timezone','America/Lima'); // zona horaria lima
		$hora2=date("H:i:s");

		$rspta=$ingreso->listarEscri();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){

		//HORA DE INGRESO

			$segundos=strtotime('now') - strtotime($reg->fechahoy);
			$diferencia_dias=intval($segundos/60/60/24);
		    $dteStart = new DateTime($reg->horahoy); 
		    $dteEnd   = new DateTime($hora2); 
			$dteDiff  = $dteStart->diff($dteEnd); 

		    $duracion= $dteDiff->format("%H:%I"); 
		//HORA DE INGRESO

		// CONTROL DEL PRECIO

		list($horas, $minutos) = explode(':', $duracion);
		$min = ($horas * 60 ) + $minutos;
		$tiem_minutos=$diferencia_dias*1440;
		$i = $min+$tiem_minutos;
		$lim = 0;
		$din = $reg->valor;
		$din2 = $reg->valor;
		$tarifa = $reg->valor;
		$contador = $reg->valor;
		$tol=60-15;	//15 VALOR DE LA TOLERANCIA
		if($din2 < 5){
			if($i > 18){				///VEHICULOS PEQUEÑOSS
				while ($i >= $lim) {
		    	$lim=$lim+60;
		    	$tarifa=$tarifa+$contador;		// dinero 1 hora = 3 soles
				}	
					$lim2=$lim-$tol;		///// RATEO DESPUES DE LA HORA EN 18 MINUTOS
					if($lim2>$i){	
						$din=$tarifa-$contador-$contador;	
					}
					else{	
						$din=$tarifa-$contador;	
					}
			}else{
				$din = $reg->valor;
			}
		}else{
			while ($i >= $lim) {
		    	$lim=$lim+720;		// convertidor
		    	$tarifa=$tarifa+$contador;		// dinero 1 hora = 3 soles
			}
			if($i>5){
				$lim2=$lim+60-720;
				$din=$tarifa-$contador;
			}
			else{	$din=0;	}
		}

			$totalmin = $min+$tiem_minutos;

		$horas = floor($totalmin / 60);
		$minutos = floor(($totalmin - ($horas * 60)) );

		$tiempo_dias=$horas . ':' . $minutos;    
		// CONTROL DEL PRECIO

		//COLOR BOTON PRECIO
		$color1 = '3';
		$color2 = '10';
		//COLOR BOTON PRECIO


 			$data[]=array(
 				"0"=>(($reg->observaciones=="")?'<button class="btn btn-warning" onclick="mostrar('.$reg->idregistro.')">'.$reg->num_placa.'</button>':'<button class="btn btn-danger" onclick="mostrar('.$reg->idregistro.')">'.$reg->num_placa.'</button>'),
 				"1"=>$reg->horahoy,
 				"2"=>$tiempo_dias,
 				"3"=>$reg->nombre,
 				"4"=>(($din>$color1)?'<button class="btn btn-warning">'.$din.' soles</button>':'<button class="btn btn-success">'.$din.' soles</button>'),
 				"5"=>' <button class="btn btn-danger" onclick="anular('.$reg->idregistro.')"><i class="fa fa-close"></i></button>'

 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

	case 'verificar':
		$placanew=$_POST['placanew'];

		$rspta=$ingreso->verificar($placanew);

		$fetch=$rspta->fetch_object();

		if (isset($fetch))
	    {
	        //Declaramos las variables de de la placa
	        $_SESSION['idregistro']=$fetch->idregistro;
	        $_SESSION['placa']=$fetch->num_placa;
	        $_SESSION['activo']=$fetch->activo;

	    }
	    echo json_encode($fetch);
	break;


	case 'imprimir':
		$placanew=$_POST['placanew'];
		echo 'aqui esta la impresora '.$placanew;

		$nombre_impresora = "EPSON TM-T88V Receipt5"; 
		$placa=$placanew;

		$connector = new WindowsPrintConnector($nombre_impresora);
		$printer = new Printer($connector);
		#Mando un numero de respuesta para saber que se conecto correctamente.
		echo 1;

		$printer->setJustification(Printer::JUSTIFY_CENTER);

		try{
			$logo = EscposImage::load("perro3.png", false);
		    $printer->bitImage($logo);
		}catch(Exception $e){/*No hacemos nada si hay error*/}

		$printer->setJustification(Printer::JUSTIFY_LEFT);
		date_default_timezone_set("America/Lima"); 
		$printer->text("\n" . "   Hora de ingreso:............ " . date("H:i:s") . "\n");
		$printer->text("   Numero de Placa:............ " . $placa . "\n");
		$printer->text("   Tarifa minima por hora: " . "\n");
		$printer->text("   vehículos menores:.......... S/. 3.00 " . "\n" . "\n");

		$printer->setJustification(Printer::JUSTIFY_RIGHT);
		$printer->text("Fecha: " . date("Y-m-d") ."   ". "\n");
		# $printer->text("N°: " . $idin ."   ". "\n" . "\n");
		$printer->setJustification(Printer::JUSTIFY_CENTER);
		$printer->text("Conserve su ticket hasta la hora de salida Gracias\n");

		$printer->feed(1);
		$printer->cut();
		$printer->pulse();
		$printer->close();	        

 		echo json_encode($results);

	break;

	case 'registrar':
		if (empty($idregistro)){
			$rspta=$ingreso->registrar($placanew,$modelo,$marca,$idtipo,$color,$propietario,$telefono,$idusuario);
			echo $rspta ? "Vehiculo registrado e" : "No se pudieron registrar todos los datos del Vehiculo";
		}

	case 'volver':

		 $rspta=$ingreso->volver($idregistro);
 		echo $rspta ? " Ingresado a Cochera" : "Vehiculo no se puede registrado";

	break;

	case 'avisar':

 		echo "Vehiculo ya esta en la cochera";

	break;

	case 'anular':
		
		$rspta=$ingreso->anular($idregistro);
 		echo $rspta ? "Vehiculo anulado" : "Vehiculo no se puede anular";

	break;


}
?>