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
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validar os dados recebidos (aplicar validações necessárias)
    $sqlVerificar = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($mysqli, $sqlVerificar);
    
    if (mysqli_num_rows($resultado) > 0) {
        // Usuário já existe, exiba uma mensagem de erro ou redirecione para outra página
        echo "O email informado já está cadastrado.";
        exit;
    }
    // Inserir os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if (mysqli_query($mysqli, $sql)) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o usuário: " . mysqli_error($mysqli);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($mysqli);
    header("Location: login.php");
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
