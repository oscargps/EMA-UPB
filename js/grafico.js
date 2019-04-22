google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(dibujaGrafica);
 

function dibujaGrafica() {
 
var data = $.ajax({
url: "php/cargaDatos.php",
dataType:"json",
async: false
}).responseText;
 

var datoFinal = google.visualization.arrayToDataTable($.parseJSON(data));
 

var options = {
title: '',
curveType: 'function',
legend: { position: 'top' },

hAxis: {
          title: 'Fecha-Hora'
        },


        vAxis: {
          title: 'Temperatura'
        },

        colors: ['#5deccd',]
};
 

var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
chart.draw(datoFinal, options);


}




