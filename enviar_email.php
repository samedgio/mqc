<!-- enviar_email.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obter dados do formulário
  $nome = $_POST["nome"];
  $telefone = $_POST["telefone"];
  $pacote = $_POST["pacote"];
  $tipoServico = $_POST["tipo_servico"];

  // Formatar o conteúdo do e-mail
  $mensagem = "Nome: " . $nome . "\n";
  $mensagem .= "Telefone: " . $telefone . "\n";
  $mensagem .= "Pacote: " . $pacote . "\n";
  $mensagem .= "Tipo de Serviço: " . $tipoServico . "\n";

  // Enviar o e-mail usando a função mail() do PHP (requer configuração do servidor)
  mail("samedgio@gmail.com", "Assunto do E-mail", $mensagem);
}
?>