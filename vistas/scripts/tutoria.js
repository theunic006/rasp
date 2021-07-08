var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
}

//Función limpiar
function limpiar()
{
	$("#idtutoria").val("");
	$("#apellidos").val("");
	$("#nombres").val("");
	$("#edad").val("");
	$("#domicilio").val("");
	$("#localidad").val("");
	$("#telefono").val("");
	$("#celular").val("");
	$("#celularpadre").val("");
	$("#celularmadre").val("");
	$("#fechanacimiento").val("");
	$("#lugarnacimiento").val("");
	$("#distrito").val("");
	$("#provincia").val("");
	$("#departamento").val("");
	$("#apellidopadre").val("");
	$("#nombrepadre").val("");
	$("#edadpadre").val("");
	$("#profpadre").val("");
	$("#trabpadre").val("");
	$("#apellidomadre").val("");
	$("#nombremadre").val("");
	$("#edadmadre").val("");
	$("#profmadre").val("");
	$("#trabmadre").val("");
	$("#canthermanos").val("");

	$("#estadopadres").val("");
	$("#viven").val("");
	$("#solovive").val("");
	$("#relacion").val("");
	$("#conquienvives").val("");
	$("#alguienmas").val("");
	$("#situacionespecial").val("");

	$("#dialogo").val("");
	$("#dialogotext").val("");
	$("#llevarhermano").val("");
	$("#llevarhermanotext").val("");
	$("#vivirfamilia").val("");
	$("#vivirfamiliatext").val("");

	$("#tiposestudio01").val("");
	$("#tiposdeestudiotext02").val("");
	$("#esperan03").val("");
	$("#esperantext04").val("");
	$("#problema01").val("");
	$("#problema02").val("");
	$("#problema03").val("");
	$("#problema04").val("");
	$("#problema05").val("");
	$("#problema06").val("");
	$("#problema07").val("");
	$("#problema08").val("");
	$("#problema09").val("");
	$("#problema10").val("");
	$("#problema11").val("");
	$("#problema12").val("");
	$("#problema13").val("");
	$("#problema14").val("");
	$("#motivo15").val("");

	$("#actividades01").val("");
	$("#actividades02").val("");
	$("#actividades03").val("");
	$("#actividades04").val("");
	$("#actividades05").val("");
	$("#actividades06").val("");
	$("#motivo07").val("");
	$("#calificaciones01").val("");
	$("#dedicacion02").val("");
	$("#convinene03").val("");
	$("#amigo04").val("");

	$("#datmedico01").val("");
	$("#datmedico02").val("");
	$("#datmedico03").val("");
	$("#datmedico04").val("");
	$("#datmedico05").val("");
	$("#datmedico06").val("");
	$("#datmedico07").val("");
	$("#datmedico08").val("");
	$("#datmedico09").val("");
	$("#datmedico10").val("");
	$("#datmedico11").val("");
	$("#datmedico12").val("");
	$("#datmedico13").val("");

	$("#habito01").val("");
	$("#habito02").val("");
	$("#habito03").val("");
	$("#habito04").val("");
	$("#habito05").val("");
	$("#habito06").val("");
	$("#habito07").val("");
	$("#habito08").val("");
	$("#habito09").val("");
	$("#otrasrazones10").val("");
	$("#estudios01").val("");
	$("#estudios02").val("");
	$("#estudios03").val("");
	$("#estudios04").val("");

	$("#horariocol1").val("");
	$("#horariocol2").val("");
	$("#horariocol3").val("");
	$("#horariocol4").val("");
	$("#horariocol5").val("");
	$("#horariocol6").val("");
	$("#horariocol7").val("");
	$("#horariocol8").val("");

	$("#aficiones01").val("");
	$("#aficiones02").val("");
	$("#aficiones03").val("");
	$("#aficiones04").val("");
	$("#aficiones05").val("");
	$("#aficiones06").val("");
	$("#aficiones07").val("");
	$("#aficiones08").val("");
	$("#aficiones09").val("");

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
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
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
					url: '../ajax/tutoria.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 10,//Paginación
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
		url: "../ajax/tutoria.php?op=guardaryeditar",
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

function mostrar(idtutoria)
{
	

	$.post("../ajax/tutoria.php?op=mostrar",{idtutoria : idtutoria}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);
		

 		$("#idtutoria").val(data.idtutoria);
		$("#apellidos").val(data.apellidos);
		$("#nombres").val(data.nombres);
		$("#edad").val(data.edad);
		$("#domicilio").val(data.domicilio);
		$("#localidad").val(data.localidad);
		$("#telefono").val(data.telefono);
		$("#celular").val(data.celular);
		$("#celularpadre").val(data.celularpadre);
		$("#celularmadre").val(data.celularmadre);
		$("#fechanacimiento").val(data.fechanacimiento);
		$("#lugarnacimiento").val(data.lugarnacimiento);
		$("#distrito").val(data.distrito);
		$("#provincia").val(data.provincia);
		$("#departamento").val(data.departamento);
		$("#apellidopadre").val(data.apellidopadre);
		$("#nombrepadre").val(data.nombrepadre);
		$("#edadpadre").val(data.edadpadre);
		$("#profpadre").val(data.profpadre);
		$("#trabpadre").val(data.trabpadre);
		$("#apellidomadre").val(data.apellidomadre);
		$("#nombremadre").val(data.nombremadre);
		$("#edadmadre").val(data.edadmadre);
		$("#profmadre").val(data.profmadre);
		$("#trabmadre").val(data.trabmadre);
		$("#canthermanos").val(data.canthermanos);

	//	$("#estadopadres").val(data.estadopadres); //combo
		var estadopadres1 = document.getElementById("estadopadres1");
		var estadopadres2 = document.getElementById("estadopadres2");
		var estadopadres3 = document.getElementById("estadopadres3");
		if (data.estadopadres=="CASADOS") {
			estadopadres1.checked=true;
		}else{
			if(data.estadopadres=="SEPARADOS/DIVORCIADOS"){
				estadopadres2.checked=true;
			}else if(data.estadopadres=="UNION LIBRE"){
				estadopadres3.checked=true;
			}
		}

		var viven1 = document.getElementById("viven1");
		var viven2 = document.getElementById("viven2");
		if (data.viven=="SI") {
			viven1.checked=true;
		}else if (data.viven=="NO"){
			viven2.checked=true;
		}
		var solovive1 = document.getElementById("solovive1");
		var solovive2 = document.getElementById("solovive2");
		if (data.solovive=="PADRE") {
			solovive1.checked=true;
		}else if(data.solovive=="MADRE") {
			solovive2.checked=true;
		}

		var relacion1 = document.getElementById("relacion1");
		var relacion2 = document.getElementById("relacion2");
		var relacion3 = document.getElementById("relacion3");
		var relacion4 = document.getElementById("relacion4");
		var relacion5 = document.getElementById("relacion5");
		if (data.relacion=="MUY BUENA") {
			relacion1.checked=true;
		}else if(data.relacion=="BUENA"){
			relacion2.checked=true;
		}else if(data.relacion=="REGULAR"){
			relacion3.checked=true;
		}else if(data.relacion=="MALA"){
			relacion4.checked=true;
		}else if(data.relacion=="MUY MALA"){
			relacion5.checked=true;
		}

		var conquienvives1 = document.getElementById("conquienvives1");
		var conquienvives2 = document.getElementById("conquienvives2");
		var conquienvives3 = document.getElementById("conquienvives3");
		var conquienvives4 = document.getElementById("conquienvives4");
		var conquienvives5 = document.getElementById("conquienvives5");
		if (data.conquienvives=="PADRE MADRE") {
			conquienvives1.checked=true;
		}else if(data.conquienvives=="PADRASTRO Y MADRE"){
			conquienvives2.checked=true;
		}else if(data.conquienvives=="PADRE Y MADRASTRA"){
			conquienvives3.checked=true;
		}else if(data.conquienvives=="SOLO PADRE"){
			conquienvives4.checked=true;
		}else if(data.conquienvives=="SÓLO MADRE"){
			conquienvives5.checked=true;
		}

		$("#alguienmas").val(data.alguienmas);
		$("#situacionespecial").val(data.situacionespecial);

		$("#dialogotext").val(data.dialogotext);
		$("#llevarhermanotext").val(data.llevarhermanotext);
		$("#vivirfamiliatext").val(data.vivirfamiliatext);

		var dialogo1 = document.getElementById("dialogo1");
		var dialogo2 = document.getElementById("dialogo2");
		if (data.dialogo=="SI") {
			dialogo1.checked=true;
		}else if (data.dialogo=="NO") {
			dialogo2.checked=true;
		}
		var llevarhermano1 = document.getElementById("llevarhermano1");
		var llevarhermano2 = document.getElementById("llevarhermano2");
		if (data.llevarhermano=="SI") {
			llevarhermano1.checked=true;
		}else if (data.llevarhermano=="NO"){
			llevarhermano2.checked=true;
		}
		var vivirfamilia1 = document.getElementById("vivirfamilia1");
		var vivirfamilia2 = document.getElementById("vivirfamilia2");
		if (data.vivirfamilia=="SI") {
			vivirfamilia1.checked=true;
		}else if(data.vivirfamilia=="NO"){
			vivirfamilia2.checked=true;
		}

// DATOA ESCOLARES

		var tiposestudio011 = document.getElementById("tiposestudio011");
		var tiposestudio012 = document.getElementById("tiposestudio012");
		if (data.tiposestudio01=="SI") {
			tiposestudio011.checked=true;
		}else if (data.tiposestudio01=="NO"){
			tiposestudio012.checked=true;
		}

		var esperan031 = document.getElementById("esperan031");
		var esperan032 = document.getElementById("esperan032");
		if (data.esperan03=="SI") {
			esperan031.checked=true;
		}else if (data.esperan03=="NO"){
			esperan032.checked=true;
		}
		$("#tiposdeestudiotext02").val(data.tiposdeestudiotext02);
		$("#esperantext04").val(data.esperantext04);

//		$("#problema01").val(data.problema01);

		var problema01 = document.getElementById("problema011");
		if (data.problema02=="Bullying en el colegio") { problema01.checked=true;}
		var problema02 = document.getElementById("problema022");
		if (data.problema02=="Bullying en el colegio") { problema02.checked=true;}
		var problema03 = document.getElementById("problema033");
		if (data.problema03=="Deficit de atención") { problema03.checked=true;}
		var problema04 = document.getElementById("problema044");
		if (data.problema04=="Habilidades sociales") { problema04.checked=true;}
		var problema05 = document.getElementById("problema055");
		if (data.problema05=="Dislexia (dificultad en el lenguaje)") { problema05.checked=true;}
		var problema06 = document.getElementById("problema066");
		if (data.problema06=="Relación con los padres") { problema06.checked=true;}
		var problema07 = document.getElementById("problema077");
		if (data.problema07=="Cambio de institución educativa") { problema07.checked=true;}
		var problema08 = document.getElementById("problema088");
		if (data.problema08=="Consumo de sustancias estupefacientes, psicotrópicas") { problema08.checked=true;}
		var problema09 = document.getElementById("problema099");
		if (data.problema09=="Violencia intrafamiliar") { problema09.checked=true;}
		var problema10 = document.getElementById("problema100");
		if (data.problema10=="Uso de teléfonos celulares en clases") { problema10.checked=true;}
		var problema11 = document.getElementById("problema111");
		if (data.problema11=="Uso de las redes sociales") { problema11.checked=true;}
		var problema12 = document.getElementById("problema122");
		if (data.problema12=="Falta de ayuda en el hogar") { problema12.checked=true;}
		var problema13 = document.getElementById("problema133");
		if (data.problema13=="Relaciones sentimentales") { problema13.checked=true;}
		var problema14 = document.getElementById("problema144");
		if (data.problema14=="Otro") { problema14.checked=true;}
		
		$("#motivo15").val(data.motivo15);

		var actividades01 = document.getElementById("actividades011");
		if (data.actividades01=="Tareas en exceso") { actividades01.checked=true;}
		var actividades02 = document.getElementById("actividades022");
		if (data.actividades02=="Explicaciones en clases") { actividades02.checked=true;}
		var actividades03 = document.getElementById("actividades033");
		if (data.actividades03=="Tomar apuntes") { actividades03.checked=true;}
		var actividades04 = document.getElementById("actividades044");
		if (data.actividades04=="Trabajos de grupos") { actividades04.checked=true;}
		var actividades05 = document.getElementById("actividades055");
		if (data.actividades05=="Exámenes") { actividades05.checked=true;}
		var actividades06 = document.getElementById("actividades066");
		if (data.actividades06=="Otro") { actividades06.checked=true;}

		$("#motivo07").val(data.motivo07);
		$("#calificaciones01").val(data.calificaciones01);
		$("#dedicacion02").val(data.dedicacion02);
		$("#convinene03").val(data.convinene03);
		$("#amigo04").val(data.amigo04);


		var datmedico011 = document.getElementById("datmedico011");
		var datmedico012 = document.getElementById("datmedico012");
		if (data.datmedico01=="SI") {
			datmedico011.checked=true;
		}else if (data.datmedico01=="NO"){
			datmedico012.checked=true;
		}
		$("#datmedico02").val(data.datmedico02);
		var datmedico031 = document.getElementById("datmedico031");
		var datmedico032 = document.getElementById("datmedico032");
		if (data.datmedico03=="SI") {
			datmedico031.checked=true;
		}else if (data.datmedico03=="NO"){
			datmedico032.checked=true;
		}
		$("#datmedico04").val(data.datmedico04);
		var datmedico051 = document.getElementById("datmedico051");
		var datmedico052 = document.getElementById("datmedico052");
		if (data.datmedico05=="SI") {
			datmedico051.checked=true;
		}else if (data.datmedico05=="NO"){
			datmedico052.checked=true;
		}
		$("#datmedico06").val(data.datmedico06);
		var datmedico071 = document.getElementById("datmedico071");
		var datmedico072 = document.getElementById("datmedico072");
		if (data.datmedico07=="SI") {
			datmedico071.checked=true;
		}else if (data.datmedico07=="NO"){
			datmedico072.checked=true;
		}
		$("#datmedico08").val(data.datmedico08);
		var datmedico091 = document.getElementById("datmedico091");
		var datmedico092 = document.getElementById("datmedico092");
		if (data.datmedico09=="SI") {
			datmedico091.checked=true;
		}else if (data.datmedico09=="NO") {
			datmedico092.checked=true;
		}
		$("#datmedico10").val(data.datmedico10);
		var datmedico111 = document.getElementById("datmedico111");
		var datmedico112 = document.getElementById("datmedico112");
		if (data.datmedico11=="SI") {
			datmedico111.checked=true;
		}else if (data.datmedico11=="NO") {
			datmedico112.checked=true;
		}
		$("#datmedico12").val(data.datmedico12);
		$("#datmedico13").val(data.datmedico13);


		var habito011 = document.getElementById("habito011");
		if (data.habito01=="Me organizo mal") { habito011.checked=true;}
		var habito012 = document.getElementById("habito012");
		if (data.habito02=="No me esfuerzo lo suficiente") { habito012.checked=true;}
		var habito013 = document.getElementById("habito013");
		if (data.habito03=="No encuentro las ideas esenciales") { habito013.checked=true;}
		var habito014 = document.getElementById("habito014");
		if (data.habito04=="Tengo mala suerte") { habito014.checked=true;}
		var habito015 = document.getElementById("habito015");
		if (data.habito05=="Siento poco interes") { habito015.checked=true;}
		var habito016 = document.getElementById("habito016");
		if (data.habito06=="No entiendo lo que estudio") { habito016.checked=true;}
		var habito017 = document.getElementById("habito017");
		if (data.habito07=="No tengo en casa un lugar adecuado para estudiar") { habito017.checked=true;}
		var habito018 = document.getElementById("habito018");
		if (data.habito08=="Creo que no valgo para estudiar") { habito018.checked=true;}
		var habito019 = document.getElementById("habito019");
		if (data.habito09=="Otras razones") { habito019.checked=true;}
		$("#otrasrazones10").val(data.otrasrazones10);

		var estudios011 = document.getElementById("estudios011");
		var estudios012 = document.getElementById("estudios012");
		var estudios013 = document.getElementById("estudios013");
		var estudios014 = document.getElementById("estudios014");
		if (data.estudios01=="Nada") {
			estudios011.checked=true;
		}else if(data.estudios01=="Una hora"){
			estudios012.checked=true;
		}else if(data.estudios01=="Dos horas"){
			estudios013.checked=true;
		}else if(data.estudios01=="Más de dos horas"){
			estudios014.checked=true;
		}

		var estudios021 = document.getElementById("estudios021");
		var estudios022 = document.getElementById("estudios022");
		var estudios023 = document.getElementById("estudios023");
		var estudios024 = document.getElementById("estudios024");
		if (data.estudios02=="Nada") {
			estudios021.checked=true;
		}else if(data.estudios02=="Una hora"){
			estudios022.checked=true;
		}else if(data.estudios02=="Dos horas"){
			estudios023.checked=true;
		}else if(data.estudios02=="Más de dos horas"){
			estudios024.checked=true;
		}

		var estudios031 = document.getElementById("estudios031");
		var estudios032 = document.getElementById("estudios032");
		var estudios033 = document.getElementById("estudios033");
		var estudios034 = document.getElementById("estudios034");
		var estudios035 = document.getElementById("estudios035");
		if (data.estudios03=="Nada") {
			estudios031.checked=true;
		}else if(data.estudios03=="Una dia"){
			estudios032.checked=true;
		}else if(data.estudios03=="Algunos dias"){
			estudios033.checked=true;
		}else if(data.estudios03=="Inter-diario"){
			estudios034.checked=true;
		}else if(data.estudios03=="Diario"){
			estudios035.checked=true;
		}

		var estudios041 = document.getElementById("estudios041");
		var estudios042 = document.getElementById("estudios042");
		var estudios043 = document.getElementById("estudios043");
		var estudios044 = document.getElementById("estudios044");
		if (data.estudios04=="Nada") {
			estudios041.checked=true;
		}else if(data.estudios04=="1 hora"){
			estudios042.checked=true;
		}else if(data.estudios04=="Menos de una hora"){
			estudios043.checked=true;
		}else if(data.estudios04=="Más de una hora"){
			estudios044.checked=true;
		}


		var horariocol11 = document.getElementById("horariocol11");
		var horariocol12 = document.getElementById("horariocol12");
		var horariocol13 = document.getElementById("horariocol13");
		var horariocol14 = document.getElementById("horariocol14");
		if (data.horariocol1=="Primeras horas de la mañana") {
			horariocol11.checked=true;
		}else if(data.horariocol1=="Después de comer"){
			horariocol12.checked=true;
		}else if(data.horariocol1=="Tarde"){
			horariocol13.checked=true;
		}else if(data.horariocol1=="Noche"){
			horariocol14.checked=true;
		}

		var horariocol21 = document.getElementById("horariocol21");
		var horariocol22 = document.getElementById("horariocol22");
		var horariocol23 = document.getElementById("horariocol23");
		var horariocol24 = document.getElementById("horariocol24");
		if (data.horariocol2=="En mi habitación") {
			horariocol21.checked=true;
		}else if(data.horariocol2=="Sala de estar"){
			horariocol22.checked=true;
		}else if(data.horariocol2=="Comedor"){
			horariocol23.checked=true;
		}else if(data.horariocol2=="Otro"){
			horariocol24.checked=true;
		}
		$("#horariocol3").val(data.horariocol3);
		var horariocol41 = document.getElementById("horariocol41");
		var horariocol42 = document.getElementById("horariocol42");
		var horariocol43 = document.getElementById("horariocol43");
		var horariocol44 = document.getElementById("horariocol44");
		if (data.horariocol4=="Padre") {
			horariocol41.checked=true;
		}else if(data.horariocol4=="Madre"){
			horariocol42.checked=true;
		}else if(data.horariocol4=="Hermanos"){
			horariocol43.checked=true;
		}else if(data.horariocol4=="Otro"){
			horariocol44.checked=true;
		}
		$("#horariocol5").val(data.horariocol5);
		var horariocol61 = document.getElementById("horariocol61");
		var horariocol62 = document.getElementById("horariocol62");
		var horariocol63 = document.getElementById("horariocol63");
		var horariocol64 = document.getElementById("horariocol64");
		var horariocol65 = document.getElementById("horariocol65");
		if (data.horariocol6=="Subrayado") {
			horariocol61.checked=true;
		}else if(data.horariocol6=="Esquema"){
			horariocol62.checked=true;
		}else if(data.horariocol6=="Resumen"){
			horariocol63.checked=true;
		}else if(data.horariocol6=="Memoria"){
			horariocol64.checked=true;
		}else if(data.horariocol6=="Desconozco"){
			horariocol65.checked=true;
		}
		$("#datmedico08").val(data.datmedico08);
		var horariocol71 = document.getElementById("horariocol71");
		var horariocol72 = document.getElementById("horariocol72");
		if (data.horariocol7=="NO") {
			horariocol71.checked=true;
		}else if (data.horariocol7=="SI") {
			horariocol72.checked=true;
		}
		$("#horariocol8").val(data.horariocol8);



		$("#aficiones01").val(data.aficiones01);
		var aficiones021 = document.getElementById("aficiones021");
		var aficiones022 = document.getElementById("aficiones022");
		if (data.aficiones02=="NO") {
			aficiones021.checked=true;
		}else if (data.aficiones02=="SI") {
			aficiones022.checked=true;
		}
		$("#aficiones03").val(data.aficiones03);
		var aficiones041 = document.getElementById("aficiones041");
		var aficiones041 = document.getElementById("aficiones041");
		if (data.aficiones04=="NO") {
			aficiones041.checked=true;
		}else if (data.aficiones04=="SI"){
			aficiones041.checked=true;
		}
		$("#aficiones05").val(data.aficiones05);
		$("#aficiones06").val(data.aficiones06);
		$("#aficiones07").val(data.aficiones07);
		$("#aficiones08").val(data.aficiones08);
		$("#aficiones09").val(data.aficiones09);

	 	})

$("#btnGuardar").hide();
	}

//Función para desactivar registros
function desactivar(idtutoria)
{
	bootbox.confirm("¿Está Seguro de desactivar la Categoría?", function(result){
		if(result)
        {
        	$.post("../ajax/tutoria.php?op=desactivar", {idtutoria : idtutoria}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function activar(idtutoria)
{
	bootbox.confirm("¿Está Seguro de activar la Categoría?", function(result){
		if(result)
        {
        	$.post("../ajax/tutoria.php?op=activar", {idtutoria : idtutoria}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}


init();