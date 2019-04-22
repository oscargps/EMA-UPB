<?php
$con=mysqli_connect('localhost', 'id4824750_systemmupb', 'emaupb22') or die ("error1");
mysqli_select_db($con,'id4824750_estacion')or die ("error2");

$valor = mysqli_real_escape_string($con, $_GET['valor']);

	$col = explode("/",$valor);

 $estacion = $col[0];
  $temp = $col[1];
  $hum = $col[2];
  $vel =$col[3];
  $dir = $col[4];
  $llu = $col[5];
  $fecha = $col[6];
 
 
mysqli_query($con,"INSERT INTO datos (serie,temperatura,humedad,velocidad_del_viento,direccion_del_viento,precipitacion,fecha) VALUES ('$estacion','$temp','$hum','$vel','$dir','$llu','$fecha')");
  
echo "ok";


  mysqli_close($con);
?>
