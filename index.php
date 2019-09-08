<?php
$name = $_POST['fname'];
$email = $_POST['email'];
$title = $_POST['tofmsg'];
$message = $_POST['msg'];


if (isset($_POST['submit'])){
    $x = fopen ("messages.txt", "a");
    // concat. the form elements in order for easy readability
    $contactmsg = "\n\nName: " . $name . "\nEmail: " . $email . "\nTitle: " . $title . "\nMessage: " . $message;
    // wriring to submit your file
    fwrite($x, $contactmsg);
    fclose($x);
    echo "sent"
} 
?>