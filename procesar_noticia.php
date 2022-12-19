<?php


$titulo = $_POST['titulo'];
$noticia = $_POST['noticia'];
$autor = $_POST['autor'];
$foto = $_FILES["foto"];

$nombre_archivo = $titulo;

//revisar envio de imagen(foto)

$target_dir = "img/";
$target_file = $target_dir . $nombre_archivo . '.jpg';

$nAncho=100;
$nAlto=100;

if($_FILES['foto']['error']=== UPLOAD_ERR_OK){
    $imagen_original= $_FILES['foto']['tmp_name'];

    $img_original= imagecreatefromjpeg($imagen_original);

    $ancho_original= imagesx($img_original);
    $alto_original= imagesy($img_original);

    $tmp= imagecreatetruecolor($nAncho,$nAlto);
    imagecopyresized($tmp, $img_original,0,0,0,0,$nAncho,$nAlto,$ancho_original,$alto_original);

    imagejpeg($tmp,$target_file,100);

}




$check = getimagesize($foto["tmp_name"]);

if($check !== false) {
    include "adminNoticia.php";
}else {
    echo "imagen no es formato jpeg";
}


$host = "localhost";
$user = "root";
$pass = "";
$db = "veterinariabd";

$conexion = mysqli_connect($host, $user, $pass, $db);

$consulta = "INSERT INTO noticias(titulo, noticia, autor, foto) 
            VALUES('$titulo','$noticia','$autor','$target_file')";


if (mysqli_query($conexion, $consulta)) {
    $message = 'a creado nueva Noticia';
    include "adminNoticia.php";
}else{
    $message = 'A ocurrido un error al registrar, Intentelo denuevo';
    include "adminNoticia.php";
    
}




?>