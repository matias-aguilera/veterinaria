<?php
  
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "veterinariabd";

  $conn = mysqli_connect($host, $user, $pass, $db);

  if (isset($_GET['id'])){
       $id = $_GET['id'];
       $query = "SELECT * FROM noticia where id=$id";
       $result = mysqli_query($conn, $query);
     
       if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $titulo = $row ['titulo'];
        $noticia = $row ['noticia'];
        $autor = $row ['autor'];
        //$img = $row ['img'];
        
       }


       if (isset($_POST['editar'])){
        $id = $_GET['id'];
        $titulo = $_POST ['titulo'];
        $noticia = $_POST ['noticia'];
        $autor = $_POST ['autor'];
       
        

        $query = "UPDATE noticia SET titulo= '$titulo', noticia = '$noticia', autor = '$autor' where id = $id";
        $result = mysqli_query($conn, $query);

        $_SESSION['message'] ='tarea actualizada';
        $_SESSION['message_type'] ='success';


        header("location: adminNoticiasVer.php");



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
        <div class ="container p-4">

            <div class="row">
            
            <div class="col-md-4 mx-auto">

                    <div class ="card card-body">

                            <form action="editarNoticia.php?id=<?php echo $_GET['id'];?>" method='POST'>
                                

                                <h5>ACTUALIZAR Noticia:</h5>
                                <table> 
                                    <tr>
                                        <td>Titulo</td>
                                        <td><input type="text" name="titulo" id="titulo" size="100" value="<?php echo $titulo; ?>" class="form-control"></input></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Noticia</td>
                                        <td><textarea name="noticia" id="noticia" cols="100" rows="10" class="form-control"><?php echo $noticia; ?></textarea></td>
                                    </tr>

                                    <tr>
                                        <td>Autor</td>
                                        <td><input type="text" name="autor" id="autor" size="100" value="<?php echo $autor; ?>" class="form-control"></input></td>
                                    </tr>
                                    
                                    <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input
                                            type="submit"  name="editar" id="editar" value="editar" />
                                            
                                        </td>
                                    </tr>
                                </table>
                            </form>

                    </div>

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