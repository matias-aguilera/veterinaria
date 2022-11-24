<?php
include "conexion.php";
    $conn = new mysqli($servername,$username,$password, $dbname);

    if ($conn->connect_error)
    {
        die("conexion erronea".$conexion->connect_error);
    }
?>