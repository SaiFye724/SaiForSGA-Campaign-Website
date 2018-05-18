<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $formcontent="From: $name";
    $recipient = "sai.maddali724@gmail.com";
    $subject = "SGA Sign Up";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";
?>