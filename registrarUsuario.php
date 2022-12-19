
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
            
            <h1> Registrar</h1>     
                
            <form action="procesar_per.php" name="" method="POST" enctype="multipart/form-data">
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
                        Rut:
                        </td>
                        <td>
                        <label for="rut"></label>
                            <input type="text" name="rut"    />
                        </td>
                        </tr>
                        <tr>
                        <td>
                        Correo:
                        </td>
                        <td>
                            <label for="correo"></label>
                            <input type="text" name="correo"    />
                        </td>
                        </tr>
                        <tr>
                        <td>
                        Telefono:
                        </td>
                        <td>
                            <label for="telefono"></label>
                            <input type="text" name="telefono"   />
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Direccion:
                        </td>
                        <td>
                            <label for="direccion"></label>
                            <input type="text" name="direccion"   />
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
            </form><br><br>
            <a href="IngresarUsuario.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ingresar</a>  
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