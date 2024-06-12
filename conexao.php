<?php


$mensagem = $_POST["mensagem"];
$assunto = $_POST["assunto"];
$nome = $_POST["email"];

$destino ="santosnath433@gmail.com"

$mensagemFormatada = nl2br(htmlspecialchars($mensagem));

$sucesso = mail($destino, $assunto, $mensagemFormatada);


if ($sucesso){
    echo 'E-mail enviado com sucesso';
} else {
echo 'Erro ao enviar e-mail';
}

?>