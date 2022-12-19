
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria</title>
    
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>
    <div id="contenedor" class="container">
        <div id="header" class="container">
            <div class="mx-auto" style="width: 100px;">
           <h1>Cuidado Animal</h1>
            </div>
        </div>
        <div id="nav_4" class="container">            
             <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-dark active" href="logout.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="admin.php">Crear Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="adminUsuarios.php">Ver Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="adminMascotas.php">Ver Mascotas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="adminVeterinarios.php">Ver Veterinarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="adminNoticia.php">Crear Noticia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="adminNoticiasVer.php">Ver Noticias</a>
                </li>
            </ul>
        </div>
        <div id="contenido" class="container p-4">
            <div class="row">

                <div class="col-md-4">
    
                    <form action="procesar_admin.php" name="" method="POST" enctype="multipart/form-data">
                        <h5>INGRESAR ADMINISTRADOR:</h5>
                        <table border="0" align="center">
                            <tr>
                                <td>
                                    Rut:
                                </td>
                                <td>
                                    <label for="rut"></label>
                                    <input type="text" name="rut"    />
                                </td>
                            </tr>
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
                                Telefono:
                                </td>
                                <td>
                                    <label for="telefono"></label>
                                    <input type="text" name="telefono"    />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                Correo:
                                </td>
                                <td>
                                    <label for="correo"></label>
                                    <input type="text" name="correo"   />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Contraseña:
                                </td>
                                <td>
                                    <label for="password"></label>
                                    <input type="text" name="password"  />
                                </td>
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
                    <div class="alert alert-danger" role="alert">
                        <p><?=  $message ?></p>
                    </div>
                    <?php endif; ?> 
                </div>
                <div class="col-md-8">
                    <?php if (!empty($message2)):?>
                    <div class="alert alert-danger" role="alert">
                        <p><?=  $message2 ?></p>
                    </div>
                    <?php endif; ?> 
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Rut</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Correo</th>

                            </tr>
                            <tbody>
                                <?php 

                                    $host = "localhost";
                                    $user ="root";
                                    $pass="";
                                    $db="veterinariabd";

                                    $conn= mysqli_connect($host, $user,$pass,$db);

                                    $query ="SELECT * FROM admins";
                                    $result_tarea = mysqli_query( $conn,$query);

                                    while ( $row = mysqli_fetch_array($result_tarea)){ ?>

                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['rut'] ?></td>
                                                <td><?php echo $row['nombre'] ?></td>
                                                <td><?php echo $row['telefono'] ?></td>
                                                <td><?php echo $row['correo'] ?></td>
                                                
                                                <td>
                                                    <a href="editarAdmin.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                                    <i class="fas fa-marker"></i> <!-- editar-->
                                                    </a> <br>
                                                    <a href="eliminarAdmin.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                                    <i class="far fa-trash-alt"></i> <!-- eliminar-->
                                                    </a>
                                                </td>
                                                
                                            </tr>

                                        
                                <?php }?>
          
                            </tbody>
                        </thead>

                    </table>
                </div>

            </div>
        </div>
        <div id="footer_4" class="container">
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