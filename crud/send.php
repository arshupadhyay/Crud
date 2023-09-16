<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer\Exception.php';
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';

  if(isset($_POST['register'])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();                                        
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'upadhyayarsh23072003@gmail.com';                     
    $mail->Password   = 'jeoqepykjyjgoiii';                              
    $mail->SMTPSecure = 'ssl';            
    $mail->Port       = 465;                            
 
    $mail->setFrom('upadhyayarsh23072003@gmail.com', 'Demo form');
    $mail->addAddress($_POST['email']);    
  
    $mail->isHTML(true);                                 
    $mail->Subject ="Thankyou for registration $_POST[fname]";
    $mail->Body    = $_POST['address'];
   
    $mail->send();
    echo 'Message has been sent';

    echo 
    "
      <script>
        alert('Sent Successfully');
        document.location.href = 'form.php';
      </script>
    ";
  }
?>