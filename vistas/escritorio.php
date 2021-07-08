
<?php
session_start();
require 'header.php';

?>

<head>
	<title></title>
	<script src="../js/jquery-1.9.1.js"></script>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-toggle.css" rel="stylesheet">
	<script src="../js/jquery-2.1.1.min.js"></script>
</head>

	<div class="content-wrapper">  
	<section class="content">
		<div class="row">
              <div class="col-md-12">
                  <div class="box">
                  	<div class="box-header with-border">
                      <!--
                          <h1 class="box-title">Ingreso <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        -->
                          <h1 class="box-title">Control remoto</h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
    <div class="panel-body" id="">

    <form name="leds" id="leds">

		<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        <label>Foco 01</label>
	      
	        <input type="checkbox" id="pin3" name="pin3" onchange="funcion3()" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	        <a data-toggle="modal" href="#myModal">
	        	<button class="btn btn-warning" onclick="idbuton('1')"><i class="fa fa-pencil"></i></button>
	        </a>

	    </div> 
	    
	    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        <label>Foco 02</label>
	        <input type="checkbox" id="pin5" name="pin5" onchange="funcion5()" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	        <a data-toggle="modal" href="#myModal">
	        	<button class="btn btn-warning" onclick="idbuton('2')"><i class="fa fa-pencil"></i></button>
	        </a>
	    </div>
	    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        <label>Foco 03</label>
	        <input type="checkbox" id="pin7" name="pin7" onchange="funcion7()" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	        <a data-toggle="modal" href="#myModal">
	        	<button class="btn btn-warning" onclick="idbuton('3')"><i class="fa fa-pencil"></i></button>
	        </a>
	    </div>
	    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        <label>Foco 04</label>
	        <input type="checkbox" id="pin11" name="pin11" onchange="funcion11()" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	        <a data-toggle="modal" href="#myModal">
	        	<button class="btn btn-warning" onclick="idbuton('4')"><i class="fa fa-pencil"></i></button>
	        </a>
	    </div>


	    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        <label>Foco 05</label>
	        <input type="checkbox" id="pin12" name="pin12" onchange="funcion12()" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	        <a data-toggle="modal" href="#myModal">
	        	<button class="btn btn-warning" onclick="idbuton('5')"><i class="fa fa-pencil"></i></button>
	        </a>
	    </div>
	    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        <label>Foco 06</label>
	        <input type="checkbox" id="pin13" name="pin13" onchange="funcion13()" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	        <a data-toggle="modal" href="#myModal">
	        	<button class="btn btn-warning" onclick="idbuton('6')"><i class="fa fa-pencil"></i></button>
	        </a>
	    </div>
	    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        <label>Foco 07</label>
	        <input type="checkbox" id="pin15" name="pin15" onchange="funcion15()" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	        <a data-toggle="modal" href="#myModal">
	        	<button class="btn btn-warning" onclick="idbuton('7')"><i class="fa fa-pencil"></i></button>
	        </a>
	    </div>
	    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        <label>Foco 08</label>
	        <input type="checkbox" id="pin16" name="pin16" onchange="funcion16()" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	        <a data-toggle="modal" href="#myModal">
	        	<button class="btn btn-warning" onclick="idbuton('8')"><i class="fa fa-pencil"></i></button>
	        </a>
	    </div>

	    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        <label>Foco 09</label>
	        <input type="checkbox" id="pin18" name="pin18" onchange="funcion18()" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	        <a data-toggle="modal" href="#myModal">
	        	<button class="btn btn-warning" onclick="idbuton('9')"><i class="fa fa-pencil"></i></button>
	        </a>
	    </div>
	    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        <label>Foco 10</label>
	        <input type="checkbox" id="pin19" name="pin19" onchange="funcion19()" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	        <a data-toggle="modal" href="#myModal">
	        	<button class="btn btn-warning" onclick="idbuton('10')"><i class="fa fa-pencil"></i></button>
	        </a>
	    </div>
	    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        <label>Foco 11</label>
	        <input type="checkbox" id="pin21" name="pin21" onchange="funcion21()" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	        <a data-toggle="modal" href="#myModal">
	        	<button class="btn btn-warning" onclick="idbuton('11')"><i class="fa fa-pencil"></i></button>
	        </a>
	    </div>
	    <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
	        <label>Foco 12</label>
	        <input type="checkbox" id="pin22" name="pin22" onchange="funcion22()" data-on="Prendido" data-off="Apagado" data-onstyle="success" data-offstyle="danger">
	        <a data-toggle="modal" href="#myModal">
	        	<button class="btn btn-warning" onclick="idbuton('12')"><i class="fa fa-pencil"></i></button>
	        </a>
	    </div>

	</form>

	</div>
	</section>
	</div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Programar Led</h4>
        </div>
        <div class="modal-body" style="height: 250px !important;">
        	<form name="formulario" id="formulario" method="POST">
	        	<div class="form-group col-lg-6 col-md-6 col-sm-3 col-xs-12">
	        		<label>fecha</label>
	        		<input type="hidden" name="resultado" id="resultado">
	        		<input type="date" id="fecha" name="fecha" class="form-control" required="">
	        	</div>
	        	<div class="form-group col-lg-6 col-md-6 col-sm-3 col-xs-12">
	        		<label>Hora</label>
	        		<input type="time" id="hora" name="hora" class="form-control"required="">
	        	</div>

		    	<div class="form-group col-lg-6 col-md-6 col-sm-3 col-xs-12">
		    		<label>Accion</label><br>
			        <div id="accion">
					  <input class="form-check-input" type="radio" name="accion" value="1"> Prender <br>
					  <input class="form-check-input" type="radio" name="accion" value="0"> Apagar
					</div>
		    	</div>
		          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

	                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	              </div>
	    	</form>
        </div>      
      </div>
    </div>
  </div>  
  <!-- Fin modal -->

	<script src="../js/highlight.min.js"></script>
	<script src="../js/bootstrap-toggle.js"></script>
	<script type="text/javascript" src="scripts/login.js"></script>

<?php
	require 'footer.php';
?>

