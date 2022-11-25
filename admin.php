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
                    <a class="nav-link text-dark active" href="index.php">Inicio</a>
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
        <form action="procesar_admin.php" name="" method="POST" enctype="multipart/form-data">
            <table border="0" align="center">
                <tr>
                    <td>
                        rut:
                    </td>
                    <td>
                        <label for="rut"></label>
                        <input type="text" name="rut"    />
                    </td>
                </tr>
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
                    telefono:
                    </td>
                    <td>
                        <label for="telefono"></label>
                        <input type="text" name="telefono"    />
                    </td>
                </tr>
                <tr>
                    <td>
                    correo:
                    </td>
                    <td>
                        <label for="correo"></label>
                        <input type="text" name="correo"   />
                    </td>
                </tr>
                <tr>
                    <td>
                        contraseña:
                    </td>
                    <td>
                        <label for="contraseña"></label>
                        <input type="text" name="contraseña"   />
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
        </form>  

        </div>
        <div id="footer_4" class="container">
            <h3>FOOTER</h3>
        </div>
        
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>