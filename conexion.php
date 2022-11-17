<?php
//conexion para bd



    $host = "localhost";
    $user ="root";
    $pass="";
    $db="veterinaria";

    $conexion= mysqli_connect($host, $user,$pass,$db);
    return $conexion;


     




?>