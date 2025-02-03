<?php

//Taking all values
$fname1    = $_POST['fname1'];
$email1    = $_POST['email1'];
$message1   = $_POST['message1'];

$output   = "Name: ".$fname1."\n\nEmail: ".$email1."\n\nMessage: ".$message1;

$to     = 'poojabhambre036@gmail.com';
$headers  = 'FROM: "'.$email1.'"';

$send   = mail($to, $fname1, $output."\n\n***This message has been sent from SGS school website", $headers);
header('Location: index.html');