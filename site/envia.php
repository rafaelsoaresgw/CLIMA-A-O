<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']); 

$para = "rafaelsoaresgw@gmail.com";
$assunto = "coleta de dados - clima em acao";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;



$cabeca = "From rafaelsoaresgw13@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso");
}else{
    echo("Houve um erro ao enviar o email");
}