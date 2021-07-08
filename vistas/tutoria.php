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
              <div class="col-md-12" id="listadoregistros">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">TUTORIA <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar Alumno</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Nombres</th>
                            <th>Celular</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Nombres</th>
                            <th>Celular</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->

        <div class="col-md-12" id="formularioregistros">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true">Datos Personales</a></li>
              <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Datos Personales</a></li>
              <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false">Datos escolares</a></li>
              <li class=""><a href="#tab4" data-toggle="tab" aria-expanded="false">Datos Medicos</a></li>
              <li class=""><a href="#tab5" data-toggle="tab" aria-expanded="false">Habitos de Estudio</a></li>
              <li class=""><a href="#tab6" data-toggle="tab" aria-expanded="false">Aficiones y Tiempo Libre</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab1">
                <!-- Post -->
                <div class="post">
                  <div class="panel-body" >
                        <form name="formulario" id="formulario" method="POST">
                          <div class="col-md-6">
                        <div class="form-group">
                          <label>APELLIDOS</label>
                          <input type="hidden" name="idtutoria" id="idtutoria">
                          <input type="text" id="apellidos" name="apellidos" class="form-control" style="font-size:14px" placeholder="Ingrese sus apellidos...">
                        </div>
                        <div class="form-group">
                          <label>NOMBRES</label>
                          <input type="text" id="nombres" name="nombres" class="form-control" style="font-size:14px" placeholder="Ingrese sus nombres...">
                        </div>
                        <div class="form-group">
                          <label>EDAD</label>
                          <input type="text" id="edad" name="edad" class="form-control" style="font-size:14px" placeholder="Ingrese su edad...">
                        </div>
                        <div class="form-group">
                          <label>DOMILICIO | DIRECCIÓN</label>
                          <input type="text" id="domicilio" name="domicilio" class="form-control" style="font-size:14px" placeholder="Ingrese su domilicio o dirección...">
                        </div>
                        <div class="form-group">
                          <label>LOCALIDAD</label>
                          <input type="text" id="localidad" name="localidad" class="form-control" style="font-size:14px" placeholder="Ingrese su localidad...">
                        </div>
                        <div class="form-group">
                          <label>TELÉFONO</label>
                          <input type="text" id="telefono" name="telefono" class="form-control" style="font-size:14px" placeholder="Ingrese su teléfono...">
                        </div>
                        <div class="form-group">
                          <label>CELULAR</label>
                          <input type="text" id="celular" name="celular" class="form-control" style="font-size:14px" placeholder="Ingrese su celular...">
                        </div>  
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>CELULAR PAPÁ</label>
                          <input type="text" id="celularpadre" name="celularpadre" class="form-control" style="font-size:14px" placeholder="Ingrese celular del padre...">
                        </div> 
                        <div class="form-group">
                          <label>CELULAR MAMÁ</label>
                          <input type="text" id="celularmadre" name="celularmadre" class="form-control" style="font-size:14px" placeholder="Ingrese celular de la madre...">
                        </div> 
                        <div class="form-group">
                          <label>FECHA DE NACIMIENTO</label>
                          <input type="date" id="fechanacimiento" name="fechanacimiento" class="form-control" style="font-size:14px">
                        </div>   
                        <div class="form-group">
                          <label>LUGAR DE NACIMIENTO</label>
                          <input type="text" id="lugarnacimiento" name="lugarnacimiento" class="form-control" style="font-size:14px" placeholder="Ingrese lugar de nacimiento...">
                        </div>
                        <div class="form-group">
                          <label>DISTRITO</label>
                          <input type="text" id="distrito" name="distrito" class="form-control" style="font-size:14px" placeholder="Ingrese lugar de nacimiento...">
                        </div>
                        <div class="form-group">
                          <label>PROVINCIA</label>
                          <input type="text" id="provincia" name="provincia" class="form-control" style="font-size:14px" placeholder="Ingrese lugar de nacimiento...">
                        </div>
                        <div class="form-group">
                          <label>DEPARTAMENTO</label>
                          <input type="text" id="departamento" name="departamento" class="form-control" style="font-size:14px" placeholder="Ingrese lugar de nacimiento...">
                        </div>  
                        <!-- /.form-group -->
                      </div>

                      </div>
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab2">
                <!-- Post -->
                <div class="post">
                  <div class="panel-body" >
    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>APELLIDOS DEL PADRE</label>
                          <input type="text" id="apellidopadre" name="apellidopadre" class="form-control" style="font-size:14px" placeholder="Ingrese apellidos del padre...">
                        </div>
                        <div class="form-group">
                          <label>NOMBRES DEL PADRE</label>
                          <input type="text" id="nombrepadre" name="nombrepadre" class="form-control" style="font-size:14px" placeholder="Ingrese nombres del padre...">
                        </div>
                        <div class="form-group">
                          <label>EDAD DEL PADRE</label>
                          <input type="number" id="edadpadre" name="edadpadre" class="form-control" style="font-size:14px" placeholder="Ingrese edad del padre...">
                        </div>
                        <div class="form-group">
                          <label>PROFESIÓN DEL PADRE</label>
                          <input type="text" id="profpadre" name="profpadre" class="form-control" style="font-size:14px" placeholder="Ingrese profesión del padre...">
                        </div>
                        <div class="form-group">
                          <label>¿DONDE TRABAJA EL PADRE?</label>
                          <input type="text" id="trabpadre" name="trabpadre" class="form-control" style="font-size:14px" placeholder="Ingrese lugar de trabajo del padre...">
                        </div>
                        <div class="form-group">
                          <label>APELLIDOS DE LA MADRE</label>
                          <input type="text" id="apellidomadre" name="apellidomadre" class="form-control" style="font-size:14px" placeholder="Ingrese apellidos de la madre...">
                        </div>
                        <div class="form-group">
                          <label>NOMBRES DE LA MADRE</label>
                          <input type="text" id="nombremadre" name="nombremadre" class="form-control" style="font-size:14px" placeholder="Ingrese nombres de la madre...">
                        </div>
                        <div class="form-group">
                          <label>EDAD DE LA MADRE</label>
                          <input type="number" id="edadmadre" name="edadmadre" class="form-control" style="font-size:14px" placeholder="Ingrese edad de la madre...">
                        </div>
                        <div class="form-group">
                          <label>PROFESIÓN DE LA MADRE</label>
                          <input type="text" id="profmadre" name="profmadre" class="form-control" style="font-size:14px" placeholder="Ingrese profesión de la madre...">
                        </div>
                        <div class="form-group">
                          <label>¿DONDE TRABAJA LA MADRE?</label>
                          <input type="text" id="trabmadre" name="trabmadre" class="form-control" style="font-size:14px" placeholder="Ingrese lugar de trabajo de la madre...">
                        </div>
                        <div class="form-group">
                          <label>¿CUÁNTOS HERMANOS Y HERMANAS TIENES?</label>
                          <input type="number" id="canthermanos" name="canthermanos" class="form-control" style="font-size:14px" placeholder="Ingrese cantidad hermanos(as)...">
                        </div>
                        <div class="form-group">
                          <label>¿TUS PADRES ESTÁN?</label>
                          <div class="radio">
                            <label><input type="radio" id="estadopadres1" name="estadopadres" value="CASADOS">CASADOS</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" id="estadopadres2" name="estadopadres" value="SEPARADOS/DIVORCIADOS">SEPARADOS/DIVORCIADOS</label>
                          </div> 
                          <div class="radio">
                            <label><input type="radio" id="estadopadres3" name="estadopadres" value="UNION LIBRE">UNION LIBRE</label>
                          </div>                  
                        </div>
                        <div class="form-group">
                          <label>¿AMBOS VIVEN?</label>
                          <div class="radio">
                            <label>
                              <input type="radio" id="viven1" name="viven" value="SI">
                              SI
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" id="viven2" name="viven" value="NO">
                              NO
                            </label>
                          </div>                  
                        </div>

                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">                      
                        
                        
                        <div class="form-group">
                          <label>SÓLO VIVE</label>
                          <div class="radio">
                            <label>
                              <input type="radio" id="solovive1" name="solovive" value="PADRE">
                              PADRE
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" id="solovive2" name="solovive" value="MADRE">
                              MADRE
                            </label>
                          </div>                  
                        </div>
                        <div class="form-group">
                          <label>¿CÓMO ES LA RELACIÓN CON TUS PADRES?</label>
                          <div class="radio">
                            <label>
                              <input type="radio" id="relacion1" name="relacion" value="MUY BUENA">
                              MUY BUENA
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" id="relacion2" name="relacion" value="BUENA">
                              BUENA
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" id="relacion3" name="relacion" value="REGULAR">
                              REGULAR
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" id="relacion4" name="relacion" value="MALA">
                              MALA
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" id="relacion5" name="relacion" value="MUY MALA">
                              MUY MALA
                            </label>
                          </div>                  
                        </div>
                        <div class="form-group">
                          <label>CUÁNDO SALES LOS FINES DE SEMANA Y EN VACACIONES ¿CON QUIÉN VIVES?</label>
                          <div class="radio">
                            <label>
                              <input type="radio" id="conquienvives1" name="conquienvives" value="PADRE MADRE">
                              PADRE Y MADRE
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" id="conquienvives2" name="conquienvives" value="PADRASTRO Y MADRE">
                              PADRASTRO Y MADRE
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" id="conquienvives3" name="conquienvives" value="PADRE Y MADRASTRA">
                              PADRE Y MADRASTRA
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" id="conquienvives4" name="conquienvives" value="SOLO PADRE">
                              SÓLO PADRE
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" id="conquienvives5" name="conquienvives" value="SOLO MADRE">
                              SÓLO MADRE
                            </label>
                          </div>                  
                        </div>                        
                        
                       
                        <div class="form-group">
                          <label>¿VIVE ALGUIEN MÁS EN CASA? ¿QUIÉN O QUIENES? <br>(No incluyen padres y hermanos)</label>
                          <textarea class="form-control" id="alguienmas" name="alguienmas" placeholder="Escriba aquí..."></textarea>
                        </div>
                        <div class="form-group">
                          <label>PREGUNTAS<br></label>
                          <table border="1" width="100%">
                            <tr style="background: gray; color: white; text-align: center;">
                              <td style="width: 40%">PREGUNTA</td>
                              <td>SI</td>
                              <td>NO</td>
                              <td>¿POR QUÉ?</td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿Dialogas a menudo con tus padres?</td>
                              <td><input type="radio" id="dialogo1" name="dialogo" value="SI"></td>
                              <td><input type="radio" id="dialogo2" name="dialogo" value="NO"></td>
                              <td><textarea class="form-control" id="dialogotext" name="dialogotext" placeholder="Escriba aquí..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿Te llevas bien con tus hermanos?</td>
                              <td><input type="radio" id="llevarhermano1" name="llevarhermano" value="SI"></td>
                              <td><input type="radio" id="llevarhermano2" name="llevarhermano" value="NO"></td>
                              <td><textarea class="form-control" id="llevarhermanotext" name="llevarhermanotext" placeholder="Escriba aquí..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿Te gusta vivir con tu familia?</td>
                              <td><input type="radio" id="vivirfamilia1" name="vivirfamilia" value="SI"></td>
                              <td><input type="radio" id="vivirfamilia2" name="vivirfamilia" value="NO"></td>
                              <td><textarea class="form-control" id="vivirfamiliatext" name="vivirfamiliatext" placeholder="Escriba aquí..."></textarea></td>
                            </tr>
                          </table>
                                            
                        </div>
                        <div class="form-group">
                          <label>¿HAY ALGO EN TU SITUCIACIÓN FAMILIAR QUE SE PUEDA CONSIDERAR ESPECIAL? (Enfermedades, desamparo, abusos, otros)</label>
                          <textarea class="form-control" id="situacionespecial" name="situacionespecial" placeholder="Escriba aquí..."></textarea>             
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->

                      </div>
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab3">

                <!-- Post -->
                <div class="post">
                  <div class="panel-body" >
  
                      <div class="col-md-6">
                        <div class="form-group">
                          <table border="1" width="100%">
                            <tr style="background: gray; color: white; text-align: center;">
                              <td style="width: 40%">PREGUNTA</td>
                              <td>SI</td>
                              <td>NO</td>
                              <td>RESPUESTA</td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿REALIZAS OTROS TIPOS DE ESTUDIOS FUERA DE LA INSTITUCIÓN?<br>(Academias, música, idiomas, computación, otros)</td>
                              <td><input type="radio" id="tiposestudio011" name="tiposestudio01" value="SI"></td>
                              <td><input type="radio" id="tiposestudio012" name="tiposestudio01" value="NO"></td>
                              <td><textarea name="tiposdeestudiotext02" id="tiposdeestudiotext02" class="form-control" placeholder="Mencione los tipos"></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>CREES QUE CUMPLES CON LO QUE ELLOS ESPERAN DE TI?</td>
                              <td><input type="radio" id="esperan031" name="esperan03" value="SI"></td>
                              <td><input type="radio" id="esperan032" name="esperan03" value="NO"></td>
                              <td><textarea name="esperantext04" id="esperantext04" class="form-control" placeholder="¿POR QUÉ LO CREES ASÍ?"></textarea></td>
                            </tr>                            
                          </table>
                        </div>                        
                        <div class="form-group">
                          <label>¿QUÉ PROBLEMAS CREES QUE DIFICULTEN TUS ESTUDIOS?</label><br>
                          <input type="checkbox" id="problema011" name="problema01" value="Problemas visuales"> Problemas visuales 
                          <input type="checkbox" id="problema022" name="problema02" value="Bullying en el colegio"> Bullying en el colegio <br>
                          <input type="checkbox" id="problema033" name="problema03" value="Deficit de atención"> Déficit de atención 
                          <input type="checkbox" id="problema044" name="problema04" value="Habilidades sociales"> Habilidades sociales<br>
                          <input type="checkbox" id="problema055" name="problema05" value="Dislexia (dificultad en el lenguaje)"> Dislexia (dificultad en el lenguaje)
                          <input type="checkbox" id="problema066" name="problema06" value="Relación con los padres"> Relación con los padres<br>
                          <input type="checkbox" id="problema077" name="problema07" value="Cambio de institución educativa"> Cambio de institución educativa
                          <input type="checkbox" id="problema088" name="problema08" value="Consumo de sustancias estupefacientes, psicotrópicas"> Consumo de sustancias estupefacientes, psicotrópicas<br>
                          <input type="checkbox" id="problema099" name="problema09" value="Violencia intrafamiliar"> Violencia intrafamiliar
                          <input type="checkbox" id="problema100" name="problema10" value="Uso de teléfonos celulares en clases"> Uso de telefonos celulares en clases<br>
                          <input type="checkbox" id="problema111" name="problema11" value="Uso de las redes sociales"> Uso de las redes sociales
                          <input type="checkbox" id="problema122" name="problema12" value="Falta de ayuda en el hogar"> Falta de ayuda en el hogar<br>
                          <input type="checkbox" id="problema133" name="problema13" value="Relaciones sentimentales"> Relaciones sentimentales
                          <input type="checkbox" id="problema144" name="problema14" value="Otro"> Otro
                          <textarea name="motivo15" id="motivo15" class="form-control" placeholder="Indica aquí otro motivo..."></textarea>
                        </div>
                        <div class="form-group">
                          <label>¿QUÉ ACTIVIDADES CREES QUE TE LIMITAN EN TUS ESTUDIOS?</label><br>
                          <input type="checkbox" id="actividades011" name="actividades01" value="Tareas en exceso"> Tareas en exceso 
                          <input type="checkbox" id="actividades022" name="actividades02" value="Explicaciones en clases"> Explicaciones en clases <br>
                          <input type="checkbox" id="actividades033" name="actividades03" value="Tomar apuntes"> Tomar apuntes 
                          <input type="checkbox" id="actividades044" name="actividades04" value="Trabajos de grupos"> Trabajos de grupos<br>
                          <input type="checkbox" id="actividades055" name="actividades05" value="Exámenes"> Examenes
                          <input type="checkbox" id="actividades066" name="actividades06" value="Otro"> Otro
                          <textarea name="motivo07" id="motivo07" class="form-control" placeholder="Indica aquí otro motivo..."></textarea>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>¿CÓMO REACCIONAN TUS PADRES ANTE TUS CALIFICACIONES?</label>
                          <textarea name="calificaciones01" id="calificaciones01" class="form-control" placeholder="Escriba aquí"></textarea>
                        </div>
                        <div class="form-group">
                          <label>TU PADRE DESEA QUE TE DEDIQUES A:</label>
                          <textarea name="dedicacion02" id="dedicacion02" class="form-control" placeholder="Escriba aquí..."></textarea>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                          <label>TU MADRE OPINA QUE LO QUE MÁS TE CONVIENE ES:</label>
                          <textarea name="convinene03" id="convinene03" class="form-control" placeholder="Escriba aquí..."></textarea>
                        </div>
                        <div class="form-group">
                          <label>ALGUNOS AMIGOS TE ACONSEJAN QUE LO MEJOR PARA TI ES:</label>
                          <textarea name="amigo04" id="amigo04" class="form-control" placeholder="Escriba aquí.."></textarea>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->

                      </div>
                </div>
                <!-- /.post -->
              </div>
              <div class="tab-pane" id="tab4">

                <!-- Post -->
                <div class="post">
                  <div class="panel-body" >

                      <div class="col-md-6">                        
                        <div class="form-group">
                          <table border="1" width="100%">
                            <tr style="background: gray; color: white; text-align: center;">
                              <td style="width: 50%">PREGUNTA</td>
                              <td>SI</td>
                              <td>NO</td>
                              <td>RESPUESTA</td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>TRATAMIENTO MÉDICO O PSICOLÓGICO. ¿ACTUALMENTE LO RECIBES?</td>
                              <td><input type="radio" id="datmedico011" name="datmedico01" value="SI"></td>
                              <td><input type="radio" id="datmedico012" name="datmedico01" value="NO"></td>
                              <td><textarea name="datmedico02" id="datmedico02" class="form-control" placeholder="¿De qué tipo?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>TRATAMIENTO MÉDICO O PSICOLÓGICO. ¿LO HAS RECIBIDO ALGUNA VEZ?</td>
                              <td><input type="radio" id="datmedico031" name="datmedico03" value="SI"></td>
                              <td><input type="radio" id="datmedico032" name="datmedico03" value="NO"></td>
                              <td><textarea name="datmedico04" id="datmedico04" class="form-control" placeholder="¿De qué tipo?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿Has estado alguna vez hospitalizado(a)?</td>
                              <td><input type="radio" id="datmedico051" name="datmedico05" value="SI"></td>
                              <td><input type="radio" id="datmedico052" name="datmedico05" value="NO"></td>
                              <td><textarea name="datmedico06" id="datmedico06" class="form-control" placeholder="¿Motivo?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿Has estado alguna vez hospitalizado(a)?</td>
                              <td><input type="radio" id="datmedico071" name="datmedico07" value="SI"></td>
                              <td><input type="radio" id="datmedico072" name="datmedico07" value="NO"></td>
                              <td><textarea name="datmedico08" id="datmedico08" class="form-control" placeholder="¿Motivo?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿Has tenido algún tipo de operación?</td>
                              <td><input type="radio" id="datmedico091" name="datmedico09" value="SI"></td>
                              <td><input type="radio" id="datmedico092" name="datmedico09" value="NO"></td>
                              <td><textarea name="datmedico10" id="datmedico10" class="form-control" placeholder="¿De qué?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>En la actualidad ¿Padeces alguna enfermedad? (epilepsía, diabetes, asma, otros)</td>
                              <td><input type="radio" id="datmedico111" name="datmedico11" value="SI"></td>
                              <td><input type="radio" id="datmedico112" name="datmedico11" value="NO"></td>
                              <td><textarea name="datmedico12" id="datmedico12" class="form-control" placeholder="¿Cuál?..."></textarea></td>
                            </tr>
                          </table>                                            
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>¿PADECES ALGUNA ENFERMEDAD O EXISTE ALGUNA CONDICIÓN FÍSICA QUE TE AFECTE?<br>(oído, vista, enfermedades respiratorias, otras)</label>
                          <textarea name="datmedico13" id="datmedico13" class="form-control" placeholder="Escriba aquí.."></textarea>
                        </div>                        
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->

                      </div>
                </div>
                <!-- /.post -->
              </div>
              <div class="tab-pane" id="tab5">

                <!-- Post -->
                <div class="post">
                  <div class="panel-body" >
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>CUANDO TIENES PROBLEMAS CON EL ESTUDIO ¿A QUÉ PIENSAS QUE SE DEBEN?</label><br>
                          <input type="checkbox" name="habito01" id="habito011" value="Me organizo mal"> Me organizo mal 
                          <input type="checkbox" name="habito02" id="habito012" value="No me esfuerzo lo suficiente"> No me esfuerzo lo suficiente <br>
                          <input type="checkbox" name="habito03" id="habito013" value="No encuentro las ideas esenciales"> No encuentro las ideas esenciales 
                          <input type="checkbox" name="habito04" id="habito014" value="Tengo mala suerte"> Tengo mala suerte<br>
                          <input type="checkbox" name="habito05" id="habito015" value="Siento poco interes"> Siento poco interés
                          <input type="checkbox" name="habito06" id="habito016" value="No entiendo lo que estudio"> No entiendo lo que estudio<br>
                          <input type="checkbox" name="habito07" id="habito017" value="No tengo en casa un lugar adecuado para estudiar"> No tengo en casa un lugar adecuado para estudiar
                          <input type="checkbox" name="habito08" id="habito018" value="Creo que no valgo para estudiar"> Creo que no valgo para estudiar<br>
                          <input type="checkbox" name="habito09" id="habito019" value="Otras razones"> Otras razones
                          <textarea name="otrasrazones10" id="otrasrazones10" class="form-control" placeholder="Indica aquí otras razones..."></textarea>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                          <label>PREGUNTAS<br></label>
                          <table border="1" width="100%">
                            <tr style="background: gray; color: white; text-align: center;">
                              <td style="width: 50%" colspan="3">TIEMPO DE TRABAJO DIARIO EN CASA:</td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>REALIZAS TAREAS</td>                              
                              <td colspan="2">
                                <input type="radio" id="estudios011" name="estudios01" value="Nada">Nada 
                                <input type="radio" id="estudios012" name="estudios01" value="Una hora">Una hora
                                <input type="radio" id="estudios013" name="estudios01" value="Dos horas">Dos horas
                                <input type="radio" id="estudios014" name="estudios01" value="Mas de dos horas">Más de dos horas
                              </td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>ESTUDIAS</td>
                              <td colspan="2">
                                <input type="radio" id="estudios021" name="estudios02" value="Nada">Nada
                                <input type="radio" id="estudios022" name="estudios02" value="Una hora">Una hora
                                <input type="radio" id="estudios023" name="estudios02" value="Dos horas">Dos horas
                                <input type="radio" id="estudios024" name="estudios02" value="Mas de dos horas">Más de dos horas
                              </td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>TE DEDICAS A LA LECTURA</td>
                              <td>Semanalmente:</td>
                              <td>
                                <input type="radio" id="estudios031" name="estudios03" value="Nada">Nada
                                <input type="radio" id="estudios032" name="estudios03" value="Una dia">Una dia
                                <input type="radio" id="estudios033" name="estudios03" value="Algunos dias">Algunos dias
                                <input type="radio" id="estudios034" name="estudios03" value="Inter-diario">Inter-diario
                                <input type="radio" id="estudios035" name="estudios03" value="Diario">Diario</td>                              
                            </tr>
                            <tr style="text-align: center;">
                              <td>TE DEDICAS A LA LECTURA</td>
                              <td>Por ese(os) día(s):</td>
                              <td>
                                <input type="radio" id="estudios041" name="estudios04" value="Nada">Nada
                                <input type="radio" id="estudios042" name="estudios04" value="1 hora">1 hora
                                <input type="radio" id="estudios043" name="estudios04" value="Menos de una hora">Menos de una hora
                                <input type="radio" id="estudios044" name="estudios04" value="Mas de una hora"> Más de una hora</td>                
                            </tr>
                          </table>                                            
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <table border="1" width="100%">
                            <tr style="background: gray; color: white; text-align: center;">
                              <td colspan="2">PARA QUE ESTUDIES:</td>
                            </tr>
                            <tr style="text-align: center;">
                              <td style="width: 30%" >HORARIO PREFERIDO</td>                              
                              <td>
                                <input type="radio" id="horariocol11" name="horariocol1" value="Primeras horas de la mañana">Primeras horas de la mañana
                                <input type="radio" id="horariocol12" name="horariocol1" value="Despues de comer">Después de comer<br> 
                                <input type="radio" id="horariocol13" name="horariocol1" value="Tarde">Tarde
                                <input type="radio" id="horariocol14" name="horariocol1" value="Noche">Noche
                              </td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>LUGAR PREFERIDO</td>
                              <td>
                                <input type="radio" id="horariocol21" name="horariocol2"value="En mi habitacion">En mi habitación
                                <input type="radio" id="horariocol22" name="horariocol2"value="Sala de estar">Sala de estar
                                <input type="radio" id="horariocol23" name="horariocol2"value="Comedor">Comedor<br> 
                                <input type="radio" id="horariocol24" name="horariocol2"value="Otro"> Otro 
                                <textarea name="horariocol3" id="horariocol3" class="form-control" placeholder="Indica aquí otras razones..."></textarea>
                              </td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿HAY ALGUIEN EN CASA QUE TE AYUDE?</td>
                              <td>
                                <input type="radio" id="horariocol41" name="horariocol4"value="Padre">Padre
                                <input type="radio" id="horariocol42" name="horariocol4"value="Madre">Madre
                                <input type="radio" id="horariocol43" name="horariocol4"value="Hermanos">Hermanos
                                <input type="radio" id="horariocol44" name="horariocol4"value="Nadie">Nadie<br> 
                                <input type="radio" id="horariocol45" name="horariocol4"value="Otro"> Otro 
                                <textarea name="horariocol5" id="horariocol5" class="form-control" placeholder="Indica aquí otras razones..."></textarea>
                              </td>
                            </tr>  
                            <tr style="text-align: center;">
                              <td style="width: 30%" >TÉCNICAS QUE UTILIZAS</td>                              
                              <td>
                                <input type="radio" id="horariocol61" name="horariocol6" value="Subrayado">Subrayado
                                <input type="radio" id="horariocol62" name="horariocol6" value="Esquema">Esquema
                                <input type="radio" id="horariocol63" name="horariocol6" value="Resumen">Resumen
                                <input type="radio" id="horariocol64" name="horariocol6" value="Memoria">Memoria<br> 
                                <input type="radio" id="horariocol65" name="horariocol6" value="Desconozco">Desconozco</td>
                            </tr>     
                            <tr style="text-align: center;">
                              <td>TE ESTIMULAN TUS PADRES</td>
                              <td>
                                <input type="radio" id="horariocol71" name="horariocol7" value="No"> No 
                                <input type="radio" id="horariocol72" name="horariocol7" value="Si"> Si <br> 
                                <textarea name="horariocol8" id="horariocol8" class="form-control" placeholder="¿Cómo?..."></textarea>
                              </td>
                            </tr>                       
                          </table>                                            
                        </div>
                      </div>
                      <!-- /.col -->
                      </div>
                </div>
                <!-- /.post -->
              </div>
              <div class="tab-pane" id="tab6">

                <!-- Post -->
                <div class="post">
                  <div class="panel-body" >
                      <div class="col-md-6">
                        <div class="form-group">
                          <table border="1" width="100%">
                            <tr style="background: gray; color: white; text-align: center;">
                              <td width="40%">PREGUNTA</td> 
                              <td width="40%">RESPUESTA</td> 
                            </tr>
                            <tr style="text-align: center;">
                              <td>TUS PRINCIPALES AFICIONES SON:</td>                              
                              <td>
                                <textarea name="aficiones01" id="aficiones01" class="form-control" placeholder="¿Describa?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿REALIZAS ACTIVIDADES EXTRAESCOLARES?<br>(Deporte, música, asociaciones juveniles, otros)</td>
                              <td>
                                <input type="radio" id="aficiones021" name="aficiones02" value="NO"> NO 
                                <input type="radio" id="aficiones022" name="aficiones02" value="SI"> SI 
                                <textarea name="aficiones03" id="aficiones03" class="form-control" placeholder="¿De qué tipo?..."></textarea></td>
                            </tr> 
                            <tr style="text-align: center;">
                              <td>¿LO HAS HECHO AÑOS ANTERIORES?</td>
                              <td>
                                <input type="radio" id="aficiones041" name="aficiones04" value="NO"> NO 
                                <input type="radio" id="aficiones042" name="aficiones04" value="SI"> SI 
                                <textarea name="aficiones05" id="aficiones05" class="form-control" placeholder="¿En cuáles?..."></textarea>
                                <textarea name="aficiones06" id="aficiones06" class="form-control" placeholder="¿Qué hacías?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>TIEMPO DIARIO QUE DEDICAS A VER TELEVISIÓN</td>                              
                              <td>
                                <textarea name="aficiones07" id="aficiones07" class="form-control" placeholder="¿Cantidad de horas?..."></textarea></td>
                            </tr>  
                            <tr style="text-align: center;">
                              <td width="40%">¿CUÁL O CUÁLES SON TUS PROGRAMAS FAVORITOS?</td>
                              <td>
                                <textarea name="aficiones08" id="aficiones08" class="form-control" placeholder="¿Describa?..."></textarea></td>
                            </tr>                          
                          </table>                                            
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>OTRAS OBSERVACIONES QUE QUIERAS HACER A TU TUTOR(A)</label>
                          <textarea name="aficiones09" id="aficiones09" class="form-control" placeholder="Escriba aquí.."></textarea>
                        </div>                        
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>                   
                        </form>                

                      </div>
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
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
<script type="text/javascript" src="scripts/tutoria.js"></script>
<?php 
}
ob_end_flush();
?>


