<?php
  
      include("conexion.php");

      if (isset($_GET['id'])){
           $id = $_GET['id'];
           $query = "DELETE FROM crud where id=$id";
           $result = mysqli_query($conn, $query);
         
           if(!$result){
            die("fallo");
           }

           $_SESSION['message'] = 'tarea eliminada'; 
           $_SESSION['message_type'] ='danger';
           header("location: index.php"); //a donde va luego de presionar guardar
      }




?>