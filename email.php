<?php

$nome =  addslashes ($_POST['name']);
$email = addslashes ($_POST['email']);
$telefone = addslashes ($_POST['telefone']);
$mensagem = addslashes ($_POST['mensage']);


$to = 'mangara.moitas@gmail.com';
$subject = "Reserva Site-Mangara";
$body = "Nome: ".$nome."\r\n".
        "Email: ".$email."\r\n".
        "Telefone: ".$telefone."\r\n".
        "Mensagem: ".$mensagem;
$header = "From: mangara.moitas@gmail.com"."\r\n".
            "Reply-To:".$email."\r\n". 
            "X=Mailer:PHP/".phpversion();

mail($to,$subject,$body,$header)





?>