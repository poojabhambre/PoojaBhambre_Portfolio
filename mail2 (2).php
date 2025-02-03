<?php

//Taking all values
$fname 		= $_POST['fname'];
$email 		= $_POST['email'];
$tele 	= $_POST['tele'];
$message  = $_POST['message'];


$output 	= "Name: ".$fname."\n\nemail: ".$email."\n\nPhone Number: ".$tele."\n\nmessage: ".$message;

$to 		= 'info@shreegurudevsainiki.com';
$headers	= 'FROM: "'.$email.'"';

$send		= mail($to, $fname, $output."\n\n***This message has been sent from SGS school website ", $headers);
header('Location: index.html');