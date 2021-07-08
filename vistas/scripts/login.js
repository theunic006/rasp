
//Función que se ejecuta al inicio
function init(){



    prender();  


    $("#formulario").on("submit",function(e)
    {
        guardar(e);  
    });

  
    iniciador();

    $.post("../ajax/usuario.php?op=pulsador",
        function(data){
            console.log(data)
        });

}


function prender(){
        //Mostramos los permisos
    $.post("../ajax/usuario.php?op=leds",
        function(data){
            data = JSON.parse(data); 
        if(data[1]!=0){
            $('#pin3').bootstrapToggle('on') 
            pin3(data[1]); 

        }else{
            $('#pin3').bootstrapToggle('off')
            pin3(data[1]);
        }
        if(data[3]!=0){
            $('#pin5').bootstrapToggle('on')  
            pin5(data[3]);
        }else{
            $('#pin5').bootstrapToggle('off')
            pin5(data[3]);
        }
        if(data[5]!=0){
            $('#pin7').bootstrapToggle('on');
            pin7(data[5]);
        }else{
            $('#pin7').bootstrapToggle('off');
            pin7(data[5]);
        }
        if(data[7]!=0){
            $('#pin11').bootstrapToggle('on');
            pin11(data[7]);
        }else{
            $('#pin11').bootstrapToggle('off');
            pin11(data[7]);
        }

        if(data[9]!=0){
            $('#pin12').bootstrapToggle('on');
            pin12(data[9]);
        }else{ 
            $('#pin12').bootstrapToggle('off');
            pin12(data[9]);
        }
        if(data[11]!=0){
            $('#pin13').bootstrapToggle('on');
            pin13(data[11]);  
        }else{ 
            $('#pin13').bootstrapToggle('off');
            pin13(data[11]);
        }
        if(data[13]!=0){
            $('#pin15').bootstrapToggle('on');
            pin15(data[13]);
        }else{ 
            $('#pin15').bootstrapToggle('off');
            pin15(data[13]);
        }
        if(data[15]!=0){
            $('#pin16').bootstrapToggle('on');
            pin16(data[15]);
        }else{
            $('#pin16').bootstrapToggle('off');
            pin16(data[15]);
        }

        if(data[17]!=0){
            $('#pin18').bootstrapToggle('on');
            pin18(data[17]);
        }else{
            $('#pin18').bootstrapToggle('off');
            pin18(data[17]);
        }
        if(data[19]!=0){ 
            $('#pin19').bootstrapToggle('on');
            pin19(data[19]);  
        }else{
            $('#pin19').bootstrapToggle('off');
            pin19(data[19]);
        }
        if(data[21]!=0){
            $('#pin21').bootstrapToggle('on');
            pin21(data[21]);
        }else{
            $('#pin21').bootstrapToggle('off');
            pin21(data[21]);
        }
        if(data[23]!=0){
            $('#pin22').bootstrapToggle('on');
            pin22(data[23]);
        }else{
            $('#pin22').bootstrapToggle('off');
            pin22(data[23]);
        }

        
        }); 
}

function consultar(){ // consulta la sentencia de base de datos
        //Mostramos los permisos
    $.post("../ajax/usuario.php?op=consultarrr", 
        function(data){
            console.log(data)
            if (data!=0) {
                prender();
            }
        });
}

function iniciador() {
   setInterval(function(){ 
        consultar();
   }, 5000);
}


$("#frmAcceso").on('submit',function(e)
{
	e.preventDefault();
    logina=$("#logina").val();
    clavea=$("#clavea").val();

    $.post("../ajax/usuario.php?op=verificar",
        {"logina":logina,"clavea":clavea},
        function(data)
    {
        if (data!="null")
        {
            $(location).attr("href","escritorio.php");            
        }
        else
        {
            bootbox.alert("Usuario y/o Password incorrectos");
        }
    });
})

function guardar(e)
{
    e.preventDefault(); //No se activará la acción predeterminada del evento
    //$("#btnGuardar").prop("disabled",true);
    var formData = new FormData($("#formulario")[0]);

    console.log($("#formulario")[0])
    $.ajax({
        url: "../ajax/usuario.php?op=guardar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos)
        {                    
              bootbox.alert(datos);  
              //mostrarform(false);
              //tabla.ajax.reload();
        }

    });
    limpiar();
}

