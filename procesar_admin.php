<?php


$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$telefono= $_POST['telefono'];
$correo= $_POST['correo'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);








//1.- Conexión
$host = "localhost";
$user = "root";
$pass = "";
$db = "veterinariabd";

$conexion = mysqli_connect($host, $user, $pass, $db);

//2.- Consulta
$consulta = "INSERT INTO admins (rut, nombre, telefono , correo, password) 
            VALUES('$rut', '$nombre', '$telefono' , '$correo', '$password')";

//3.- Ejecutar consulta

if (mysqli_query($conexion, $consulta)) {
    $message = 'a creado nuevo admin';
    include "admin.php";
}else{
    $message = 'A ocurrido un error al registrar, Intentelo denuevo';
    include "admin.php";
    
}

?>