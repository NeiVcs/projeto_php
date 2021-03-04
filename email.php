<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['mesage']);

$to = "neivcs@hotmail.com";
$subject = "contato - empresa x";
$body = "Nome: ".%nome. "\r\n".
		"E-mail: ".$email. "\r\n".
		"Mensagem: ".$mensagem;
$header = "From:neifdc@hotmail.com"."r\n".
		"Replay-To:".$email."e\n".
		"X=Mailer:PHP/".phpversion();
		
if(mail($to,$subject,$body,$header)){
	echo("E-mail enviado com sucesso!");
}else{
	echo("Erro! O e-mail não pode ser enviado.");
}
}
?>