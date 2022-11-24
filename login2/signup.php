<?php
require 'conexion.php';

$message ='';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuario (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'a creado nuevo usuario';
    } else {
      $message = 'a ocurrido un error con la password';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
            <?php if (!empty($message)):?>
            <p><?=  $message ?></p>
            <?php endif; ?>

<h1> signup</h1>     
<span>or <a href="login.php">login</a></span>

<form action="signup.php" method="POST" >
        <input type="text"   name="email" placeholder="ingrese email">    
        <input type="password" name="password" placeholder="ingrese clave">
        <input type="password" name="confirm_password" placeholder="confirme clave">
        <input type="submit" value="send">

</body>
</html>