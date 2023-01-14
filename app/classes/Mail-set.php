<?php

    require ('phpmailer/PHPMailerAutoload.php');

    function sendmail($email,$name,$token){

        $mail = new PHPMailer;

        $mail->SMTPDebug = 4;

        $mail->isSMTP();

        $mail->Host      = "smtp.gmail.com";

        $mail->SMTPAuth  = true;

        $mail->Username  = "motinreza2000@gmail.com";

        $mail->Password  = "obvpqmmdruhzlvwa";

        $mail->SMTPSecure ='tls';

        $mail->Port       = 587;

        $mail->setFrom("motinreza2000@gmail.com","Motin Reza");

        $mail->addAddress($email);

        $mail->addReplyTo("motinreza3000@gmail.com","Motin Reza2");

        $mail->isHTML(true);

        $mail->Subject  = 'Subject';

        $mail->Body = '<!DOCTYPE html>

        <html lang="en">

        <head>

            <meta charset="UTF-8">

            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>Subject</title>

        </head>

        <body>

            <p>Hi '.$name.'<br/>

            You have requested for reset your password. Click this link to reset your password <a href="'.'http://localhost/motinreza/admin/'.'reset-password.php?email='.$email.'&&token='.$token.' ">Reset</a>

            </p>

        </body>

        </html>';

        $mail->AltBody = "Verification Message";

        header("location: reset.php");

        $send         = $mail->send();

        if($send){
            $_SESSION["forgot_error"] = "<div class='alert alert-info'>Your password is reset. Please check your email.</div>";
        }else{
            $_SESSION["forgot_error"] = "<div class='alert alert-danger'>Something wrong!</div>";
        }

        exit();

        
    }



function sendmail2($email,$name,$subject, $message){

    $mail = new PHPMailer;

    $mail->SMTPDebug = 4;

    $mail->isSMTP();

    $mail->Host      = "smtp.gmail.com";

    $mail->SMTPAuth  = true;

    $mail->Username  = "motinreza2000@gmail.com";

    $mail->Password  = "obvpqmmdruhzlvwa";

    $mail->SMTPSecure ='tls';

    $mail->Port       = 587;

    $mail->setFrom("motinreza2000@gmail.com","Motin Reza");

    $mail->addAddress($email);

    $mail->addReplyTo("motinreza3000@gmail.com","Motin Reza2");

    $mail->isHTML(true);

    $mail->Subject  = 'Subject';

    $mail->Body = '<!DOCTYPE html>

        <html lang="en">

        <head>

            <meta charset="UTF-8">

            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>Subject</title>

        </head>

        <body>
            <p> 
                Name: '.$name.'; <br>
                Email: '.$email.'; <br>
                Subject: '.$subject.'; <br>
                Message: '.$message.';
            </p>
        </body>

        </html>';

    $mail->AltBody = "Verification Message";

    header("location: index.php");

    $send         = $mail->send();

    exit();


}

?>
