<?php

    session_start();

   
   require 'conexion.php';

   if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuario WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['usuario_id'] = $results['id'];
      header('Location: home.php'); // adonde va una ves ingresado
    } else {
      $message = 'Sorry, correo y clave no coinciden';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

            
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
      
    <h1>login</h1>
    <span>or <a href="signup.php">signup</a></span>

        <form action="login.php" method="POST" >

         <input type="text"   name="email" placeholder="ingrese email">    
        <input type="password" name="password" placeholder="ingrese clave">
        <input type="submit" value="send">
</body>
</html>