<?php


$nombre = $_POST['nombre'];
$rut = $_POST['rut'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$especialidad = $_POST['especialidad'];
$contraseña = $_POST['contraseña'];






//1.- Conexión
$host = "localhost";
$user = "root";
$pass = "";
$db = "veterinaria";

$conexion = mysqli_connect($host, $user, $pass, $db);

//2.- Consulta
$consulta = "INSERT INTO veterinario (nombre, rut, correo , telefono, direccion, especialidad, contraseña) 
            VALUES('$nombre', '$rut', '$correo' , '$telefono', '$direccion','$especialidad', '$contraseña')";

//3.- Ejecutar consulta
if (mysqli_query($conexion, $consulta)) {
    echo "registro ingresado";
}else{
    echo "error al ingresar";
}



?>