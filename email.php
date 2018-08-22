<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$submit = $_POST['btn'];

if($submit){

    mail("pawelrozniecki13@outlook.com",$name,$message,$email);
}
