$img = $_FILES['img'];

$nombre_archivo = $titulo;

//revisar envio de imagen(foto)

$target_dir = "img/";
$target_file = $target_dir . $nombre_archivo . '.jpg';

$nAncho=100;
$nAlto=100;

if($_FILES['img']['error']=== UPLOAD_ERR_OK){
    $imagen_original= $_FILES['img']['tmp_name'];   

    $img_original= imagecreatefromjpeg($imagen_original);

    $ancho_original= imagesx($img_original);
    $alto_original= imagesy($img_original);

    $tmp= imagecreatetruecolor($nAncho,$nAlto);
    imagecopyresized($tmp, $img_original,0,0,0,0,$nAncho,$nAlto,$ancho_original,$alto_original);

    imagejpeg($tmp,$target_file,100);

}
$check = getimagesize($img["tmp_name"]);

if($check !== false) {
    include "adminNoticia.php";
}else {
    echo "imagen no es formato jpeg";
}




<tr>
                    <td>Foto</td>
                    <td><label for="img"></label>
                    <input type="file" name="img" id="img" accept="image/jpeg" required /></td>
                </tr>