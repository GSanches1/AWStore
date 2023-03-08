<?php
if(isset($_POST['submit'])) {
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $assunto = $_POST['assunto'];
   $mensagem = $_POST['mensagem'];
   
   $to = "qualidade@almeidawerneck.com.br";
   $subject = "Nova mensagem de $nome: $assunto";
   $message = "Você recebeu uma nova mensagem de $nome ($email):\n\n$mensagem";
   $headers = "From: $nome <$email>\r\n";
   
   if(mail($to, $subject, $message, $headers)) {
      echo "Mensagem enviada com sucesso!";
   } else {
      echo "Erro ao enviar a mensagem.";
   }
}
?>