<?php
	$server = "localhost";
	$user = "id4824750_systemmupb";
	$password = "emaupb22";
	$bd = "id4824750_estacion";
    $conexion = mysqli_connect($server, $user, $password, $bd);
	if (!$conexion){ 
		die('Error de Conexión: ' . mysqli_connect_errno());	
	}	


	$desde = $_POST["desde"];
	$hasta = $_POST["hasta"];
//	$query = "SELECT `serie`,`temperatura`,`humedad`,`precipitacion`,`velocidad_del_viento`,`direccion_del_viento`,`fecha` FROM datos ORDER BY id DESC;";
	$query = "SELECT `serie`,`temperatura`,`humedad`,`precipitacion`,`velocidad_del_viento`,`direccion_del_viento`,`fecha` FROM datos WHERE fecha BETWEEN '$desde' AND '$hasta' ORDER BY id DESC;";
	$resultado = mysqli_query($conexion, $query);
	$array["data"] = []; 
	while ($data = mysqli_fetch_assoc($resultado)) {
	$arreglo["data"][]=$data;
			}
	echo json_encode($arreglo);
	mysqli_free_result($resultado);
?>


