<?php

include('conexao.php');

if(isset($_POST['autor']) || isset($_POST['valor']) || isset($_POST['nome'])){
  if(strlen($_POST['valor']) == 0){
    echo "Preencha o campo 'valor'";
  } else if(strlen($_POST['nome']) == 0){
    echo "Preencha o campo 'nome'";
  } else if(strlen($_POST['autor']) == 0){
    echo "Preencha o campo 'autor'";
  } else {
    $nome = $_POST['nome'];
    $autor = $_POST['autor'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO livros (nome, autor, valor, descricao) VALUES ('$nome', '$autor', '$valor', '$descricao')";

    if (mysqli_query($mysqli, $sql)) {
        echo "Livro cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o Livro: " . mysqli_error($mysqli);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($mysqli);
    header("Location: books.php");
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Minha Livraria</title>
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
<body>
  <div class="container">
    <h2>Cadastrar Livro</h2>
    <form method="POST" action="adicionar_livros.php" enctype="multipart/form-data">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>
      <label for="autor">Autor:</label>
      <input type="text" id="autor" name="autor" required>
      <label for="valor">Valor:</label>
      <input type="number" id="valor" name="valor" step="0.01" required>
      <label for="descricao">Descrição:</label>
      <textarea id="descricao" name="descricao" required></textarea>
      <button type="submit">Cadastrar</button>
    </form>
  </div>

</body>
</html>
