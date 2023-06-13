<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recupera os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // Aqui você pode adicionar a lógica para cadastrar o usuário no banco de dados

  // Exemplo: inserir o usuário em uma tabela 'usuarios'
  // $conexao = mysqli_connect('host', 'usuario', 'senha', 'banco');
  // $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
  // mysqli_query($conexao, $query);

  // Redireciona para a página de login após o cadastro
  header('Location: login.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <div class="container">
      <img src="amazon.png" alt="Logo da Livraria" height="50" width="50">
    </div>
  </header>

  <div class="container">
    <h2>Cadastro de Usuário</h2>
    <form method="POST" action="cadastro.php">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>
      <button type="submit">Cadastrar</button>
    </form>
  </div>

  <footer>
    <div class="container">
      <p>&copy; 2023 Minha Livraria. Todos os direitos reservados.</p>
    </div>
  </footer>
</body>
</html>
