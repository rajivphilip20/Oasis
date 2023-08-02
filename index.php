<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'vendor/autoload.php'; 
include_once "index.html";
  if($_POST["name"]!=NULL)
  {
$mail = new PHPMailer(true); 
  
try {      
    // $mail->SMTPDebug = 3;                                  
    $mail->isSMTP();                                             
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = 'XOAuth2';                              
    $mail->Username   = 'oasismhss@gmail.com';                  
    $mail->Password   = 'oasis@52233';                         
    $mail->SMTPSecure = 'tls';                               
    $mail->Port       = 587;   
  
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $body=
    "NAME : $name<br>
     Email: $email<br>
     Phone: $phone<br>
     Message: $message";
    $mail->setFrom($email,$name);            
    $mail->addAddress("oasismhss@gmail.com"); 
    
       
    $mail->isHTML(true);                                   
    $mail->Subject = $subject; 
    $mail->Body    = $body; 
    // $mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
    $mail->send(); 
    echo "Mail has been sent successfully!"; 
} catch (Exception $e) { 
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 
// header("location: index.html");
}
?> 