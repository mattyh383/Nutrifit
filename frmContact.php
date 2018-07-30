<?php


    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['comment'];
        $subject = 'New Comment from Nutrifit';

        $mailTo = 'mattyh383@gmail.com';
        $headers = 'From: '.$mailFrom;

        mail($mailTo,$subject,$message,$headers);
        header('Location: index.php?mailsend');
    }

?>