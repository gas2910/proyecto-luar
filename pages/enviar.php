<?php

$destino="gastonribba@gmail.com";
$email=$_POST["email"];
$mensaje=$_POST["FormControlTextarea1"];
$contenido="Email: " . $mensaje . "\nMensaje: "
mail($destino,"Contacto", $contenido);
header("Location:../index.html");
?>