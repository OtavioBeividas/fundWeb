<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recupera os dados do formulário
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // Aqui você pode adicionar a lógica de autenticação do usuário
  // Verificar se o usuário existe no banco de dados e se a senha está correta

  // Exemplo de autenticação simples apenas para demonstração
  if ($email === 'usuario@example.com' && $senha === 'senha123') {
    // Autenticação válida, redireciona para a página inicial do sistema
    header('Location: index.php');
    exit;
  } else {
    // Autenticação inválida, exibe mensagem de erro
    $erro = 'Email ou senha inválidos';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
    <div class="container">
      <img src="images/amazon.png" alt="Logo da Livraria" height="50" width="50">
      <nav>
        <ul>
          <li><a href="books.php">Livros</a></li>
          <li><a href="adicionar_livros.php">Cadastrar Livros</a></li>
          <li><a href="carrinho.php">Carrinho</a></li>
          <li><a href="logout.php">Sair</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="container">
    <h2>Login</h2>
    <?php if (isset($erro)) { ?>
      <p class="erro"><?php echo $erro; ?></p>
    <?php } ?>
    <form method="POST" action="login.php">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>
      <button type="submit">Entrar</button>
    </form>
    <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
  </div>
</body>
</html>
