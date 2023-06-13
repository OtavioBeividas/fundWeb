<?php

include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){
  if(strlen($_POST['email']) == 0){
    echo "Preencha seu e-mail";
  } else if(strlen($_POST['senha']) == 0){
    echo "Preencha sua senha";
  } else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;
    
    if($quantidade == 1){
      $usuario = $sql_query->fetch_assoc();

      if(!isset($_SESSION)){
        session_start();
      }
      header("Location: index.php");
    } else {
      echo "Falha ao logar! E-mail o senha incorretos";
    }
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
