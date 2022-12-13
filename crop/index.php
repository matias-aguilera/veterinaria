<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crop</title>
    <link rel="stylesheet" href = "css/imgareaselect.css">
</head>
<body>
        <form action ="crop.php" method="post" enctype="multipart/form-data">
        <p>upload image:<input type="file" name="image" id="image"/></p>
        <input type="hidden" name="x1" value=""/>
        <input type="hidden" name="y1" value=""/>
        <input type="hidden" name="w" value=""/>
        <input type="hidden" name="h" value=""/>
        <button type="submit" name="submit">boton</button>


        </form >
        <p>
            <img id="previewimage" style="display:none;"/>

        </p>
      
    <script src ="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script> src ="js/jquery.imgareaselect.js"</script>
    <script>
        jQuery(funcion($){
            var p =$("#previewimage");
            $("body").on("change","#image", function(){
                var imageReader = new FileReader();
                imageReader.readAsDataURL(document.getElementById("image").file[0]);
                imageReader.onload =function (oFREvent){
                    p.attr('src', oFREvent.target.result).fadeIn();
                };
            });
            $('#previewimage').imgAreaSelect({
                onSelectEnd: function (img, selection){
                    $('input[name="x1"]').val(selection.x1);
                    $('input[name="y1"]').val(selection.y1);
                    $('input[name="w"]').val(selection.width);
                    $('input[name="h"]').val(selection.height);
                }
            });
        });
    </script>
</body>
</html>







