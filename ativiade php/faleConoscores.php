<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$duvid = $_POST['duvid'];

$file = fopen("faleConoscores.txt","w");

fwrite($file, "Nome: $fname $lname\n");
fwrite($file, "Email: $email\n");
fwrite($file, "Duvida do cliente: $duvid\n");
fclose($file);      
echo "<center><h1>obrigado pela preferencia</h1></center>";





?>