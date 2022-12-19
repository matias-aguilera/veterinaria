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
                <li class="nav-item">
                    <a class="nav-link text-dark" href="usuario.php">Mis Datos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="usuarioMascota.php">Mis Mascotas</a>
                </li>
                          
            </ul>
        </div>
        <div id="contenido" class="container p-4">
            <div class="row">

                <div class="col-md-4">
    
                    <form action="procesar_mascota.php" name="" method="POST" enctype="multipart/form-data">
                        <h5>INGRESAR Mascota:</h5>
                        <table border="0" align="center">
                            <tr>
                            <td>
                                Nombre:
                            </td>
                            <td>
                                <label for="nombre"></label>
                                <input type="text" name="nombre"    />
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Tipo de Animal:
                            </td>
                            <td>
                            <label for="animal"></label>
                                <input type="text" name="animal"    />
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Raza:
                            </td>
                            <td>
                                <label for="raza"></label>
                                <input type="text" name="raza"    />
                            </td>
                            </tr>
                            <tr>
                            <td>
                            Edad:
                            </td>
                            <td>
                                <label for="edad"></label>
                                <input type="text" name="edad"   />
                            </td>
                            </tr>
                            <tr>
                            <td>
                                Nro_id:
                            </td>
                            <td>
                                <label for="nro_id"></label>
                                <input type="text" name="nro_id"   />
                                
                                
                            </td>
                            </tr>
                            <tr>
                            <td>
                                Datos:
                            </td>
                            <td>
                                <label for="datos"></label>
                                <textarea type="text" name="datos"  cols="22"></textarea>
                                
                            </td>
                            </tr>
                            <tr>
                                
                            <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            </tr>
                            <tr>
                            <td align="center">
                                <input
                                type="submit"  name="enviar" id="enviar" value="enviar" />
                                
                            </td>
                            </tr>
                        </table>
                    </form> <br><br>
                    <?php if (!empty($message)):?>
                        <div class="alert alert-primary" role="alert">
                        <p><?=  $message ?></p>
                    </div>
                    <?php endif; ?> 
                </div>
                <div class="col-md-8">
                    <?php if (!empty($message2)):?>
                        <div class="alert alert-primary" role="alert">
                            <p><?=  $message2 ?></p>
                    </div>
                    <?php endif; ?>
                    
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>tipo Animal</th>
                                <th>Raza</th>
                                <th>Edad</th>
                                <th>Nro_id</th>
                                <th>Datos</th>

                            </tr>
                            <tbody>
                                <?php 

                                    $host = "localhost";
                                    $user ="root";
                                    $pass="";
                                    $db="veterinariabd";

                                    $conn= mysqli_connect($host, $user,$pass,$db);

                                    $query ="SELECT * FROM mascota";
                                    $result_tarea = mysqli_query( $conn,$query);

                                    while ( $row = mysqli_fetch_array($result_tarea)){ ?>

                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['nombre'] ?></td>
                                                <td><?php echo $row['animal'] ?></td>
                                                <td><?php echo $row['raza'] ?></td>
                                                <td><?php echo $row['edad'] ?></td>
                                                <td><?php echo $row['nro_id'] ?></td>
                                                <td><?php echo $row['datos'] ?></td>
                                                
                                            
                                                
                                            </tr>

                                        
                                <?php }?>
          
                            </tbody>
                        </thead>

                    </table>
                </div>

            </div>
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