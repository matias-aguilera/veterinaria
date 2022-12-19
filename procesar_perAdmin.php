<?php


$nombre = $_POST['nombre'];
$rut = $_POST['rut'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);






//1.- Conexión
$host = "localhost";
$user = "root";
$pass = "";
$db = "veterinariabd";

$conexion = mysqli_connect($host, $user, $pass, $db);

//2.- Consulta
$consulta = "INSERT INTO persona (nombre, rut, correo, telefono, direccion, password) 
            VALUES('$nombre', '$rut', '$correo', '$telefono', '$direccion','$password')";

//3.- Ejecutar consulta
if (mysqli_query($conexion, $consulta)) {
    $message = 'a creado nuevo usuario';
    include "adminUsuarios.php";
}else{
    $message = 'A ocurrido un error al registrar, Intentelo denuevo';
    include "adminUsuarios.php";
    
}



?>