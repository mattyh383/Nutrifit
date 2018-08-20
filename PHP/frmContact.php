<?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\SMTP;
        include_once "./phpmailer/PHPMailer.php";
        include_once "./phpmailer/Exception.php";
        include_once "./phpmailer/SMTP.php";
        $msg = '';

        if(isset(($_POST['submit']))) {
                $email = $_POST['email'];
                $name = $_POST['fName'];
                $body = $_POST['body'];

                $mail = new PHPMailer();

                $mail->isSMTP();
                //$mail->SMTPDebug = 2;
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'mattyh383@gmail.com';
                $mail->Password = 'bqjkilsqdpvdpyog';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;


                $mail->addAddress('mattyh383@gmail.com');
                $mail->setFrom($email,$name);
                $mail->Subject = 'New Mail';
                $mail->isHTML(false);
                $mail->Body = $body;

                if($mail->send()){
                        echo $msg = 'Mail has been sent';
                } else {
                        echo $msg = 'Mail NOT SENT';
                }
        }

?>