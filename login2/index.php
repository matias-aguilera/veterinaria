<?php

session_start();

require 'conexion.php';

if (isset($_SESSION['usuario_id'])) {
  $records = $conn->prepare('SELECT id, email, password FROM usuario WHERE id = :id');
  $records->bindParam(':id', $_SESSION['usuario_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $usuario = null;

  if (count($results) > 0) {
    $usuario = $results;
  }
}

  ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcom</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
      <?php if(!empty($usuario)): ?>
      <br> Welcome. <?= $usuario['email']; ?>
      <br>estas logeado, bien!
      <a href="logout.php">
        Logout
      </a>
      <?php else: ?>
        
     <h1> please login or signup</h1> 
     <a href="login.php">login</a> or
     <a href="signup.php">signup</a>

     <?php endif; ?>


</body>
</html>