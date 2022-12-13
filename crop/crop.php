<?php

require_once 'autoload.php';

use intervention\image\imageManagerStatic as image;

if (isset($_POST['submit'])){
    if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
        if(!file_exists('images')){
            mkdir('images', 0755);
        }

        $filename = $_FILES['image']['name'];
        $filepath = 'images/'.$filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $filepath);

        if(!file_exists('images/crop')){
            mkdir('images/crop', 0755);
        }

        //imagen crop
        $img = Image::make($filepath);
        $croppath = 'images/crop/'.$filename;
        $img->crop($_POST['w'],$_POST['h'],$_POST['x1'],$_POST['y1']);
    }
}

?>