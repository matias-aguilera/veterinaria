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
        <div id="nav_1" class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-dark active" href="logout.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="PublicoNoticia.php">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="PublicoHistoria.php">Historia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="PublicoEmpleados.php">Empleados</a>
                </li>
                
            </ul>
        </div>
        <div id="contenido" class="container">
        
        
        <?php if (!empty($message2)):?>
        <div class="alert alert-primary" role="alert">
                <p><?=  $message2 ?></p>
        </div>
        <?php endif; ?>
        
        <table class="table table-bordered">

            <thead>
                <tr> 
                    <th>Imajen</th>                   
                    <th>Titulo</th>   
                    <th>QR</th>

                </tr>
                <tbody>
                    <?php 

                        $host = "localhost";
                        $user ="root";
                        $pass="";
                        $db="veterinariabd";

                        $conn= mysqli_connect($host, $user,$pass,$db);

                        $query ="SELECT * FROM noticia";
                        $result_tarea = mysqli_query( $conn,$query);

                        while ( $row = mysqli_fetch_array($result_tarea)){ ?>

                                <tr>
                                    <td><?php echo $row['img'] ?></td>
                                    <td><?php echo $row['titulo'] ?></td>
                                    <td></td>
                                </tr>

                            
                    <?php }?>

                </tbody>
            </thead>

        </table>
            


    </div>
        <div id="footer_1" class="container">
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
