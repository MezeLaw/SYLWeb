<?php
 
 
$destinatario = "info@syl.com.ar"; 
 
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= "Mensaje enviado por: " . $_POST['name'] . "\n \nMensaje: \n" . $_POST['message'];

$headers = "From: $email\r\nReply-to: $email";



$enviado= @mail($destinatario, $subject, $message, $headers);

 
if($enviado){
  echo "OK";
} else {
  echo "ERR";
}
 

?>
 
