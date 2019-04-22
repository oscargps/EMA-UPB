google.setOnLoadCallback(dibujaGrafica10);
 

function dibujaGrafica10() {
 
var data = $.ajax({
url: "php/cargaDatos10.php",
dataType:"json",
async: false
}).responseText;
 
//para que se lea correctamente el array enviado por JSON usamos JSON.parse
var infoGraf = JSON.parse(data);
 
//Creamos y rellenamos la tabla de datos
var datoFinal = google.visualization.arrayToDataTable(infoGraf);
 
//en la parte de options puede personalizarse la gráfica, como títulos, colores...
var options = {
title: '',
curveType: 'function',
legend: { position: 'top' },

hAxis: {
          title: 'Fecha-Hora'
        },


        vAxis: {
          title: 'direccion del viento'
        },

        colors: ['#5deccd',]
};
 

var chart = new google.visualization.LineChart(document.getElementById('curve_chart10'));
chart.draw(datoFinal, options);


}