<?php
session_start(); 
require_once "../modelos/Usuario.php";

$usuario=new Usuario();

$idusuario=isset($_POST["idusuario"])? limpiarCadena($_POST["idusuario"]):"";
$led=isset($_POST["led"])? limpiarCadena($_POST["led"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$tipo_documento=isset($_POST["tipo_documento"])? limpiarCadena($_POST["tipo_documento"]):"";
$num_documento=isset($_POST["num_documento"])? limpiarCadena($_POST["num_documento"]):"";
$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$email=isset($_POST["email"])? limpiarCadena($_POST["email"]):"";
$cargo=isset($_POST["cargo"])? limpiarCadena($_POST["cargo"]):"";
$login=isset($_POST["login"])? limpiarCadena($_POST["login"]):"";
$clave=isset($_POST["clave"])? limpiarCadena($_POST["clave"]):"";
$prendeapaga=isset($_POST["prendeapaga"])? limpiarCadena($_POST["prendeapaga"]):"";

$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";
$hora=isset($_POST["hora"])? limpiarCadena($_POST["hora"]):"";
$resultado=isset($_POST["resultado"])? limpiarCadena($_POST["resultado"]):"";
$accion=isset($_POST["accion"])? limpiarCadena($_POST["accion"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':

		if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["imagen"]["name"]);
			if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
			{
				$imagen = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/usuarios/" . $imagen);
			}
		}
		//Hash SHA256 en la contraseña
		$clavehash=hash("SHA256",$clave);

		if (empty($idusuario)){
			$rspta=$usuario->insertar($nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email,$cargo,$login,$clavehash,$imagen,$_POST['permiso']);
			echo $rspta ? "Usuario registrado" : "No se pudieron registrar todos los datos del usuario";
		}
		else {
			$rspta=$usuario->editar($idusuario,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email,$cargo,$login,$clavehash,$imagen,$_POST['permiso']);
			echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
		}
	break;

	case 'guardar':
		$rspta=$usuario->guardar($resultado, $fecha, $hora, $accion);
 		echo $rspta ? "Se guardo lo programado" : "No Se guardo lo programado";
	break;

	case 'desactivar':
		$rspta=$usuario->desactivar($idusuario);
 		echo $rspta ? "Usuario Desactivado" : "Usuario no se puede desactivar";
	break;

	case 'pulsador':
	//	$a=shell_exec('sudo python /var/www/html/leds/pulsa.py');
		
	break;

	case 'prendeapaga':
		$valor_estado=$_POST['valor_estado'];
		$led=$_POST['led'];

		if ($led==1) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin3.py');
			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin3.py');
			}
		}elseif ($led==2) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin5.py');
			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin5.py');
			}
		}elseif ($led==3) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin7.py');
			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin7.py');
			}
		}elseif ($led==4) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin11.py');
			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin11.py');
			}
		}elseif ($led==5) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin12.py');
			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin12.py');
			}
		}elseif ($led==6) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin13.py');
			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin13.py');
			}
		}elseif ($led==7) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin15.py');
			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin15.py');
			}
		}elseif ($led==8) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin16.py');
			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin16.py');	
			}
		}elseif ($led==9) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin18.py');	
			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin18.py');
			}
		}elseif ($led==10) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin19.py');	
			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin19.py');
			}
		}elseif ($led==11) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin21.py');
			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin21.py');
			}
		}elseif ($led==12) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin22.py');
			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin22.py');
			}

		}
	break;

	case 'activar':
		$rspta=$usuario->activar($idusuario);
 		echo $rspta ? "Usuario activado" : "Usuario no se puede activar";
	break;

	case 'mostrar':
		$rspta=$usuario->mostrar($idusuario);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;



	case 'listar':
		$rspta=$usuario->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idusuario.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idusuario.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idusuario.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idusuario.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->nombre,
 				"2"=>$reg->tipo_documento,
 				"3"=>$reg->num_documento,
 				"4"=>$reg->telefono,
 				"5"=>$reg->email,
 				"6"=>$reg->login,
 				"7"=>"<img src='../files/usuarios/".$reg->imagen."' height='50px' width='50px' >",
 				"8"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
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

	case 'focos':
		$rspta = $usuario->listarfocos();
		$marcados = $usuario->listarfocosmarcados();
		//Declaramos el array para almacenar todos los permisos marcados
		$valores=array();
		//Almacenar los permisos asignados al usuario en el array
		while ($per = $marcados->fetch_object())
			{
				array_push($valores, $per->id);
			}
		while ($reg = $rspta->fetch_object())
				{	

					$sw=in_array($reg->id,$valores)?'checked':'';
					echo'<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        		<label>'.$reg->led.'</label>
	 				<input type="checkbox" onclick="hacerAlgo()" id="pin['.$reg->id.']" name="pin['.$reg->id.']" '.$sw.' data-toggle="toggle" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	    			</div>';
					
				}
