<?php
session_start();

// Verifica se o produto foi especificado
if (isset($_GET['produto'])) {
  // Obtém o ID do produto
  $produtoId = $_GET['produto'];

  // Adiciona o produto ao carrinho
  adicionarAoCarrinho($produtoId);
  
  // Redireciona de volta para a página de produtos
  header('Location: index.php');
  exit;
}
?>