function limpiar(){
    $("#fecha").val('');
    $("#hora").val('');

}

//Función cancelarform
function cancelarform()
{
    limpiar();
    $("#MyModal").hide();
}


function mostrar(idusuario)
{
    $.post("../ajax/usuario.php?op=mostrar",{idusuario : idusuario}, function(data, status)
    {
        data = JSON.parse(data);        
        mostrarform(true);

        $("#nombre").val(data.nombre);
        $("#tipo_documento").val(data.tipo_documento);
        $("#tipo_documento").selectpicker('refresh');
        $("#num_documento").val(data.num_documento);
        $("#direccion").val(data.direccion);
        $("#telefono").val(data.telefono);
        $("#email").val(data.email);
        $("#cargo").val(data.cargo);
        $("#login").val(data.login);
        $("#clave").val(data.clave);
        $("#imagenmuestra").show();
        $("#imagenmuestra").attr("src","../files/usuarios/"+data.imagen);
        $("#imagenactual").val(data.imagen);
        $("#idusuario").val(data.idusuario);

    });
    $.post("../ajax/usuario.php?op=permisos&id="+idusuario,function(r){
            $("#permisos").html(r);
    });
}


function pin3(e){
   if(e!=0){
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 0, led:'1'}, function(e){}); 
   }else{
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 1, led:'1'}, function(e){}); 
   }
}
function pin5(e){
   if(e!=0){
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 0, led:'2'}, function(e){}); 
   }else{
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 1, led:'2'}, function(e){}); 
   }
}
function pin7(e){
   if(e!=0){
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 0, led:'3'}, function(e){}); 
   }else{
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 1, led:'3'}, function(e){}); 
   }
}
function pin11(e){
   if(e!=0){
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 0, led:'4'}, function(e){}); 
   }else{
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 1, led:'4'}, function(e){}); 
   }
}
function pin12(e){
   if(e!=0){
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 0, led:'5'}, function(e){}); 
   }else{
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 1, led:'5'}, function(e){}); 
   }
}
function pin13(e){
   if(e!=0){
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 0, led:'6'}, function(e){}); 
   }else{
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 1, led:'6'}, function(e){}); 
   }
}
function pin15(e){
   if(e!=0){
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 0, led:'7'}, function(e){}); 
   }else{
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 1, led:'7'}, function(e){}); 
   }
}
function pin16(e){
   if(e!=0){
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 0, led:'8'}, function(e){}); 
   }else{
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 1, led:'8'}, function(e){}); 
   }
}
function pin18(e){
   if(e!=0){
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 0, led:'9'}, function(e){}); 
   }else{
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 1, led:'9'}, function(e){}); 
   }
}
function pin19(e){
   if(e!=0){
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 0, led:'10'}, function(e){}); 
   }else{
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 1, led:'10'}, function(e){}); 
   }
}
function pin21(e){
   if(e!=0){
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 0, led:'11'}, function(e){}); 
   }else{
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 1, led:'11'}, function(e){}); 
   }
}
function pin22(e){
   if(e!=0){
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 0, led:'12'}, function(e){}); 
   }else{
    $.post("../ajax/usuario.php?op=prendeapaga", {valor_estado: 1, led:'12'}, function(e){}); 
   }
}

