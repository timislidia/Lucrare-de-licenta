<?php

  
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert ='';


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'timislidia43@gmail.com';
        $mail->Password = 'isusteiubeste';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('timislidia43@gmail.com');
        $mail->addAddress('timislidia43@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Message Received (Contact Page)';
        $mail->Body = "<h3>Name : $name <br> Email : $email <br>Message : $message </h3>";

        $mail->send();
        $alert = '<div class="alert-succes">
                 <span> Mesajul a fost trimis! Mulțumim că ne-ați contactat!</span>
                 </div>';
	} 
    catch (Exception $e) {
        $alert = '<div class="alert-error">
                 <span>'.$e->getMessage().'</span>
                 </div>';
	}
}
?>