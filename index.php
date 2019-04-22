<!DOCTYPE>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>SYSTEM</title>
	<link rel="stylesheet" href="css/estilos1.css"/>
	<link rel="stylesheet" href="css/slider.css"/>
	<link rel="stylesheet" href="css/tabs.css"/>
	<link rel="stylesheet" href="css/slideshow.css"/>
	
	
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	
	<script type="text/javascript" src="js/slider.js"></script>

	<script type="text/javascript" src="js/slideshow.js"></script>

</head>
<body style="background-color:#D6EAF8">
    
<?php
/*
$con=mysqli_connect('localhost', 'id4824750_systemmupb', 'emaupb22') ;
mysqli_select_db($con,'id4824750_estacion')or die ("error2");
//$regi = mysqli_query($con,"SELECT * FROM trama") or die ("problemas");

while($reg=mysqli_fetch_array($regi))
{
	$dato = $reg['dato'];
	
  
	$col = explode("/",$dato);

 $estacion = $col[0];
  $temp = $col[1];
  $hum = $col[2];
  $vel =$col[3];
  $dir = $col[4];
  $llu = $col[5];
  $fecha = $col[6];
 
 
mysqli_query($con,"INSERT INTO datos (serie,temperatura,humedad,velocidad_del_viento,direccion_del_viento,precipitacion,fecha) VALUES ('$estacion','$temp','$hum','$vel','$dir','$llu','$fecha')");
  
}


  mysqli_close($con);
?>
<?php

$con = mysqli_connect("localhost", "id4824750_systemmupb", "emaupb22");
mysqli_select_db($con, "id4824750_estacion");
mysqli_query($con, "TRUNCATE TABLE trama");
mysqli_close($con)
*/
?>
	<header>
<div id="encabezado">
   <ul>
      <li><a href="index.php">SYSTEM</a></li>
      <li><a href="tabla_historica1.html">TABLA HISTÓRICA</a></li>
      <li><a href=https://www.upb.edu.co>UPB</a></li>
   </ul>
</div>
</header>


	<div id="container">
		<div id="inicio"style="background-color:#fff">
			<div id="slider">
				<div id="containerSlider">
					<img src="img/slider1.jpg" alt="" width="850" height="450">
					<img src="img/slider2.png" alt="" width="850" height="450">
					<img src="img/slider3.jpg" alt="" width="850" height="450">
				</div><!--containerSlider -->
				
			</div><!--slider -->
		</div><!-- #inicio -->

  
       
            <font color=blue text align="center"><h2><p>SELECCIONE LA ESTACIÓN METEOROLÓGICA</p></h2></font>
		       
		       	<div id="tabs" align= "center">
   <ul class="nav">

      <li><a ><h4>ESTACIÓN 1</h4></a>
         <ul>
            <li><a  text="center">GRÁFICAS</a>
               <ul>
                  <li><a href="pagina4.html" text="center">TODAS</a></li>
                  <li><a href="pagina6.html" text="center"> POR FECHAS</a></li>
               </ul></li>
            <li><a href="pagina2.html" text="center">TABLAS</a></li>
         </ul>
      </li>

      <li><a ><h4>ESTACIÓN 2</h4></a>
         <ul>
            <li><a text="center">GRÁFICAS</a>
               <ul>
                  <li><a href="pagina5.html" text="center">TODAS</a></li>
                  <li><a href="pagina7.html" text="center">POR FECHAS</a></li>
               </ul></li>
            <li><a href="pagina3.html" text="center">TABLAS</a></li>
         </ul>
      </li>
   </ul>
  
</div>			 
    

     <br>
     <br>
     </br>
 </br>
		<div id="trabajo"  text="center">
			<center><h2>EJEMPLOS DE ESTACIONES METEOROLÓGICAS</h2></center>
			<div class="contenido">
				<p></p>	
				<div id="slideshow">

				    <img src="img/slideshow1_thumbail.jpg" alt="" width="200" height="120" title="Estacion meteorologica ubicada en la antartida ">
					<img src="img/slideshow2_thumbail.jpg" alt="" width="200" height="120"  title="Estacion meteorologica de angkor ">
					<img src="img/slideshow3_thumbail.jpg" alt="" width="200" height="120" title="Estacion meteorologica de Hispaw">
					<img src="img/slideshow4_thumbail.jpg" alt="" width="200" height="120" title="Estacion meteorologica de Dương Đông, (Duong Dong">
					<img src="img/slideshow5_thumbail.jpg" alt="" width="200" height="120" title="Estacion meteorologica Parque Nacional del Teide">
				</div><!--slideshow -->
			</div><!--contenido -->
		</div><!--trabajo -->


		
		<div id="definiciones">
			<h2>TEMPERATURA</h2>
			<div class="contenido">
				<font color=white><strong><p>La Temperatura es una magnitud que mide el nivel térmico o el calor que un cuerpo posee.También la temperatura se define como una propiedad que fija el sentido del flujo de calor. Actualmente se utilizan tres escalas de temperatura; grados Fahrenheit (ºF), Celsius (ºC) y Kelvin (ºK) </p></strong></font>

			</div><!--contenido -->
		</div><!--faq -->


		<div id="definiciones">
			<h2>HUMEDAD</h2>
			<div class="contenido">
				<font color=white><strong><p>La humedad es un factor climatológico que se define como vapor de agua contenido en la atmósfera. Como es sabido, las dos terceras partes de la tierra, se encuentran cubiertas por agua (océanos, ríos, lagos) de las cuales proviene el vapor de agua. Este vapor de agua permite la formación de las nubes, las cuales a su vez colaboran con la humedad del ambiente, cuando al condensarse se precipitan a la tierra en forma de lluvia o nieve. </p></strong></font>	

			</div><!--contenido -->
		</div><!--faq -->


		<div id="definiciones">
			<h2>PRECIPITACIÓN</h2>
			<div class="contenido">
				<font color=white><strong><p>La precipitación es el depósito de agua de la superficie de la Tierra, en forma de lluvia, nieve, hielo o granizo. Todos los valores de precipitación se expresan en milímetros (mm) de líquido equivalente de agua para el intervalo de tiempo anterior (o pulgadas). Un milímetro de lluvia corresponde a 1 litro de agua por metro cuadrado de superficie, o alrededor de 10 mm de nieve.</p></strong></font>	
					</div><!--contenido -->
		</div><!--faq -->


		<div id="definiciones">
			<h2>VELOCIDAD DEL VIENTO</h2>
			<div class="contenido">
				<font color=white><strong><p>El viento es el movimiento del aire. La velocidad del viento en superficie serefiere a la velocidad que alcanza esta variable meteorológica a 10 metros de altura, que es la norma internacional establecida por la Organización Meteorológica Mundial (OMM) como estándar para la medición y seguimiento del viento. </p></strong></font>
					</div><!--contenido -->
		</div><!--faq -->

		<div id="definiciones">
			<h2>DIRECCIÓN DEL VIENTO</h2>
			<div class="contenido">
				<font color=white><strong><p>La dirección del viento se define como la orientación del vector del viento en la horizontal. Para propósitos meteorológicos, la dirección del viento se define como la dirección desde la cual sopla el viento, y se mide en grados en la dirección de las agujas del reloj a partir del norte verdadero. Por ejemplo, un viento del oeste sopla del oeste, a 270° del norte. Un viento del norte sopla desde una dirección de 360°. La dirección del viento determina la del transporte de una pluma emitida.</p></strong></font>	
					</div><!--contenido -->
		</div><!--faq -->

</div>
        
</body>
</html>