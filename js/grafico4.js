google.setOnLoadCallback(dibujaGrafica4);
 

function dibujaGrafica4() {
 
var data = $.ajax({
url: "php/cargaDatos4.php",
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
          title: 'Velocidad del viento'
        },

        colors: ['#5deccd',]
};
 

var chart = new google.visualization.LineChart(document.getElementById('curve_chart4'));
chart.draw(datoFinal, options);


}



