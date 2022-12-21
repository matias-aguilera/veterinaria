<?php
  
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "veterinariabd";

  $conn = mysqli_connect($host, $user, $pass, $db);

  if (isset($_GET['id'])){
       $id = $_GET['id'];
       $query = "SELECT * FROM veterinario where id=$id";
       $result = mysqli_query($conn, $query);
     
       if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $nombre = $row ['nombre'];
        $rut = $row ['rut'];
        $correo = $row ['correo'];
        $telefono = $row ['telefono'];
        $direccion = $row ['direccion'];
        $especialidad = $row['especialidad'];
        $password = $row ['password'];
       }


       if (isset($_POST['editar'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $rut = $_POST ['rut'];
        $correo =$_POST['correo'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $especialidad = $_POST['especialidad'];
        $password =$_POST['password'];
        

        $query = "UPDATE veterinario SET nombre = '$nombre', rut = '$rut', correo = '$correo', telefono = '$telefono', direccion = '$direccion', especialidad = '$especialidad',  password = '$password'  where id = $id";
        $result = mysqli_query($conn, $query);

        $_SESSION['message'] ='tarea actualizada';
        $_SESSION['message_type'] ='success';


        header("location: veterinario.php");



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
</head>
<body>
    <div id="contenedor" class="container">
        <div id="header" class="container">
            <div class="mx-auto" style="width: 100px;">
           <h1>Cuidado Animal</h1>
            </div>
        </div>
        <div id="nav_3" class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-dark active" href="logout.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="veterinario.php">Mis Datos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="veterinarioMascotas.php">Datos de Mascotas</a>
                </li>
                
            </ul>
        </div>
        <div class ="container p-4">

            <div class="row">
            
            <div class="col-md-4 mx-auto">

                    <div class ="card card-body">

                            <form action="veterinario.php?id=<?php  echo $_GET['id'];?>" method='POST'>
                                

                                <h5>ACTUALIZAR Datos:</h5>
                                <table border="0" align="center">
                                <tr>
                                        <td>
                                        Nombre:
                                        </td>
                                        <td>
                                        <label for="nombre"></label>
                                            <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control"></input>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Rut:
                                        </td>
                                        <td>
                                            <label for="rut"></label>
                                            <input type="text" name="rut" value="<?php echo $rut; ?>" class="form-control"></input>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        Correo:
                                        </td>
                                        <td>
                                            <label for="correo"></label>
                                            <input type="text" name="correo" value="<?php echo $correo; ?>" class="form-control"></input>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                        Telefono:
                                        </td>
                                        <td>
                                            <label for="telefono"></label>
                                            <input type="text" name="telefono" value="<?php echo $telefono; ?>" class="form-control"></input>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            Direccion:
                                        </td>
                                        <td>
                                            <label for="direccion"></label>
                                            <input type="text" name="direccion" value="<?php echo $direccion; ?>" class="form-control"></input>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Especialidad:
                                        </td>
                                        <td>
                                        <label for="especialidad"></label>
                                            <input type="text" name="especialidad" value="<?php echo $especialidad; ?>" class="form-control"></input>
                                    </tr>
                                    <tr>
                                        <td>
                                            Contraseña:
                                        </td>
                                        <td>
                                            <label for="password"></label>
                                            <input type="text" name="password" value="<?php echo $password; ?>" class="form-control"></input>
                                        </td>
                                    <tr>
                                            
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
        <div id="footer_3" class="container">
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