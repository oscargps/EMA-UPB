<?php
// Conectamos base de datos

$con = mysqli_connect("localhost", "id4824750_systemmupb","emaupb22");
mysqli_select_db (  $con , "id4824750_estacion" );

   $estado= $_POST['gender'];
   $fecha1=$_POST['fecha1']; 
   $fecha2=$_POST['fecha2'];


 if ($estado=="temperatura")
 
    {

$data_points[0] = array("fecha","temperatura");
 $SQLDatos = "SELECT `temperatura`,`fecha` FROM `datos` WHERE `serie` = '2.0'  AND  `fecha` BETWEEN '$fecha1' AND '$fecha2'ORDER BY fecha ASC";

 
    $result = mysqli_query($con, $SQLDatos);//result guarda la consulta sql
  
  
  while ($row = mysqli_fetch_array($result)) {
      
      $temperatura= floatval($row['temperatura']);
      $fecha=$row['fecha'];
      
     $point = array($fecha,$temperatura);
     
 //  echo implode($data_points[0]);
 array_push($data_points, $point);
 }

   echo json_encode($data_points);
    

}
 else if ($estado=="humedad")
 
    {
         $data_points[0] = array("fecha","humedad");
          $SQLDatos = "SELECT `humedad`,`fecha` FROM `datos` WHERE `serie` = '2'  AND  `fecha` BETWEEN '$fecha1' AND '$fecha2'ORDER BY fecha ASC";
 
  $result = mysqli_query($con, $SQLDatos);


 while ($row = mysqli_fetch_array($result)) {
      
      $humedad= floatval($row['humedad']);
      $fecha=$row['fecha'];
      
     $point = array($fecha,$humedad);
     
 //  echo implode($data_points[0]);
 array_push($data_points, $point);
 }

   echo json_encode($data_points);

}

 else if ($estado=="velocidad_del_viento")
 
    {
         $data_points[0] = array("fecha","velocidad_del_viento");
          $SQLDatos = "SELECT `velocidad_del_viento`,`fecha` FROM `datos` WHERE `serie` = '2'  AND  `fecha` BETWEEN '$fecha1' AND '$fecha2'ORDER BY fecha ASC";
 
  $result = mysqli_query($con, $SQLDatos);


 while ($row = mysqli_fetch_array($result)) {
      
      $velocidad_del_viento= floatval($row['velocidad_del_viento']);
      $fecha=$row['fecha'];
      
     $point = array($fecha,$velocidad_del_viento);
     
 //  echo implode($data_points[0]);
 array_push($data_points, $point);
 }

   echo json_encode($data_points);
    
}

 else if ($estado=="precipitacion")
 
    {
         $data_points[0] = array("fecha","precipitacion");
          $SQLDatos = "SELECT `precipitacion`,`fecha` FROM `datos` WHERE `serie` = '2'  AND  `fecha` BETWEEN '$fecha1' AND '$fecha2'ORDER BY fecha ASC";
 
  $result = mysqli_query($con, $SQLDatos);


 while ($row = mysqli_fetch_array($result)) {
      
      $precipitacion= floatval($row['precipitacion']);
      $fecha=$row['fecha'];
      
     $point = array($fecha,$precipitacion);
     
 //  echo implode($data_points[0]);
 array_push($data_points, $point);
 }


   echo json_encode($data_points);
    
}


mysqli_close($con);

?>
