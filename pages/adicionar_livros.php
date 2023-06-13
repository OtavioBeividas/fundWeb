<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recupera os dados do formulário
  $nome = $_POST['nome'];
  $autor = $_POST['autor'];
  $valor = $_POST['valor'];
  $descricao = $_POST['descricao'];
  
  // Verifica se foi enviada uma imagem
  if ($_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
    $imagem_temp = $_FILES['imagem']['tmp_name'];
    $imagem_nome = $_FILES['imagem']['name'];
    $imagem_extensao = pathinfo($imagem_nome, PATHINFO_EXTENSION);
    $imagem_destino = 'imagens/' . uniqid('livro_') . '.' . $imagem_extensao;

    // Move a imagem para o diretório de destino
    move_uploaded_file($imagem_temp, $imagem_destino);
  }

  // Aqui você pode adicionar a lógica para cadastrar o livro no banco de dados

  // Exemplo: inserir o livro em uma tabela 'livros'
  // $conexao = mysqli_connect('host', 'usuario', 'senha', 'banco');
  // $query = "INSERT INTO livros (nome, autor, valor, descricao, imagem) VALUES ('$nome', '$autor', '$valor', '$descricao', '$imagem_destino')";
  // mysqli_query($conexao, $query);

  // Redireciona para a página de livros após o cadastro
  header('Location: books.php');
  exit;
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
    <form method="POST" action="add_book.php" enctype="multipart/form-data">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>
      <label for="autor">Autor:</label>
      <input type="text" id="autor" name="autor" required>
      <label for="valor">Valor:</label>
      <input type="number" id="valor" name="valor" step="0.01" required>
      <label for="descricao">Descrição:</label>
      <textarea id="descricao" name="descricao" required></textarea>
      <label for="imagem">Imagem:</label>
      <input type="file" id="imagem" name="imagem" accept="image/*" required>
      <button type="submit">Cadastrar</button>
    </form>
  </div>

</body>
</html>
