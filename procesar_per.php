<?php


$nombre = $_POST['nombre'];
$rut = $_POST['rut'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$contraseña = $_POST['contraseña'];






//1.- Conexión
$host = "localhost";
$user = "root";
$pass = "";
$db = "veterinaria";

$conexion = mysqli_connect($host, $user, $pass, $db);

//2.- Consulta
$consulta = "INSERT INTO persona (nombre, rut, correo , telefono, direccion, contraseña) 
            VALUES('$nombre', '$rut', '$correo' , '$telefono', '$direccion','$contraseña')";

//3.- Ejecutar consulta
if (mysqli_query($conexion, $consulta)) {
    include "Publicoingresar.php";
}else{
    echo "error al ingresar";
}



?>