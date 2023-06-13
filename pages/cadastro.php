<?php

include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['nome'])){
  if(strlen($_POST['email']) == 0){
    echo "Preencha seu e-mail";
  } else if(strlen($_POST['senha']) == 0){
    echo "Preencha sua senha";
  } else if(strlen($_POST['nome']) == 0){
    echo "Preencha seu nome";
  } else {
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT COUNT(*) AS total from usuarios where email = '$email'";
    $result = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    $row = mysqli_fetch_assoc($result);
    
    if($row['total'] == 1){
      $_SESSION['usuario_existe'] = true;
      header('Location: cadastro.php');
      exit;
    }

    $sql_code = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', $email', '$senha'";

    if(!isset($_SESSION)){
      session_start();
    } else {
      echo "Falha ao logar! E-mail o senha incorretos";
    }
    header("Location: index.php");
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
    <div class="container">
      <img src="images/amazon.png" alt="Logo da Livraria" height="50" width="50">
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
