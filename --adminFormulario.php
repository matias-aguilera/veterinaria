<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>formulario de noticia</title>

    
  </head>
  <body>
    <h1>Formulario </h1>
    <form action="procesar_admin.php" name="" method="POST" enctype="multipart/form-data">
      <table border="0" align="center">
        <tr>
          <td>
            rut:
          </td>
          <td>
            <label for="rut"></label>
            <input type="text" name="rut"    />
          </td>
        </tr>
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
          telefono:
          </td>
          <td>
            <label for="telefono"></label>
            <input type="text" name="telefono"    />
          </td>
        </tr>
        <tr>
        <td>
          correo:
          </td>
          <td>
            <label for="correo"></label>
            <input type="text" name="correo"   />
          </td>
        </tr>
        <tr>
          <td>
            contraseña:
          </td>
          <td>
            <label for="contraseña"></label>
            <input type="text" name="contraseña"   />
          </td>
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