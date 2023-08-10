<?php
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require 'vendor/autoload.php';
 
$mail = new PHPMailer(true);
 
try {
    $mail->SMTPDebug = 2;                                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gfg.com;';                   
    $mail->SMTPAuth   = true;                            
    $mail->Username   = 'abhishek.scoe.it@gmail.com';                
    $mail->Password   = 'Pass@123';                       
    $mail->SMTPSecure = 'tls';                             
    $mail->Port       = 587; 
 
    $mail->setFrom('from@gfg.com', 'Name');          
    $mail->addAddress('pandeabhishek00@gmail.com');
    $mail->addAddress('pandeabhishek00@gmail.com', 'Name');
      
    $mail->isHTML(true);                                 
    $mail->Subject = 'Subject';
    $mail->Body    = 'HTML message body in <b>bold</b> ';
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 
?>