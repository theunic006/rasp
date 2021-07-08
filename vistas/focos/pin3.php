<?php

$valor_estado=$_POST['valor_estado'];

if($valor_estado!=1){

	$a=exec('sudo python /var/www/html/leds/apaga-pin3.py');
	echo $a;

}else{

	$a=exec('sudo python /var/www/html/leds/prende-pin3.py');
	echo $a;

}

?>
