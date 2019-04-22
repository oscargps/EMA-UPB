 <?php
// Conectamos base de datos
$conexion = mysqli_connect('localhost', 'id4824750_systemmupb','emaupb22')
or die('No se pudo conectar: ' . mysql_error());
mysqli_select_db($conexion, 'id4824750_estacion') or die('No se pudo seleccionar la base de datos');

//preparamos la consulta
$desde=$_POST['desde'];
$hasta=$_POST['hasta'];


//ejecutamos la consulta de busqueda

$SQLDatos = "SELECT * FROM `datos` WHERE `fecha` BETWEEN '$desde' AND '$hasta'ORDER BY fecha ASC";
 
//ejecutamos la consulta	
$resultado = mysqli_query($conexion, $SQLDatos);


$array["data"] = []; 
while ($data = mysqli_fetch_assoc($resultado)) {
$arreglo["data"][]=$data;
		}
echo json_encode($arreglo);
mysqli_free_result($resultado);
?>
