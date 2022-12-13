<?php

include('conexion.php');

if(isset($_POST['guardar'])){

    $titulo =$_POST['titulo'];
    $descripcion = $_POST ['descripcion'];

    $query ="INSERT INTO crud (titulo, descripcion) VALUES ('$titulo', '$descripcion')";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("query failed");
    }

    //revisar esto
    $_SESSION['message'] = 'tarea guardada';
    $_SESSION['message_type'] ='success';

     header("location: index.php"); //a donde va luego de presionar guardar
   
}

?>