<?php
 

//$remitente = "mezequielabogado@gmail.com";
$destinatario = "info@syl.com.ar";
//$destinatario = "info@enviofacil.com.ar"; 

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
 
