<?php


$nombre = $_POST['nombre'];
$animal = $_POST['animal'];
$raza = $_POST['raza'];
$edad = $_POST['edad'];
$nro_id = $_POST['nro_id'];
$datos = $_POST['datos'];






//1.- Conexión
$host = "localhost";
$user = "root";
$pass = "";
$db = "veterinariabd";

$conexion = mysqli_connect($host, $user, $pass, $db);

//2.- Consulta
$consulta = "INSERT INTO mascota (nombre, animal, raza , edad, nro_id, datos) 
            VALUES('$nombre', '$animal', '$raza' , '$edad', '$nro_id', '$datos')";

//3.- Ejecutar consulta
if (mysqli_query($conexion, $consulta)) {
    $message = 'a creado nueva Mascota';
    include "usuarioMascota.php";
}else{
    $message = 'A ocurrido un error al registrar, Intentelo denuevo';
    include "usuarioMascota.php";
    
}



?>