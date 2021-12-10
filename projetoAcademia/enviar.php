<?php

ini_set('display_errors',1);

error_reporting(E_ALL);

$nome = $_POST['nome'];
$remetente = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$telefone = $_POST['telefone'];
$newsletter = $_POST['newsLetter'];

$destinatario = "edsonrb.2008@gmail.com";

$corpoEmail = "Telefone: $telefone<br><br>";
$corpoEmail .= "Mensagem: $mensagem";
$corpoEmail .= "Receba as Novidades: $newsletter";

$cabecalho = "MIME-Version: 1.0" . "\r\n";
$cabecalho .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$cabecalho .= "From: $nome<$remetente>";

if(mail($destinatario,$assunto,$corpoEmail,$cabecalho)){
    header("location:sucesso.html");
}else{
    echo "<h2>Erro ao enviar a mensagem, tente novamente mais tarde!</h2>";
}



