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
            <form action="procesar_mascota.php" name="" method="POST" enctype="multipart/form-data">
                <table border="0" align="center">
                    <tr>
                    <td>
                        nombre:
                    </td>
                    <td>
                        <label for="nombre"></label>
                        <input type="text" name="nombre"    />
                    </td>
                    </tr>
                    <tr>
                    <td>
                    animal:
                    </td>
                    <td>
                    <label for="animal"></label>
                        <input type="text" name="animal"    />
                    </td>
                    </tr>
                    <tr>
                    <td>
                    raza:
                    </td>
                    <td>
                        <label for="raza"></label>
                        <input type="text" name="raza"    />
                    </td>
                    </tr>
                    <tr>
                    <td>
                    edad:
                    </td>
                    <td>
                        <label for="edad"></label>
                        <input type="text" name="edad"   />
                    </td>
                    </tr>
                    <tr>
                    <td>
                        nro_id:
                    </td>
                    <td>
                        <label for="nro_id"></label>
                        <input type="text" name="nro_id"   />
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
                        <input
                        type="submit"  name="consultar" id="consultar" value="consultar" />
                    </td>
                    </tr>
                </table>
            </form>

        </div>
        <div id="footer_2" class="container">
            <h3>FOOTER</h3>
        </div>
        
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>