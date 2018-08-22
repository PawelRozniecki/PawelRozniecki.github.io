<?php
$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];
$submit = $_GET['btn'];

if(isset($submit)){

    mail("pawelrozniecki13@outlook.com",$name,$message,$email);
}
