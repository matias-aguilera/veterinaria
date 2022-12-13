<?php
include ("conexion.php")
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
   

<div class="container p-4">

<div class="row">

<div class="col-md-4">

<?php  if(isset($_SESSION['message'])){ // se saco de bootstrap ---revisar no parece funcionar?>
    
             <div class="alert alert-<? $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
            <?php  $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

<?php session_unset(); } //hasta aqui es un dismissing ?>   
     
        <div class="card card-body">

        <form action="guardar.php" method="POST">
          <div class="form-group">
            <input type="text" name="titulo" class="form-control" placeholder="tarea" autofocus>
          </div> <br>
          <div class="form-group">
            <textarea name="descripcion" rows="5" class="form-control" placeholder="descripcion"></textarea>
          </div> <br>
          <input type="submit" name="guardar" class="btn btn-success btn-block" value="guardar">
        </form>
            
        </div>        

</div>

<div class="col-md-8">

<table class="table table-bordered">

    <thead>
        <tr>
             <th>titulo</th>
             <th>descripcion</th>
             <th>fecha</th>
             <th>actions</th>

        </tr>
        <tbody>
            <?php 
                $query ="SELECT * FROM crud";
                $result_tarea = mysqli_query( $conn,$query);

                while ( $row = mysqli_fetch_array($result_tarea)){ ?>

                        <tr>
                            <td><?php echo $row['titulo'] ?></td>
                            <td><?php echo $row['descripcion'] ?></td>
                            <td><?php echo $row['fecha'] ?></td>
                            <td>
                                <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i> <!-- editar-->
                                </a> <br>
                                <a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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

     


</nav>
   






   <!--scripts-->
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>











































