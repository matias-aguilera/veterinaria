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
        <div id="contenido" class="container p-4">
            <div class="row">
                <div class="col-md-8">
                    <h3>Veterinarios Asociados con la Veterinaria:</h3>
                        <table class="table table-bordered">

                            <thead>
                                <tr>
                                    
                                    <th>Nombre</th>                    
                                    <th>Correo</th>                    
                                    <th>Especialidad</th>

                                </tr>
                                <tbody>
                                    <?php 

                                        $host = "localhost";
                                        $user ="root";
                                        $pass="";
                                        $db="veterinariabd";

                                        $conn= mysqli_connect($host, $user,$pass,$db);

                                        $query ="SELECT * FROM veterinario";
                                        $result_tarea = mysqli_query( $conn,$query);

                                        while ( $row = mysqli_fetch_array($result_tarea)){ ?>

                                                <tr>
                                                    
                                                    <td><?php echo $row['nombre'] ?></td>

                                                    <td><?php echo $row['correo'] ?></td>
                                                    
                                                    <td><?php echo $row['especialidad'] ?></td>
                                                    
                                                    
                                                </tr>

                                            
                                    <?php }?>

                                </tbody>
                            </thead>

                        </table>
                </div>
                <div class="col-md-4">
                    <img src='img/veterinarios.jpg'>
                </div>
            </div>
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