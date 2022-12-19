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
        <div id="contenido" class="container">
                <?php if (!empty($message)):?>
                <div class="alert alert-danger" role="alert">
                    <p><?=  $message ?></p>
                </div>
                <?php endif; ?> 

            <form action="procesar_noticia.php" method="post">
                <table> 
                <tr>
                    <td>Titulo</td>
                    <td><input type="text" name="titulo" id="titulo" size="100"></td>
                </tr>
                
                <tr>
                    <td>Noticia</td>
                    <td><textarea name="noticia" id="noticia" cols="100" rows="10"></textarea></td>
                </tr>

                <tr>
                    <td>Autor</td>
                    <td><input type="text" name="autor" id="autor" size="100"></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td><label for="foto"></label>
                    <input type="file" name="foto" id="foto" accept="image/jpeg" required /></td>
                </tr>
                <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                </tr>
                <tr>
                            <td align="center">
                                <input class="btn btn-info" type="submit" value="Enviar" name="enviar" id="enviar">
                            </td>
                </tr>
                </table>
                
        

            </form>

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