<?php
  
     //1.- Conexión
      $host = "localhost";
      $user = "root";
      $pass = "";
      $db = "veterinariabd";

      $conn = mysqli_connect($host, $user, $pass, $db);

      if (isset($_GET['id'])){
           $id = $_GET['id'];
           $query = "DELETE FROM persona where id=$id";
           $result = mysqli_query($conn, $query);
         
           if (mysqli_query($conn, $query)) {
            $message2 = 'Se a Eliminado Exitosamente';
            header("location: adminUsuarios.php");
        }else{
            $message2 = 'A ocurrido un error al Eliminar, Intentelo denuevo';
            header("location: adminUsuarios.php");
            
        }
           
          
      }




?>