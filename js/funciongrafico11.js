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

			var table = $("#temperatura").({
				"destroy":true,
		          "ajax":{
					"method":"POST",
					"url":"./php/listar2.php",
					"data": {desde: fechaInicio, hasta: fechaFin}
				},
