<?php
 

//$remitente = "mezequielabogado@gmail.com";
$destinatario = "info@syl.com.ar";
 
//$mensaje = "Tienes un mensaje desde el formulario de tu sitio web";

$name= $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$headers = "From: $email\r\nReply-to: $email";



$enviado= @mail($destinatario, $subject, $message, $headers);

 
if($enviado){
  echo "OK";
} else {
  echo "ERR";
}
 

?>
 
