
<?php
include("conectar.php");
if (isset($_POST['datos'])) {
    if (strlen($_POST['dos']) >= 1 && strlen($_POST['tres']) >= 1 && strlen($_POST['cuatro']) >= 1 && strlen($_POST['cinca']) >= 1)
	{
	    $titulo = trim($_POST['dos']);
	    $autor = trim($_POST['tres']);
		$imagen = trim($_POST['cuatro']);
		$descrip = trim($_POST['cinca']);		
	    $fechareg = date("d/m/y");




	    $registro = "INSERT INTO datos(dos, tres, cuatro, cinca, seis) VALUES ('$titulo','$autor','$imagen','$descrip','$fechareg')";


	    $resultado = mysqli_query($conexion,$registro);
	    if ($resultado) {
	    	?> 
	    	<p>PALOMITA</p>
    		<button class="color" onclick="location.href='Entrada.php'">INICIO</button>
           <?php
	    } else {
	    	?> 
	    	<h3>Error</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3>Error</h3>
           <?php
    		 }
								}


?>