<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';

if ($_SESSION['administrador']==1)
{
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                      <!--
                          <h1 class="box-title">Ingreso <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        -->
                          <h1 class="box-title">Ingreso</h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Placa</th>
                            <th>Tipo</th>
                            <th>Color</th>
                            <th>Fecha y Hora</th>                            
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Placa</th>
                            <th>Tipo</th>
                            <th>Color</th>
                            <th>Fecha y Hora</th>  
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-8">
                            <label>Nº Placa:</label>
                            <input type="hidden" name="idregistro" id="idregistro">
                            <input type="text" class="form-control" name="num_placa" id="num_placa">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-8">
                            <label>Modelo:</label>
                            <input type="text" class="form-control" name="modelo" id="modelo">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-8">
                            <label>Marca:</label>
                            <input type="text" class="form-control" name="marca" id="marca">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-8">
                            <label>Tipo(*):</label>
                            <select id="idtipo" name="idtipo" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-8">
                            <label>Color:</label>
                            <input type="text" class="form-control" name="color" id="color">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-8">
                            <label>Propietario:</label>
                            <input type="text" class="form-control" name="propietario" id="propietario">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-8">
                            <label>Telefono:</label>
                            <input type="text" class="form-control" name="telefono" id="telefono">
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button id="btnCancelar" class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->

<?php
}
else
{
  require 'noacceso.php';
}

require 'footer.php';
?>
<script type="text/javascript" src="scripts/ingreso.js"></script>
<?php 
}
ob_end_flush();
?>


