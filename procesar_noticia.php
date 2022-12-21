<?php


$titulo = $_POST['titulo'];
$noticia = $_POST['noticia'];
$autor = $_POST['autor'];








$host = "localhost";
$user = "root";
$pass = "";
$db = "veterinariabd";

$conexion = mysqli_connect($host, $user, $pass, $db);

$consulta = "INSERT INTO noticia (titulo, noticia, autor) 
            VALUES('$titulo','$noticia','$autor')";


if (mysqli_query($conexion, $consulta)) {
    $message = 'a creado nueva Noticia';
    include "adminNoticia.php";
}else{
    $message = 'A ocurrido un error al registrar, Intentelo denuevo';
    include "adminNoticia.php";
    
}




?>