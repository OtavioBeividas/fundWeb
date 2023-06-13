<?php
session_start();

// Verificar se o usuário já está logado
if (isset($_SESSION['username'])) {
  header("Location: index.php");
  exit();
}

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Verificar as credenciais do usuário (substitua com sua lógica de autenticação real)
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Verificação fictícia de credenciais
  if ($username === "admin" && $password === "senha") {
    // Autenticação bem-sucedida, definir a sessão do usuário
    $_SESSION['username'] = $username;

    // Redirecionar para a página inicial
    header("Location: index.php");
    exit();
  } else {
    // Credenciais inválidas, exibir mensagem de erro
    $error = "Credenciais inválidas";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Login</h1>

  <?php if (isset($error)) { ?>
    <p class="error"><?php echo $error; ?></p>
  <?php } ?>

  <form method="POST">
    <label for="username">Usuário:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Entrar">
  </form>
    <p>Ainda não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
</body>
</html>
