<?php
ob_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba-2</title>
    
    
    
</head>

<body>
    <table>
        <?php

            $host = "localhost";
            $user ="root";
            $pass="";
            $db="veterinariabd";

            $conexion= mysqli_connect($host, $user,$pass,$db);

            $id = $_GET['id']  ??NULL;

            $vista = "SELECT * FROM mascota where id='$id'";
            $resultado = mysqli_query($conexion, $vista);

            while($fila = mysqli_fetch_assoc($resultado)){
                echo " 
                        <tr>
                            <td>
                                <div class='card mb-3' style='max-width: 540px;'>
                                    <div class='row no-gutters'>
                                        <div class='col-md-4'>
                                            <br><img src='" . $fila['img'] . "' class='card-img-top' alt='Card image'>
                                        </div>
                                        <div class='col-md-8'>
                                            <div class='card-body'>
                                                <h1><p class='card-text'>Nombre:" . $fila['nombre']." </h1></p>
                                                <p class='card-text'>Nro ID: " .$fila['nro_id'] . "</p>
                                                <p class='card-text'>Tipo De Animal:: " .$fila['animal'] . "</p>
                                                <p class='card-text'>Raza: " .$fila['raza'] . "</p>
                                                <p class='card-text'>Edad: " .$fila['edad'] . "</p>
                                                <p class='card-text'>Nombre Del Dueño: " .$fila['nombreDueno'] . "</p>
                                                
                                            </div>
                                        </div>
                                        <div class='col'>
                                            
                                            <p class='card-text'>Datos: " . $fila['datos'] . "<br></p>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </td>
                            
                        </tr>";                    
            }
        ?> 
        
    </table>
    
</body>

</html>

<?php
$html= ob_get_clean();
//echo $html;


require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf= new Dompdf();


$dompdf->set_option('isRemoteEnabled', TRUE);

$options = $dompdf->getOptions();
$options ->set(array('isRemoteEnabled' => true));
$dompdf ->setOptions($options);

$dompdf ->loadHtml($html);

//$dompdf ->setPaper('A5','landscape');
$dompdf ->setPaper('letter');

$dompdf-> render();

$dompdf -> stream("archivo_.pdf", array("Attachment" => false));