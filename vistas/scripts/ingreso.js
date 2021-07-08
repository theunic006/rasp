var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();
	listarEscri();


	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	});

	$("#formularioescri").on("submit",function(e)
	{
		verificar(e);
	});

	//Cargamos los items al select tipos de Vehiculos
	$.post("../ajax/ingreso.php?op=selectTipo", function(r){
	            $("#idtipo").html(r);
	            $('#idtipo').selectpicker('refresh');

	});

}

//Función limpiar

function limpiar()
{
		$("#num_placa").val("");
		$("#modelo").val("");
		$("#marca").val("");
		$("#tipo").val("");
		$("#color").val("");
		$("#propietario").val("");
		$("#telefono").val("");
/*
	$(".filas").remove();
	$("#total").html("0");
	
	//Obtenemos la fecha actual
	var now = new Date();
	var day = ("0" + now.getDate()).slice(-2);
	var month = ("0" + (now.getMonth() + 1)).slice(-2);
	var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
    $('#fecha_hora').val(today);

    //Marcamos el primer tipo_documento
    $("#tipo_comprobante").val("");
	$("#tipo_comprobante").selectpicker('refresh');
	*/
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
		$("#formularioregistrosescri").hide();

	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
		$("#formularioregistrosescri").show();
		$("#btnGuardare").prop("disabled",false);
	}
}

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/ingreso.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/ingreso.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}





function mostrar(idregistro)
{
	$.post("../ajax/ingreso.php?op=mostrar",{idregistro : idregistro}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#num_placa").val(data.num_placa);
		$("#modelo").val(data.modelo);
		$("#marca").val(data.marca);
		$("#idtipo").val(data.idtipo);
		$('#idtipo').selectpicker('refresh');
		$("#color").val(data.color);
		$("#propietario").val(data.propietario);
		$("#telefono").val(data.telefono);
		$("#observaciones").val(data.observaciones);
		$("#idregistro").val(data.idregistro);

 	});

}

//Función para anular registros
function anular(idregistro)
{
	bootbox.confirm("¿Está Seguro de anular el ingreso?", function(result){
		if(result)
        {
        	$.post("../ajax/ingreso.php?op=anular", {idregistro : idregistro}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}



function listarEscri()
{
	tabla=$('#tbllistadoescri').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          

		        ],
		"ajax":
				{
					url: '../ajax/ingreso.php?op=listarEscri',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 50,//Paginación
	    "order": [[ 2, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

function verificar(e)
{
	e.preventDefault();
    placanew=$("#placanew").val();

    $.post("../ajax/ingreso.php?op=verificar",
        {"placanew":placanew},

        function(data)
    {
        if (data!="null")
        {
          data = JSON.parse(data);
          //  volver(data);

          if(data.activo != '1'){
          	volver(placanew)
          	imprimir(placanew)		
          }else{
            avisar()
          }
            
        }
        else
        {
            registrar(e);
            imprimir(e);
        }
    });
}

function imprimir(e)
{
//		e.preventDefault();
    placanew=$("#placanew").val();

	var formData = new FormData($("#formularioescri")[0]);
	console.log(placanew);
	if (placanew=='') {

	}else{

			$.ajax({
				url: "ticket.php",
			    type: "POST",
			    data: formData,
			    contentType: false,
			    processData: false,

		               success: function(data){
		                   if(data==1){
		                //       alert('Imprimiendo....');
		                //       console.log(data);
		                       
		                   }else{
		                 //       alert('error...');
		                 //      console.log(data);
		                   }
		               }

				});


	}

}

function registrar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento

	var formData = new FormData($("#formularioescri")[0]);

	$.ajax({
		url: "../ajax/ingreso.php?op=registrar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
}

function volver(idregistro)
{



        	$.post("../ajax/ingreso.php?op=volver", {idregistro : idregistro}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	

}

function avisar(idregistro)
{
        	$.post("../ajax/ingreso.php?op=avisar", 
            function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	

}




init();