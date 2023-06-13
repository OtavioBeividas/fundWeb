<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtém os dados do formulário
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  // Exemplo: exibe uma mensagem de sucesso
  echo "Cadastro realizado com sucesso!";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de Usuário</title>
</head>
<body>
  <h2>Cadastro de Usuário</h2>
  <form action="cadastro_process.php" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br>

    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>
