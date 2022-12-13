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
      header('Location: usuario.php'); // adonde va una ves ingresado
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
    <title>Veterinaria</title>
    
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div id="contenedor" class="container">
        <div id="header" class="container">
            <div class="mx-auto" style="width: 100px;">
           <h1>Cuidado Animal</h1>
            </div>
        </div>
        <div id="nav_2" class="container-primary">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-dark active" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="usuario.php">Mis Datos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="usuarioMascota.php">Mis Mascotas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="usuarioingresar.php">Registrar Mascota</a>            
            </ul>
        </div>
        <div id="contenido" class="container">

            <?php if(!empty($message)): ?>
            <p> <?= $message ?></p>
            <?php endif; ?>
            
            <h1>Ingresar</h1>
            <span>or <a href="signup.php">Registrar</a></span>

                <form action="IngresarUsuario.php" method="POST" >

                <input type="text"   name="email" placeholder="ingrese email"> <br>   
                <input type="password" name="password" placeholder="ingrese clave"><br>
                <input type="submit" value="send">

        </div>
        <div id="footer_2" class="container">
            <h3>FOOTER</h3>
        </div>
        
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>