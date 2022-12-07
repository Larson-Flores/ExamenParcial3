<?php

$error=0;

if (!empty($submit)) { 
if(!(empty($titulo) || empty($autor) || empty ($imagen) || empty($descrip))) {
if(strlen($titulo) < 51 && strlen($autor) < 51 && strlen($imagen) < 101 && strlen($descrip) <1000) {
$articulo="$titulo $autor\n$imagen\n$descrip";
$articulo=htmlspecialchars($mensaje);
$articulo=stripslashes($mensaje);


if(mail("sunombre@sudominio.com", "Mensaje de $titulo $autor desde el Formulario", "$articulo")) {
?>
OK.
<?php
}
else { 
$error=1;
?>
ERROR
<?php
}
}
}
}
else { 
$error=1;
?>
ERROR
<?php
}
if ($error)
{
?>
<form>
<input type="button" value="Regresar" 
onclick="location.href='Entrada.php'">
</form>
<?php
}