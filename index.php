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
        <div id="nav_1" class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-dark active" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="PublicoNoticia.php">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="PublicoHistoria.php">Historia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="PublicoEmpleados.php">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="Publicoingresar.php">Registrar</a>
                </li>
            </ul>
        </div>
        <div id="contenido" class="container">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img/ej.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img2/ej.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img3/ej.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                


            </div>  

            <div class="container">
            <div class="row">
                <div class="col">
                
                </div>
                <div class="col-5">
                <h3>Desea Ingresar Como</h3>
                </div>
                <div class="col">
                
                </div>
            </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <button type="button" class="btn btn-primary">Usuario</button>
              
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-success">Veterinario</button>    
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger">Administrador</button>
                    </div>
                    <div class="col"></div>
                    
                </div>                
            </div>

        </div>
        <div id="footer_1" class="container">
            <h3>FOOTER</h3>
        </div>
        
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>

