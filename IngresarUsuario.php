<?php

    session_start();

   
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "veterinariabd";
  
    $conn = mysqli_connect($host, $user, $pass, $db);

   if (!empty($_POST['correo']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, correo, password FROM persona WHERE correo = :correo');
    $records->bindParam(':correo', $_POST['correo']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['id'] = $results['id'];
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
                    <a class="nav-link text-dark active" href="logout.php">Inicio</a>
                </li>           
            </ul>
        </div>
        <div id="contenido" class="container">

            <?php if (!empty($message)):?>
            <div class="alert alert-primary" role="alert">
                <p><?=  $message ?></p>
            </div>
            <?php endif; ?>
            
            <h1>Ingresar</h1>
            <span><a href="registrarUsuario.php">Registrar</a></span>

                <form action="IngresarUsuario.php" method="POST" >

                <input type="text"   name="email" placeholder="ingrese email"> <br>   
                <input type="password" name="password" placeholder="ingrese clave"><br>
                <input type="submit" value="send">
                </form>







        </div>
        <div id="footer_2" class="container">
        <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm-4">
                    <h5>Direccion:</h4>
                    <h6>23 norte, pasaje Mascota 45645, Viña del Mar</h6>
                </div>
                <div class="col-sm"></div>
                <div class="col-sm-3">
                    <h5>Contactos:</h4>
                    <h6>+56987654321</h6>
                    <h6>+56912345678</h6>
                </div>
                <div class="col-sm"></div>
                <div class="col-sm-3"></div>
                
                
            </div>
        </div>
        
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>