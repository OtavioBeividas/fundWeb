<?php
session_start();

// Verifica se o carrinho está vazio
if (empty($_SESSION['carrinho'])) {
  echo "<p>O carrinho de compras está vazio.</p>";
} else {
  // Exibe os produtos do carrinho
  echo "<h2>Seu Carrinho de Compras</h2>";
  foreach ($_SESSION['carrinho'] as $produtoId) {
    // Aqui você pode obter as informações do produto do banco de dados
    // e exibir os detalhes, como nome, autor, preço, etc.
    echo "<div class='item'>";
    echo "<h3>Nome do Livro</h3>";
    echo "<p>Autor do Livro</p>";
    echo "<p class='price'>$19.99</p>";
    echo "</div>";
  }
}
?>

<!DOCTYPE html>

<html>
<head>
  <title>Minha Livraria - Carrinho de Compras</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <!-- Código do cabeçalho -->
  </header>
  <div class="container"></div>
  <footer>
    <!-- Código do rodapé -->
  </footer>
</body>
</html>
