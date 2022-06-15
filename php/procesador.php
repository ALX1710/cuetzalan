<?php
//Codigo para insertar la TABLA
include('conexion.php');
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$salida=$_POST['salida'];
$hora=$_POST['hora'];
$num_personas=$_POST['num_personas'];
$pack=$_POST['pack'];

//Preparar cadena de Incersion
$cad_insert="INSERT INTO reservaciones (nombre, apellido, salida, hora, num_personas, pack) VALUES('$nombre', '$apellido', '$salida', '$hora', '$num_personas', '$pack')";
$sql=mysqli_query($link, $cad_insert);

if($sql)
{
	echo '{"respuesta":"registrado"}';
}
else{
	echo '{"respuesta":"error"}';
}


?>