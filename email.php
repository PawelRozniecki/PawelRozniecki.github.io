<?php

$submit = $_POST['btn'];

if(isset($submit)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $mailTo = "pawelrozniecki13@outlook.com";
    $headers = "From:".$name;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo,$subject,$txt,$headers);
    header("Location : index.php>mailSend");
}
