 <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>SYSTEM</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
 <link rel="stylesheet" href="css/estilos2.css">

     <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">


     <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.bootstrap.min.css" rel="stylesheet">
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.bootstrap.min.js"></script>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
      <script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
      <script type="text/javascript" src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
      <script type="text/javascript" src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>
      <script type="text/javascript" src="//cdn.datatables.net/buttons/1.3.1/js/buttons.colVis.min.js"></script>

      <style>
          tr:hover { 
          background: #eff9f9; 
          
          }

          tr, th{
              text-align: center;
          }

      </style>   
  </head>
  <body style="background-color:#D6EAF8 "  >
    <header>

              <div id="encabezado">
            <ul>
               <li><a href="index.php ">SYSTEM</a></li>
               <li><a href="tabla_historica1.html">TABLA HISTORICA</a></li>
               <li><a href=https://www.upb.edu.co>UPB</a></li>
            </ul>
         </div>
      </header>


     <div id="container1">
         <div style="background-color:#D6EAF8; padding-top: 30px; padding-bottom: 40px; ">
            <img src="img/upblogomonteria.png" width="240" height="100">  
         </div>
         


  <div class= "rows">

             <div class="container-fluid"> 
                        <div class="col-lg-12">
                            <div class="panel panel-default" style="color: #0000FF">
                                <div class="panel-heading" style="background-color: #0000FF">
                                    <h3 class="panel-title" align="center"><font color=white><b><i class="fa fa-th-list "></i>TABLA HISTORICA</h3></b></font>
                                </div>

                        <table id="" class="table table-condensed table-bordered" style="background-color:#CEF6F5" cellspacing="0" width="100%">
                                        <thead>

    <table border="1" cellspacing=1 cellpadding=0 style="font-size: 12pt" width="100%" style="border-collapse: separate" bordercolor="#0000FF"  style="background-color: #0000FF"><tr>

   
     </div>
      </div>
      
      
    
<?php
   $con=mysqli_connect('localhost', 'id4824750_systemmupb', 'emaupb22') or die ("error1");
   mysqli_select_db($con,'id4824750_estacion')or die ("error2");
   
    $estado="$_POST[gender]";
   
   
   if ($estado!="todo")
   {
   
     $query = "SELECT * FROM datos WHERE serie=2 AND fecha BETWEEN'$_POST[fecha1]' AND '$_POST[fecha2]'order by id DESC";
   
     $result = mysqli_query($con,$query)or die ("error3");
     $numero = 0;
     ?>
<tr>  
<th>Dato</th>
<th>Fecha</th>
</tr>
<?php
   while($row = mysqli_fetch_array($result))
   {
   
     echo "<tr><td width=\"10%\"><font face=\"verdana\">" . 
      $row["$_POST[gender]"] . "</font></td>";
   
     echo "<td width=\"10%\"><font face=\"verdana\">" . 
      $row["fecha"] . "</font></td></tr>";
     $numero++;
   }
   echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Total de datos:  " . $numero . 
       "</b></font></td></tr>";
   
   mysqli_free_result($result);
   mysqli_close($con);
   }
   
   $fecha1=$_POST['fecha1'];
   
   if ($estado=="todo")
   {
   
   
   if($fecha1=="")
   {
     $query = "SELECT temperatura, humedad, velocidad_del_viento,direccion_del_viento,precipitacion,fecha FROM datos WHERE serie=2 order by id DESC";
   }else
   {
   $query = "SELECT temperatura, humedad, velocidad_del_viento,direccion_del_viento,precipitacion,fecha FROM datos  WHERE serie=2 AND fecha BETWEEN '$_POST[fecha1]' AND '$_POST[fecha2]' order by id DESC";
   }
   $result = mysqli_query($con,$query);
   $numero = 0;
   
    ?>
<tr>  
<th>Temperatura</th>
<th>Humedad</th>
<th>Velocidad del viento</th>
<th>Direccion del viento</th>        
<th>Precipitacion</th>
<th>fecha</th> 
</tr>
<?php
   while($row = mysqli_fetch_array($result))
   {
   
     echo "<tr><td width=\"15%\"><font face=\"verdana\">" . 
       $row["temperatura"] . "</font></td>";
     echo "<td width=\"15%\"><font face=\"verdana\">" . 
       $row["humedad"] . "</font></td>";
     echo "<td width=\"15%\"><font face=\"verdana\">" . 
       $row["velocidad_del_viento"] . "</font></td>";
    echo "<td width=\"15%\"><font face=\"verdana\">" . 
       $row["direccion_del_viento"]. "</font></td>";
   echo "<td width=\"15%\"><font face=\"verdana\">" . 
       $row["precipitacion"] . "</font></td>";
     echo "<td width=\"15%\"><font face=\"verdana\">" . 
       $row["fecha"] . "</font></td></tr>";
   
    
     $numero++;
   }
   echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Total de datos:  " . $numero . 
       "</b></font></td></tr>";
      mysqli_free_result($result) or die;
   mysqli_close($con);
   }
   ?>
</table>

</body>
</html>




