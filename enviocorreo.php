<?php
$mensaje = $_POST['MENSAJE'];
$tipoMensaje = $_POST['TIPOMENSAJE'];
$email = "informes@aulapre.com";


mail($email, $tipoMensaje, $mensaje);
?>
