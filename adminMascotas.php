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
    
                    <form action="procesar_mascotaAdmin.php" name="" method="POST" enctype="multipart/form-data">
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
                                Nombre del Due??o:
                            </td>
                            <td>
                                <label for="nombreDueno"></label>
                                <input type="text" name="nombreDueno"   />
                                
                                
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
                    <div class="alert alert-danger" role="alert">
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
                                <th>Nombre Del Due??o</th>
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
                                                <td><?php echo $row['nombreDueno'] ?></td>
                                                <td><?php echo $row['datos'] ?></td>
                                                
                                                <td>
                                                    <a href="editarMasc.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                                    <i class="fas fa-marker"></i> <!-- editar-->
                                                    </a> 
                                                    <a href="eliminarMasc.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                                    <i class="far fa-trash-alt"></i> <!-- eliminar-->
                                                    </a>
                                                    <a href="Pdf.php?id=<?php echo $row['id']?>" class="btn btn-warning">
                                                    PDF<!-- PDF-->
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
                    <h6>23 norte, pasaje Mascota 45645, Vi??a del Mar</h6>
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