<?php
//conexion para bd

    $server = "localhost";
    $username ="root";
    $password="";
    $database="veterinariabd";

    try{
        $conn =new PDO("mysql:host=$server;dbname=$database;",$username,$password);
    }  catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
      }
    

     




?>