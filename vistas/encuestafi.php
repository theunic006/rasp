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
      <!-- START CUSTOM TABS -->
      <h2 class="page-header">Rellene los formulario de forma correcta.</h2>
      <form name="formulario" id="formulario" method="POST">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">1. DATOS PERSONALES</a></li>
              <li><a href="#tab_2" data-toggle="tab">2. DATOS FAMILIARES</a></li>
              <li><a href="#tab_3" data-toggle="tab">3. DATOS ESCOLARES</a></li>
              <li><a href="#tab_4" data-toggle="tab">4. DATOS MÉDICOS</a></li>
              <li><a href="#tab_5" data-toggle="tab">5. HÁBITOS DE ESTUDIO</a></li>
              <li><a href="#tab_6" data-toggle="tab">6. AFICIONES Y TIEMPO LIBRE</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="box box-default">
                  <div class="box-header with-border">
                    <h3 class="box-title">Ingrese sus datos personales</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="row">
                      <div class="panel-body" id="formulariotutoria">
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

                      </form>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.box-body -->
                </div>               
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="box box-default">
                  <div class="box-header with-border">
                    <h3 class="box-title">Ingrese sus datos familiares</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>APELLIDOS DEL PADRE</label>
                          <input type="text" id="txtApellidos" name="txtApellidos" class="form-control" style="font-size:14px" placeholder="Ingrese apellidos del padre...">
                        </div>
                        <div class="form-group">
                          <label>NOMBRES DEL PADRE</label>
                          <input type="text" id="txtApellidos" name="txtApellidos" class="form-control" style="font-size:14px" placeholder="Ingrese nombres del padre...">
                        </div>
                        <div class="form-group">
                          <label>EDAD DEL PADRE</label>
                          <input type="number" id="txtApellidos" name="txtApellidos" class="form-control" style="font-size:14px" placeholder="Ingrese edad del padre...">
                        </div>
                        <div class="form-group">
                          <label>PROFESIÓN DEL PADRE</label>
                          <input type="text" id="txtApellidos" name="txtApellidos" class="form-control" style="font-size:14px" placeholder="Ingrese profesión del padre...">
                        </div>
                        <div class="form-group">
                          <label>¿DONDE TRABAJA EL PADRE?</label>
                          <input type="text" id="txtApellidos" name="txtApellidos" class="form-control" style="font-size:14px" placeholder="Ingrese lugar de trabajo del padre...">
                        </div>
                        <div class="form-group">
                          <label>APELLIDOS DE LA MADRE</label>
                          <input type="text" id="txtApellidos" name="txtApellidos" class="form-control" style="font-size:14px" placeholder="Ingrese apellidos de la madre...">
                        </div>
                        <div class="form-group">
                          <label>NOMBRES DE LA MADRE</label>
                          <input type="text" id="txtApellidos" name="txtApellidos" class="form-control" style="font-size:14px" placeholder="Ingrese nombres de la madre...">
                        </div>
                        <div class="form-group">
                          <label>EDAD DE LA MADRE</label>
                          <input type="number" id="txtApellidos" name="txtApellidos" class="form-control" style="font-size:14px" placeholder="Ingrese edad de la madre...">
                        </div>
                        <div class="form-group">
                          <label>PROFESIÓN DE LA MADRE</label>
                          <input type="text" id="txtApellidos" name="txtApellidos" class="form-control" style="font-size:14px" placeholder="Ingrese profesión de la madre...">
                        </div>
                        <div class="form-group">
                          <label>¿DONDE TRABAJA LA MADRE?</label>
                          <input type="text" id="txtApellidos" name="txtApellidos" class="form-control" style="font-size:14px" placeholder="Ingrese lugar de trabajo de la madre...">
                        </div>
                        <div class="form-group">
                          <label>¿CUÁNTOS HERMANOS Y HERMANAS TIENES?</label>
                          <input type="number" id="txtApellidos" name="txtApellidos" class="form-control" style="font-size:14px" placeholder="Ingrese cantidad hermanos(as)...">
                        </div>
                        <div class="form-group">
                          <label>¿TUS PADRES ESTÁN?</label>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio1" id="radio1" value="option1" checked>
                              CASADOS
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio1" id="radio1" value="option2">
                              SEPARADOS/DIVORCIADOS
                            </label>
                          </div> 
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio1" id="radio1" value="option2">
                              UNIÓN LIBRE
                            </label>
                          </div>                  
                        </div>
                        <div class="form-group">
                          <label>¿AMBOS VIVEN?</label>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio2" id="radio2" value="option1" checked>
                              SI
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio2" id="radio2" value="option2">
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
                              <input type="radio" name="radio3" id="radio3" value="option1" checked>
                              PADRE
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio3" id="radio3" value="option2">
                              MADRE
                            </label>
                          </div>                  
                        </div>
                        <div class="form-group">
                          <label>¿CÓMO ES LA RELACIÓN CON TUS PADRES?</label>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio4" id="radio4" value="option1" checked>
                              MUY BUENA
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio4" id="radio4" value="option2">
                              BUENA
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio4" id="radio4" value="option2">
                              REGULAR
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio4" id="radio4" value="option2">
                              MALA
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio4" id="radio4" value="option2">
                              MUY MALA
                            </label>
                          </div>                  
                        </div>
                        <div class="form-group">
                          <label>CUÁNDO SALES LOS FINES DE SEMANA Y EN VACACIONES ¿CON QUIÉN VIVES?</label>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio5" id="radio5" value="option1" checked>
                              PADRE Y MADRE
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio5" id="radio5" value="option2">
                              PADRASTRO Y MADRE
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio5" id="radio5" value="option2">
                              PADRE Y MADRASTRA
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio5" id="radio5" value="option2">
                              SÓLO PADRE
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio5" id="radio5" value="option2">
                              SÓLO MADRE
                            </label>
                          </div>                  
                        </div>                        
                        
                       
                        <div class="form-group">
                          <label>¿VIVE ALGUIEN MÁS EN CASA? ¿QUIÉN O QUIENES? <br>(No incluyen padres y hermanos)</label>
                          <textarea rows="3" class="form-control" placeholder="Escriba aquí..."></textarea>
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
                              <td><input type="radio" name="radio6" id="radio6" value="option2"></td>
                              <td><input type="radio" name="radio6" id="radio6" value="option2"></td>
                              <td><textarea rows="2" class="form-control" placeholder="Escriba aquí..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿Te llevas bien con tus hermanos?</td>
                              <td><input type="radio" name="radio7" id="radio7" value="option2"></td>
                              <td><input type="radio" name="radio7" id="radio7" value="option2"></td>
                              <td><textarea rows="2" class="form-control" placeholder="Escriba aquí..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿Te gusta vivir con tu familia?</td>
                              <td><input type="radio" name="radio8" id="radio8" value="option2"></td>
                              <td><input type="radio" name="radio8" id="radio8" value="option2"></td>
                              <td><textarea rows="2" class="form-control" placeholder="Escriba aquí..."></textarea></td>
                            </tr>
                          </table>
                                            
                        </div>
                        <div class="form-group">
                          <label>¿HAY ALGO EN TU SITUCIACIÓN FAMILIAR QUE SE PUEDA CONSIDERAR ESPECIAL? (Enfermedades, desamparo, abusos, otros)</label>
                          <textarea rows="3" class="form-control" placeholder="Escriba aquí..."></textarea>             
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.box-body -->
                </div>                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <div class="box box-default">
                  <div class="box-header with-border">
                    <h3 class="box-title">Ingrese sus datos escolares</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="row">
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
                              <td><input type="radio" name="radio9" id="radio9" value="option2"></td>
                              <td><input type="radio" name="radio9" id="radio9" value="option2"></td>
                              <td><textarea rows="5" class="form-control" placeholder="Mencione los tipos"></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>CREES QUE CUMPLES CON LO QUE ELLOS ESPERAN DE TI?</td>
                              <td><input type="radio" name="radio6" id="radio6" value="option2"></td>
                              <td><input type="radio" name="radio6" id="radio6" value="option2"></td>
                              <td><textarea rows="2" class="form-control" placeholder="¿POR QUÉ LO CREES ASÍ?"></textarea></td>
                            </tr>                            
                          </table>
                        </div>                        
                        <div class="form-group">
                          <label>¿QUÉ PROBLEMAS CREES QUE DIFICULTEN TUS ESTUDIOS?</label><br>
                          <input type="checkbox" value=""> Problemas visuales 
                          <input type="checkbox" value=""> Bullying en el colegio <br>
                          <input type="checkbox" value=""> Déficit de atención 
                          <input type="checkbox" value=""> Habilidades sociales<br>
                          <input type="checkbox" value=""> Dislexia (dificultad en el lenguaje)
                          <input type="checkbox" value=""> Relación con los padres<br>
                          <input type="checkbox" value=""> Cambio de institución educativa
                          <input type="checkbox" value=""> Consumo de sustancias estupefacientes, psicotrópicas<br>
                          <input type="checkbox" value=""> Violencia intrafamiliar
                          <input type="checkbox" value=""> Uso de teléfonos celulares en clases<br>
                          <input type="checkbox" value=""> Uso de las redes sociales
                          <input type="checkbox" value=""> Falta de ayuda en el hogar<br>
                          <input type="checkbox" value=""> Relaciones sentimentales
                          <input type="checkbox" value=""> Otro
                          <textarea rows="2" class="form-control" placeholder="Indica aquí otro motivo..."></textarea>
                        </div>
                        <div class="form-group">
                          <label>¿QUÉ ACTIVIDADES CREES QUE TE LIMITAN EN TUS ESTUDIOS?</label><br>
                          <input type="checkbox" value=""> Tareas en exceso 
                          <input type="checkbox" value=""> Explicaciones en clases <br>
                          <input type="checkbox" value=""> Tomar apuntes 
                          <input type="checkbox" value=""> Trabajos de grupos<br>
                          <input type="checkbox" value=""> Exámenes
                          <input type="checkbox" value=""> Otro
                          <textarea rows="2" class="form-control" placeholder="Indica aquí otro motivo..."></textarea>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>¿CÓMO REACCIONAN TUS PADRES ANTE TUS CALIFICACIONES?</label>
                          <textarea rows="3" class="form-control" placeholder="Escriba aquí"></textarea>
                        </div>
                        <div class="form-group">
                          <label>TU PADRE DESEA QUE TE DEDIQUES A:</label>
                          <textarea rows="3" class="form-control" placeholder="Escriba aquí..."></textarea>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                          <label>TU MADRE OPINA QUE LO QUE MÁS TE CONVIENE ES:</label>
                          <textarea rows="3" class="form-control" placeholder="Escriba aquí..."></textarea>
                        </div>
                        <div class="form-group">
                          <label>ALGUNOS AMIGOS TE ACONSEJAN QUE LO MEJOR PARA TI ES:</label>
                          <textarea rows="3" class="form-control" placeholder="Escriba aquí.."></textarea>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <div class="tab-pane" id="tab_4">
                <div class="box box-default">
                  <div class="box-header with-border">
                    <h3 class="box-title">Ingrese sus datos médicos</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="row">
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
                              <td><input type="radio" name="radio6" id="radio6" value="option2"></td>
                              <td><input type="radio" name="radio6" id="radio6" value="option2"></td>
                              <td><textarea rows="3" class="form-control" placeholder="¿De qué tipo?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>TRATAMIENTO MÉDICO O PSICOLÓGICO. ¿LO HAS RECIBIDO ALGUNA VEZ?</td>
                              <td><input type="radio" name="radio6" id="radio6" value="option2"></td>
                              <td><input type="radio" name="radio6" id="radio6" value="option2"></td>
                              <td><textarea rows="3" class="form-control" placeholder="¿De qué tipo?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿Has estado alguna vez hospitalizado(a)?</td>
                              <td><input type="radio" name="radio6" id="radio6" value="option2"></td>
                              <td><input type="radio" name="radio6" id="radio6" value="option2"></td>
                              <td><textarea rows="3" class="form-control" placeholder="¿Motivo?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿Has estado alguna vez hospitalizado(a)?</td>
                              <td><input type="radio" name="radio6" id="radio6" value="option2"></td>
                              <td><input type="radio" name="radio6" id="radio6" value="option2"></td>
                              <td><textarea rows="3" class="form-control" placeholder="¿Motivo?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿Has tenido algún tipo de operación?</td>
                              <td><input type="radio" name="radio7" id="radio7" value="option2"></td>
                              <td><input type="radio" name="radio7" id="radio7" value="option2"></td>
                              <td><textarea rows="3" class="form-control" placeholder="¿De qué?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>En la actualidad ¿Padeces alguna enfermedad? (epilepsía, diabetes, asma, otros)</td>
                              <td><input type="radio" name="radio8" id="radio8" value="option2"></td>
                              <td><input type="radio" name="radio8" id="radio8" value="option2"></td>
                              <td><textarea rows="3" class="form-control" placeholder="¿Cuál?..."></textarea></td>
                            </tr>
                          </table>                                            
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>¿PADECES ALGUNA ENFERMEDAD O EXISTE ALGUNA CONDICIÓN FÍSICA QUE TE AFECTE?<br>(oído, vista, enfermedades respiratorias, otras)</label>
                          <textarea rows="3" class="form-control" placeholder="Escriba aquí.."></textarea>
                        </div>                        
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_5">
                <div class="box box-default">
                  <div class="box-header with-border">
                    <h3 class="box-title">Ingrese sus datos de hábitos de estudio</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>CUANDO TIENES PROBLEMAS CON EL ESTUDIO ¿A QUÉ PIENSAS QUE SE DEBEN?</label><br>
                          <input type="checkbox" value=""> Me organizo mal 
                          <input type="checkbox" value=""> No me esfuerzo lo suficiente <br>
                          <input type="checkbox" value=""> No encuentro las ideas esenciales 
                          <input type="checkbox" value=""> Tengo mala suerte<br>
                          <input type="checkbox" value=""> Siento poco interés
                          <input type="checkbox" value=""> No entiendo lo que estudio<br>
                          <input type="checkbox" value=""> No tengo en casa un lugar adecuado para estudiar
                          <input type="checkbox" value=""> Creo que no valgo para estudiar<br>
                          <input type="checkbox" value=""> Otras razones
                          <textarea rows="2" class="form-control" placeholder="Indica aquí otras razones..."></textarea>
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
                              <td colspan="2"><input type="checkbox" value=""> Nada <input type="checkbox" value=""> Una hora <input type="checkbox" value=""> Dos horas <input type="checkbox" value=""> Más de dos horas</td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>ESTUDIAS</td>
                              <td colspan="2"><input type="checkbox" value=""> Nada <input type="checkbox" value=""> Una hora <input type="checkbox" value=""> Dos horas <input type="checkbox" value=""> Más de dos horas</td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>TE DEDICAS A LA LECTURA</td>
                              <td>Semanalmente:</td>
                              <td><input type="checkbox" value=""> Nada <input type="checkbox" value=""> Una día <input type="checkbox" value=""> Algunos días <input type="checkbox" value=""> Inter-diario <input type="checkbox" value=""> Diario</td>                              
                            </tr>
                            <tr style="text-align: center;">
                              <td>TE DEDICAS A LA LECTURA</td>
                              <td>Por ese(os) día(s):</td>
                              <td><input type="checkbox" value=""> Nada <input type="checkbox" value=""> 1 hora <input type="checkbox" value=""> Menos de una hora <input type="checkbox" value=""> Más de una hora</td>                              
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
                              <td><input type="checkbox" value=""> Primeras horas de la mañana <input type="checkbox" value=""> Después de comer <input type="checkbox" value=""> Tarde <input type="checkbox" value=""> Noche</td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>LUGAR PREFERIDO</td>
                              <td><input type="checkbox" value=""> En mi habitación <input type="checkbox" value=""> Sala de estar <input type="checkbox" value=""> Comedor <br> <input type="checkbox" value=""> Otro <textarea rows="2" class="form-control" placeholder="Indica aquí otras razones..."></textarea>
                              </td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿HAY ALGUIEN EN CASA QUE TE AYUDE?</td>
                              <td><input type="checkbox" value=""> Padre <input type="checkbox" value=""> Madre <input type="checkbox" value=""> Hermanos <input type="checkbox" value=""> Nadie <br> <input type="checkbox" value=""> Otro <textarea rows="2" class="form-control" placeholder="Indica aquí otras razones..."></textarea>
                              </td>
                            </tr>  
                            <tr style="text-align: center;">
                              <td style="width: 30%" >TÉCNICAS QUE UTILIZAS</td>                              
                              <td><input type="checkbox" value=""> Subrayado <input type="checkbox" value=""> Esquema <input type="checkbox" value=""> Resumen <input type="checkbox" value=""> Memoria <input type="checkbox" value=""> Desconozco</td>
                            </tr>     
                            <tr style="text-align: center;">
                              <td>TE ESTIMULAN TUS PADRES</td>
                              <td><input type="checkbox" value=""> No <input type="checkbox" value=""> Si <br> <textarea rows="2" class="form-control" placeholder="¿Cómo?..."></textarea>
                              </td>
                            </tr>                       
                          </table>                                            
                        </div>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <div class="tab-pane" id="tab_6">
                <div class="box box-default">
                  <div class="box-header with-border">
                    <h3 class="box-title">Ingrese sus datos de aficiones y tiempo libre</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <table border="1" width="100%">
                            <tr style="background: gray; color: white; text-align: center;">
                              <td width="40%">PREGUNTA</td> 
                              <td width="40%">RESPUESTA</td> 
                            </tr>
                            <tr style="text-align: center;">
                              <td>TUS PRINCIPALES AFICIONES SON:</td>                              
                              <td><textarea rows="3" class="form-control" placeholder="¿Describa?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>¿REALIZAS ACTIVIDADES EXTRAESCOLARES?<br>(Deporte, música, asociaciones juveniles, otros)</td>
                              <td><input type="radio" value=""> NO <input type="radio" value=""> SI <textarea rows="3" class="form-control" placeholder="¿De qué tipo?..."></textarea></td>
                            </tr> 
                            <tr style="text-align: center;">
                              <td>¿LO HAS HECHO AÑOS ANTERIORES?</td>
                              <td><input type="radio" value=""> NO <input type="radio" value=""> SI <textarea rows="3" class="form-control" placeholder="¿En cuáles?..."></textarea><textarea rows="2" class="form-control" placeholder="¿Qué hacías?..."></textarea></td>
                            </tr>
                            <tr style="text-align: center;">
                              <td>TIEMPO DIARIO QUE DEDICAS A VER TELEVISIÓN</td>                              
                              <td><textarea rows="3" class="form-control" placeholder="¿Cantidad de horas?..."></textarea></td>
                            </tr>  
                            <tr style="text-align: center;">
                              <td width="40%">¿CUÁL O CUÁLES SON TUS PROGRAMAS FAVORITOS?</td>
                              <td><textarea rows="3" class="form-control" placeholder="¿Describa?..."></textarea></td>
                            </tr>                          
                          </table>                                            
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>OTRAS OBSERVACIONES QUE QUIERAS HACER A TU TUTOR(A)</label>
                          <textarea rows="5" class="form-control" placeholder="Escriba aquí.."></textarea>
                        </div>                        
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
            </div>
            <!-- /.tab-content -->
            </div>
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

      <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
    </div>
      </form>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
