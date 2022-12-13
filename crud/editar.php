<?php
  
      include("conexion.php");

      if (isset($_GET['id'])){
           $id = $_GET['id'];
           $query = "SELECT * FROM crud where id=$id";
           $result = mysqli_query($conn, $query);
         
           if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $titulo = $row ['titulo'];
            $descripcion = $row['descripcion'];
           }


           if (isset($_POST['editar'])){
            $id = $_GET['id'];
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];

            $query = "UPDATE crud SET titulo = '$titulo', descripcion = '$descripcion' where id = $id";
            $result = mysqli_query($conn, $query);

            $_SESSION['message'] ='tarea actualizada';
            $_SESSION['message_type'] ='success';


            header("location: index.php");



           }

           
      }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>
   
<div class ="container p-4">

    <div class="row">
     
      <div class="col-md-4 mx-auto">

            <div class ="card card-body">

                    <form action="editar.php?id=<?php  echo $_GET['id'];?>" method='POST'>
                          
                        <div class="form-group">

                            <input type="text" name="titulo"  value="<?php echo $titulo; ?>" 
                            class="form-control" placeholder="actualiza tarea"></input>

                        </div> <br>

                        <div class="form-group">

                            <textarea name="descripcion"  rows="5" class="form-control" placeholder="actualiza descripcion">
                                <?php  echo $descripcion; ?></textarea>

                        </div> <br>
                        <button class="btn btn-success" name="editar">

                        editar

                        </button>

                    </form>

            </div>

      </div>

    </div>


</div>





   <!--scripts-->
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>