function funcion3(){
    $('#pin3').change(function() {
        if (!$(this).is(':checked')) {
            $.post("../ajax/usuario.php?op=prendeapaga3", {valor_estado: 1, led:'1'}, function(e){}); 
        }else{
            $.post("../ajax/usuario.php?op=prendeapaga3", {valor_estado: 0, led:'1'}, function(e){}); 
        }
    });
}
function funcion5(){
    $('#pin5').change(function() {
        if (!$(this).is(':checked')) {
            $.post("../ajax/usuario.php?op=prendeapaga5", {valor_estado: 1, led:'2'}, function(e){}); 
        }else{
            $.post("../ajax/usuario.php?op=prendeapaga5", {valor_estado: 0, led:'2'}, function(e){}); 
        }
    });
}
function funcion7(){
    $('#pin7').change(function() {
        if (!$(this).is(':checked')) {
            $.post("../ajax/usuario.php?op=prendeapaga7", {valor_estado: 1, led:'3'}, function(e){}); 
        }else{
            $.post("../ajax/usuario.php?op=prendeapaga7", {valor_estado: 0, led:'3'}, function(e){}); 
        }
    });
}
function funcion11(){
    $('#pin11').change(function() {
        if (!$(this).is(':checked')) {
            $.post("../ajax/usuario.php?op=prendeapaga11", {valor_estado: 1, led:'4'}, function(e){}); 
        }else{
            $.post("../ajax/usuario.php?op=prendeapaga11", {valor_estado: 0, led:'4'}, function(e){}); 
        }
    });
}
function funcion12(){
    $('#pin12').change(function() {
        if (!$(this).is(':checked')) {
            $.post("../ajax/usuario.php?op=prendeapaga12", {valor_estado: 1, led:'5'}, function(e){}); 
        }else{
            $.post("../ajax/usuario.php?op=prendeapaga12", {valor_estado: 0, led:'5'}, function(e){}); 
        }
    });
}
function funcion13(){
    $('#pin13').change(function() {
        if (!$(this).is(':checked')) {
            $.post("../ajax/usuario.php?op=prendeapaga13", {valor_estado: 1, led:'6'}, function(e){}); 
        }else{
            $.post("../ajax/usuario.php?op=prendeapaga13", {valor_estado: 0, led:'6'}, function(e){}); 
        }
    });
}
function funcion15(){
    $('#pin15').change(function() {
        if (!$(this).is(':checked')) {
            $.post("../ajax/usuario.php?op=prendeapaga15", {valor_estado: 1, led:'7'}, function(e){}); 
        }else{
            $.post("../ajax/usuario.php?op=prendeapaga15", {valor_estado: 0, led:'7'}, function(e){}); 
        }
    });
}
function funcion16(){
    $('#pin16').change(function() {
        if (!$(this).is(':checked')) {
            $.post("../ajax/usuario.php?op=prendeapaga16", {valor_estado: 1, led:'8'}, function(e){}); 
        }else{
            $.post("../ajax/usuario.php?op=prendeapaga16", {valor_estado: 0, led:'8'}, function(e){}); 
        }
    });
}
function funcion18(){
    $('#pin18').change(function() {
        if (!$(this).is(':checked')) {
            $.post("../ajax/usuario.php?op=prendeapaga18", {valor_estado: 1, led:'9'}, function(e){}); 
        }else{
            $.post("../ajax/usuario.php?op=prendeapaga18", {valor_estado: 0, led:'9'}, function(e){}); 
        }
    });
}
function funcion19(){
    $('#pin19').change(function() {
        if (!$(this).is(':checked')) {
            $.post("../ajax/usuario.php?op=prendeapaga19", {valor_estado: 1, led:'10'}, function(e){}); 
        }else{
            $.post("../ajax/usuario.php?op=prendeapaga19", {valor_estado: 0, led:'10'}, function(e){}); 
        }
    });
}
function funcion21(){
    $('#pin21').change(function() {
        if (!$(this).is(':checked')) {
            $.post("../ajax/usuario.php?op=prendeapaga21", {valor_estado: 1, led:'11'}, function(e){}); 
        }else{
            $.post("../ajax/usuario.php?op=prendeapaga21", {valor_estado: 0, led:'11'}, function(e){}); 
        }
    });
}
function funcion22(){
    $('#pin22').change(function() {
        if (!$(this).is(':checked')) {
            $.post("../ajax/usuario.php?op=prendeapaga22", {valor_estado: 1, led:'12'}, function(e){}); 
        }else{
            $.post("../ajax/usuario.php?op=prendeapaga22", {valor_estado: 0, led:'12'}, function(e){}); 
        }
    });
}


function idbuton(e){

        var resultado = document.getElementById('resultado');
        resultado.value = e;
}

init();