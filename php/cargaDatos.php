<?php

$con=mysqli_connect('localhost', 'id4824750_systemmupb', 'emaupb22') ;
mysqli_select_db($con,'id4824750_estacion')or die ("error2");


?>
<?php

$con = mysqli_connect("localhost", "id4824750_systemmupb","emaupb22");
mysqli_select_db (  $con , "id4824750_estacion" );
 
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
  //  $datos[0] = array("fecha","humedad");
    $data_points[0] = array("Fecha","Temperatura (°C)");
    $sql= "SELECT `temperatura`,`fecha` FROM `datos` WHERE `serie` = 1.0  ORDER BY id DESC LIMIT 9" ; 
     
    $result = mysqli_query($con, $sql);//result guarda la consulta sql
  
  
  while ($row = mysqli_fetch_array($result)) {
      
      $temperatura= floatval($row['temperatura']);
      $fecha=$row['fecha'];
      
     $point = array($fecha,$temperatura);
     
 //  echo implode($data_points[0]);
 array_push($data_points, $point);
 }

   echo json_encode($data_points);
    
}
mysqli_close($con);
?>