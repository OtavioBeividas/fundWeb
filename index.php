<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Minha Livraria</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <div class="container">
      <img src="amazon.png" alt="Logo da Livraria" height="50" width="50">
      <nav>
        <ul>
          <li><a href="books.php">Livros</a></li>
          <li><a href="add_book.php">Cadastrar Livros</a></li>
          <li><a href="#">Carrinho</a></li>
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
        <img src="diariobanana.jpg" alt="Livro 1">
        <h3>Diario de um banana</h3>
        <p>Jeff Kinney</p>
        <p class="price">$19.99</p>
        <a href="#" class="button">Adicionar ao Carrinho</a>
      </div>
      <div class="book">
        <img src="harrypotter.jpg" alt="Livro 2">
        <h3>Harry Potter e a Pedra Filosofal</h3>
        <p>J.K. Rowling</p>
        <p class="price">$24.99</p>
        <a href="#" class="button">Adicionar ao Carrinho</a>
      </div>
      <!-- Adicione mais livros em destaque aqui -->
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
