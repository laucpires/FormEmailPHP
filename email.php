<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);

    $to = "laura.pires@digitro.com";
    $subject = "Formulário PHP";
    $body = "Nome: " . $nome . "\n" .
        "E-mail: " . $email . "\n" .
        "Mensagem: " . $mensagem;
    $header = "From: laucpires5@gmail.com" . "\r\n" .
        "Reply to: " . $email . "\r\n" .
        "X=Mailer:PHP/" . phpversion();

    if (mail($to, $subject, $body, $header)) {
        echo "E-mail enviado com sucesso.";
    } else {
        echo "Falha no envio do e-mail.";
    }
}

//Não vai enviar o e-mail pois precisa ser colocado em um servidor real