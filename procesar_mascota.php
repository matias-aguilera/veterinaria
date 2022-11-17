<?php


$nombre = $_POST['nombre'];
$animal = $_POST['animal'];
$raza = $_POST['raza'];
$edad = $_POST['edad'];
$nro_id = $_POST['nro_id'];







//1.- Conexión
$host = "localhost";
$user = "root";
$pass = "";
$db = "veterinaria";

$conexion = mysqli_connect($host, $user, $pass, $db);

//2.- Consulta
$consulta = "INSERT INTO mascota (nombre, animal, raza , edad, nro_id) 
            VALUES('$nombre', '$animal', '$raza' , '$edad', '$nro_id')";

//3.- Ejecutar consulta
if (mysqli_query($conexion, $consulta)) {
    echo "registro ingresado";
}else{
    echo "error al ingresar";
}



?>