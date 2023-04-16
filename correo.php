<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$correo = $_POST['correo'];




$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = 0;                     
    $mail->isSMTP();                                          
    $mail->Host       = 'smtp.gmail.com';                   
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'reyesjulioconexion@gmail.com';                     
    $mail->Password   = 'lcvhocnibwslhjvz';                               
    $mail->SMTPSecure = 'tls';           
    $mail->Port       = 587;                                    

  
    $mail->setFrom('reyesjulioconexion@gmail.com', 'Julio Reyes');
    $mail->addAddress($correo); 

 
   
    $mail->addAttachment('./temp/codigoqr.png','codigoqr.png');
    


    $mail->isHTML(true);                                
    $mail->Subject = 'Correo de recuperacion';
    $mail->Body = ('http://recursophpsqlserver.com/recuperar.php'); 
  
  
    
    $mail->send();
    echo 'Mensaje enviado';
} catch (Exception $e) {
    echo "Mensaje con error: {$mail->ErrorInfo}";
}
echo "<script>alert('Se ha enviado un mensaje al correo $correo por favor verificar')</script>";
echo "<script>window.close('login.php', '_self');</script>";
