<?php


$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$telefono= $_POST['telefono'];
$correo= $_POST['correo'];
$contraseña = $_POST['contraseña'];







//1.- Conexión
$host = "localhost";
$user = "root";
$pass = "";
$db = "veterinaria";

$conexion = mysqli_connect($host, $user, $pass, $db);

//2.- Consulta
$consulta = "INSERT INTO admin (rut,nombre, telefono , correo, contraseña) 
            VALUES('$rut', '$nombre', '$telefono' , '$correo', '$contraseña')";

//3.- Ejecutar consulta
if (mysqli_query($conexion, $consulta)) {
    include "admin.php";
}else{
    echo "error al ingresar";
}



?>