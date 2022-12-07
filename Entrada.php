<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Estilo.css">
    <title>pagina</title>
</head>
<body>
    <h3>Pagina principal</h3>
    <form action="Formulario.php">
    <br>
    <button class="color" onclick="location.href='Formulario.php'">Añadir</button>
 </form> 
 <hr> 
	<table>
		<tr>
			<td>Id</td>
			<td>Titulo</td>
			<td>Autor</td>
			<td>Imagen</td>
			<td>Descripción</td>
			<td>Fecha de registro</td>			
		</tr>

		<?php
         include("enviar.php");
         include("conectar.php");
			$conectar = $conexion;

		$sqli="SELECT uno, dos, tres, cuatro, cinca, seis FROM datos WHERE 1";
		$result=mysqli_query($conectar,$sqli);

		while($mostrar=mysqli_fetch_array($result))
		{
		 ?>

		<tr>
			<td><?php echo $mostrar['uno']
			 ?></td>
			<td><?php echo $mostrar['dos'] 
			?></td>
			<td><?php echo $mostrar['tres'] 
			?></td>
			<td><?php echo $mostrar['cuatro'] 
			?></td>
			<td><?php echo $mostrar['cinca'] 
			?></td>
			<td><?php echo $mostrar['seis'] 
			?></td>			
		</tr>
	<?php 
	}
	 ?>
	</table>
</body>
</html>