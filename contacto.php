<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$para = 'info@ressolved.com';
$titulo = 'Nuevo mensaje desde el Site';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $name\n E-Mail: $email\n Mensaje:\n $message\n Mensaje:\n $phone";
  
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "{'result':true}";
} else {
echo "{'result':false}";
}

?>