<?php

$placanew=$_POST['placanew'];
echo "dentro del archivo ticket ".$placanew;
	
		require __DIR__ . '../ticket/autoload.php'; 
		use Mike42\Escpos\Printer;
		use Mike42\Escpos\EscposImage;
		use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

		$nombre_impresora = "EPSON TM-T88V Receipt5"; 
		$placa=$placanew;

		$connector = new WindowsPrintConnector($nombre_impresora);
		$printer = new Printer($connector);
		#Mando un numero de respuesta para saber que se conecto correctamente.
	//	echo 1;

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
		

?>