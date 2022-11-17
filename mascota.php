<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>formulario de noticia</title>

    
  </head>
  <body>
    <h1>Formulario </h1>
    <form action="procesar_mascota.php" name="" method="POST" enctype="multipart/form-data">
      <table border="0" align="center">
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
          animal:
          </td>
          <td>
          <label for="animal"></label>
            <input type="text" name="animal"    />
          </td>
        </tr>
        <tr>
          <td>
          raza:
          </td>
          <td>
            <label for="raza"></label>
            <input type="text" name="raza"    />
          </td>
        </tr>
        <tr>
        <td>
          edad:
          </td>
          <td>
            <label for="edad"></label>
            <input type="text" name="edad"   />
          </td>
        </tr>
        <tr>
          <td>
            nro_id:
          </td>
          <td>
            <label for="nro_id"></label>
            <input type="text" name="nro_id"   />
          </td>
        </tr>
       
        <tr>
            
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center">
            <input
              type="submit"  name="enviar" id="enviar" value="enviar" />
              <input
              type="submit"  name="consultar" id="consultar" value="consultar" />
          </td>
        </tr>
      </table>
    </form>
     
  </body>
</html>