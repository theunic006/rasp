<?php 
require_once "../modelos/Salida.php";

$salida=new Salida();

switch ($_GET["op"]){

	case 'listar':
		$rspta=$salida->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>$reg->num_placa,
 				"1"=>$reg->fecha_salida,
 				"2"=>$reg->hora_salida,
 				"3"=>$reg->tiempo,
 				"4"=>"S/. ".$reg->precio. ".00"
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