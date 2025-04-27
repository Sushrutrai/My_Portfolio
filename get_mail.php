<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $to="sushrutrai99@gmail.com";
        $message = "Name: " . $_POST['name'] . "\n"
        . "Email: " . $_POST['email'] . "\n\n"
        . "Message:\n" . $_POST['message'];
        $headers = "From: " . $_POST['email'];
        if(mail($to, $message, $headers)) {
            echo 'Successfully sent ';
        }
        else{
            echo 'Try again';
        }
    }
?>