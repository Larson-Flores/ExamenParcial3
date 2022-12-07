<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Estilo.css">


  <title>pagina</title>


</head>
<body>
<form method="post">
  <table>
    <tbody>
      <tr>
        <td>Título</td>
        <td><input name="dos" type="text"></td>
      </tr>
      <tr>
        <td>Autor</td>
        <td><input name="tres" type="text"></td>
      </tr>
      <tr>
        <td>Imagen</td>
        <td><input name="cuatro" type="file"></td>
      </tr>
      <tr>
        <td>Descripción</td>
        <td><textarea name="cinca" wrap="soft"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td> 
        <table>
          <tbody>
            <tr>
              <td><div class="boton">
                <input type="submit" name="datos" value="Enviar"/>
            </div>
          </td>
              <td></td>
      </tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</form>




<?php 
include("enviar.php");
?>
</body>
</html>
