<?php
session_start();

// Verifica se o carrinho de compras está vazio
if (!isset($_SESSION['carrinho'])) {
  $_SESSION['carrinho'] = array();
}

// Adiciona um produto ao carrinho
function adicionarAoCarrinho($produto) {
  array_push($_SESSION['carrinho'], $produto);
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

  <div class="banner">
    <div class="container">
      <h1>Bem-vindo à Minha Livraria</h1>
      <p>Encontre os melhores livros com os melhores preços!</p>
      <a href="#" class="button">Ver Livros</a>
    </div>
  </div>

  <div class="featured-books">
    <div class="container">
      <h2>Livros em Destaque</h2>
      <div class="book">
        <img src="images/diariobanana.jpg" alt="Livro1">
        <h3>Diario de um banana</h3>
        <p>Jeff Kinney</p>
        <p class="price">$19.99</p>
        <a href="adicionar_carrinho.php?produto=Livro1" class="button">Adicionar ao Carrinho</a>
      </div>
      <div class="book">
        <img src="images/harrypotter.jpg" alt="Livro2">
        <h3>Harry Potter e a Pedra Filosofal</h3>
        <p>J.K. Rowling</p>
        <p class="price">$24.99</p>
        <a href="adicionar_carrinho.php?produto=Livro2" class="button">Adicionar ao Carrinho</a>
    </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <p>&copy; 2023 Minha Livraria. Todos os direitos reservados.</p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