echo '<input type="checkbox" id="y" name="y" value="y" onclick="calc()">';
		//Mostramos la lista de focos en la vista y si están o no marcados
/*		while ($reg = $rspta->fetch_object())
				{	

				//	$sw=in_array($reg->id,$valores)?'checked':'';
				//	echo '<li> <input type="checkbox" '.$sw.' name="foco['.$reg->id.']" value="'.$reg->id.'">'.$reg->led.'</li>';
					echo'<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        <label>Foco 01</label>
	        <input type="checkbox" checked data-toggle="toggle" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	    </div>';
					
				}
*/

	break;

	case 'leds':

		$rspta = $usuario->listarfocos();
		$marcados = $usuario->listarfocosmarcados();

		$valores=array();
		while ($reg = $rspta->fetch_object())
			{
				array_push($valores, $reg->led, $reg->prender);
			}
	    echo json_encode($valores);

	break;

	case 'ledsbucle':

		$rspta = $usuario->listarfocos();
		$marcados = $usuario->listarfocosmarcados();

		$valores=array();
		while ($reg = $rspta->fetch_object())
			{
				array_push($valores, $reg->led, $reg->prender);
			}
	    echo json_encode($valores);

	break;

	case 'permisos':
		//Obtenemos todos los permisos de la tabla permisos
		require_once "../modelos/Permiso.php";
		$permiso = new Permiso();
		$rspta = $permiso->listar();

		//Obtener los permisos asignados al usuario
		$id=$_GET['id'];
		$marcados = $usuario->listarmarcados($id);
		//Declaramos el array para almacenar todos los permisos marcados
		$valores=array();

		//Almacenar los permisos asignados al usuario en el array
		while ($per = $marcados->fetch_object())
			{
				array_push($valores, $per->idpermiso);
			}

		//Mostramos la lista de permisos en la vista y si están o no marcados
		while ($reg = $rspta->fetch_object())
				{
					$sw=in_array($reg->idpermiso,$valores)?'checked':'';
					echo '<li> <input type="checkbox" '.$sw.'  name="permiso[]" value="'.$reg->idpermiso.'">'.$reg->nombre.'</li>';
				}
	break;

	case 'consultar':
		$rspta = $usuario->consultar();

		$fetch=$rspta->fetch_object();
		$varprender = '0';

		if (isset($fetch))
	    {
	    	$idcrono=$fetch->idprograma;
	    	$idprender=$fetch->idprender;
	    	$activo=$fetch->activo;
	    	

	    	$rspta = $usuario->desactivarcrono($idcrono);

	    	if($activo==1){
	    		$rspta = $usuario->prende($idprender);
	    		$varprender = '1';
	    	}elseif($activo==0){
	    		$rspta = $usuario->apaga($idprender);
	    		$varprender = '0';
	    	}
	    }   

		echo $varprender;

	break;
	case 'consultarrr':
		$rspta = $usuario->consultar();

		//$fetch=$rspta->fetch_object();
		$varprender = '0';

		$valores=array();
		while ($reg = $rspta->fetch_object())
			{	

				$idcrono = $reg->idprograma;
				$idprender = $reg->idprender;
				$accion = $reg->accion;

				$usuario->desactivarcrono($idcrono);
			if($accion==1){
				$usuario->prende($idprender);
	    		$varprender = '1';
	    		echo 'accion igual a '. $accion;
	    	}else{
	    		$usuario->apaga($idprender);
	    		echo 'accion igual a '. $accion;
	    		$varprender = '1';
	    	}

			}
	//    echo json_encode($valores);  

		echo $varprender;

	break;
	case 'verificar':
		$logina=$_POST['logina'];
	    $clavea=$_POST['clavea'];

	    //Hash SHA256 en la contraseña
		$clavehash=hash("SHA256",$clavea);

		$rspta=$usuario->verificar($logina, $clavehash);

		$fetch=$rspta->fetch_object();

		if (isset($fetch))
	    {
	        //Declaramos las variables de sesión
	        $_SESSION['idusuario']=$fetch->idusuario;
	        $_SESSION['nombre']=$fetch->nombre;
	        $_SESSION['imagen']=$fetch->imagen;
	        $_SESSION['login']=$fetch->login;

	        //Obtenemos los permisos del usuario
	    	$marcados = $usuario->listarmarcados($fetch->idusuario);

	    	//Declaramos el array para almacenar todos los permisos marcados
			$valores=array();

			//Almacenamos los permisos marcados en el array
			while ($per = $marcados->fetch_object())
				{
					array_push($valores, $per->idpermiso);
				}

			//Determinamos los accesos del usuario
			in_array(1,$valores)?$_SESSION['escritorio']=1:$_SESSION['escritorio']=0;
			in_array(2,$valores)?$_SESSION['editor']=1:$_SESSION['editor']=0;
			in_array(3,$valores)?$_SESSION['usuario']=1:$_SESSION['usuario']=0;
			in_array(4,$valores)?$_SESSION['administrador']=1:$_SESSION['administrador']=0;
			in_array(5,$valores)?$_SESSION['permiso5']=1:$_SESSION['permiso5']=0;
			in_array(6,$valores)?$_SESSION['permiso6']=1:$_SESSION['permiso6']=0;
			in_array(7,$valores)?$_SESSION['permiso7']=1:$_SESSION['permiso7']=0;

	    }
	    echo json_encode($fetch);
	break;

	case 'salir':
		//Limpiamos las variables de sesión   
        session_unset();
        //Destruìmos la sesión
        session_destroy();
        //Redireccionamos al login
        header("Location: ../index.php");

	break;

	case 'prendeapaga3':
		$valor_estado=$_POST['valor_estado'];
		$led=$_POST['led'];

		if ($led==1) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin3.py');
				$usuario->apaga($led);

			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin3.py');
				$usuario->prende($led);
			}
		}
	break;
	case 'prendeapaga5':
		$valor_estado=$_POST['valor_estado'];
		$led=$_POST['led'];

		if ($led==2) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin5.py');
				$usuario->apaga($led);

			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin5.py');
				$usuario->prende($led);
			}
		}
	break;
	case 'prendeapaga7':
		$valor_estado=$_POST['valor_estado'];
		$led=$_POST['led'];

		if ($led==3) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin7.py');
				$usuario->apaga($led);

			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin7.py');
				$usuario->prende($led);
			}
		}
	break;
	case 'prendeapaga11':
		$valor_estado=$_POST['valor_estado'];
		$led=$_POST['led'];

		if ($led==4) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin11.py');
				$usuario->apaga($led);

			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin11.py');
				$usuario->prende($led);
			}
		}
	break;
	case 'prendeapaga12':
		$valor_estado=$_POST['valor_estado'];
		$led=$_POST['led'];

		if ($led==5) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin12.py');
				$usuario->apaga($led);

			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin12.py');
				$usuario->prende($led);
			}
		}
	break;
	case 'prendeapaga13':
		$valor_estado=$_POST['valor_estado'];
		$led=$_POST['led'];

		if ($led==6) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin13.py');
				$usuario->apaga($led);

			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin13.py');
				$usuario->prende($led);
			}
		}
	break;
	case 'prendeapaga15':
		$valor_estado=$_POST['valor_estado'];
		$led=$_POST['led'];

		if ($led==7) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin15.py');
				$usuario->apaga($led);

			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin15.py');
				$usuario->prende($led);
			}
		}
	break;
	case 'prendeapaga16':
		$valor_estado=$_POST['valor_estado'];
		$led=$_POST['led'];

		if ($led==8) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin16.py');
				$usuario->apaga($led);

			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin16.py');
				$usuario->prende($led);
			}
		}
	break;
	case 'prendeapaga18':
		$valor_estado=$_POST['valor_estado'];
		$led=$_POST['led'];

		if ($led==9) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin18.py');
				$usuario->apaga($led);

			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin18.py');
				$usuario->prende($led);
			}
		}
	break;
	case 'prendeapaga19':
		$valor_estado=$_POST['valor_estado'];
		$led=$_POST['led'];

		if ($led==10) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin19.py');
				$usuario->apaga($led);

			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin19.py');
				$usuario->prende($led);
			}
		}
	break;
	case 'prendeapaga21':
		$valor_estado=$_POST['valor_estado'];
		$led=$_POST['led'];

		if ($led==11) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin21.py');
				$usuario->apaga($led);

			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin21.py');
				$usuario->prende($led);
			}
		}
	break;
	case 'prendeapaga22':
		$valor_estado=$_POST['valor_estado'];
		$led=$_POST['led'];

		if ($led==12) {
			if($valor_estado!=0){
				$a=exec('sudo python /var/www/html/leds/prende-pin22.py');
				$usuario->apaga($led);

			}else{
				$a=exec('sudo python /var/www/html/leds/apaga-pin22.py');
				$usuario->prende($led);
			}
		}
	break;
}
?>