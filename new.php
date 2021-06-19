<?php
    include('smtp/PHPMailerAutoLoad.php');

    $mail = new PHPMailer(true);

    $msg="Respected Sir,<br>

This letter serves as a formal request to your company for a full refund for the claim that I requested.
I have been a loyal and sincere client of your insurance company. I always paid the money on time.
I had already raised a request on claim and had been successfully accepted by the company.So I request you to
refund the money on my UPI $upi as soon as possible.I had also attached the copy of the receipts.
I hope that you will have no problem refunding the money. I am looking forward to hearing from you.

Yours faithfully.<br>
$name";

try {
    //Server settings
    $mail->SMTPDebug = 3;
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'yp758013@gmail.com';                     //SMTP username
    $mail->Password   = 'Darpan@991127';                               //SMTP password
    $mail->SMTPSecure = 'tsl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->addAddress('darpan.modak@walchandsangli.ac.in', 'Joe User');     //Add a recipient

    //Attachments
    $mail->addAttachment($rof);         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Refund';
    $mail->Body    = $msg;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>