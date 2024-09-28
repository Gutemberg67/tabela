<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $para = "done.com10@gmail.com"; // Substitua pelo seu endereço de e-mail do Gmail
    $assunto_email = "Mensagem de Contato - $assunto";
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "E-mail: $email\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    // Configuração de cabeçalhos para e-mail
    $headers = "From: $nome <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Envio de e-mail
    if (mail($para, $assunto_email, $corpo_email, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem.";
    }
}
?>
