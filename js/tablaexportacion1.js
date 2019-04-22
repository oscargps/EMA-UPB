$(document).on("ready", function(){
			verPorRangoFechas();
			
		});

var verPorRangoFechas = function(){

	$("#buscar").on("click", function(e){
		e.preventDefault();
		var fechaInicio = $("#bd-desde").val(),
			fechaFin = $("#bd-hasta").val();

		if(fechaInicio == "" || fechaFin == ""){
			alert("Ingresar Fechas");
		}else{
			listar(fechaInicio, fechaFin);
	
		}		
	});
	
}

var listar=function(fechaInicio, fechaFin){

                var numeroRegistros = 25;
		
	
			var table = $("#tablaexportacion1").DataTable({
				"destroy":true,
		          "ajax":{
					"method":"POST",
					"url":"./php/listar1.php",
					"data": {desde: fechaInicio, hasta: fechaFin}
				},

				"columns":[
				    {"data":"serie"},
					{"data":"temperatura"},
					{"data":"humedad"},
					{"data":"precipitacion"},
					{"data":"velocidad_del_viento"},					
					{"data":"direccion_del_viento"},
					{"data":"fecha"}

				], "order": [0,"desc"],
				"language": {
            		"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json" //Cambiar el idioma de la tabla de datos.
        			},
        			
        			"dom": " <'col-sm-6 col-md-3 col-lg-9'>" //buscar
					
					 +"<'row' <'form-inline' <'col-sm-3'f>>>"
					 +"<rt>"
					 + "<'row'<'form-inline' <'col-sm-offset-5'B>>>"
					 +"<'row'<'form-inline'"
					+"<'col-sm-6 col-md-6 col-lg-12'p>>>",	

        			 //buscar
					
					

        			     "buttons":[{
	        				extend: 'excelHtml5',
	        				"className":"btn btn-success",
	           				text: '<p><i class= "fa fa-file-excel-o" style="font-size:24px" ></i></p>',
	           				titleAttr:'Excel'        				

	        				},
	        				{

	        				extend: 'copyHtml5',
	        				"className":"btn btn-primary" ,
	           				text: '<p><i class= "fa fa-file-text-o" style="font-size:24px"></i></p>',
	           				
	                        titleAttr:'Copiar'        				

	        				},

	        				{

	        				extend: 'pdfHtml5',
	        				"className":"btn btn-danger" ,
	           				text: '<p><i class= "fa fa-file-pdf-o" style="font-size:24px" ></i></p>',
	           				titleAttr:'PDF'
	        				},

	        				{
	        				extend: 'csvHtml5',
	        				"className":"btn btn-warning",
	           				text: '<p><i class= "fa fa-file-text-o" style="font-size:24px"></i></p>',
	           				titleAttr:'CSV'

	        				       				
        			
	        				}        				
        				],
        				"pageLength": numeroRegistros
			});



		}


