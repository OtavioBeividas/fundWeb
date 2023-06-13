<?php
// Dados fictícios para exemplificar
$purchasedBooks = [
  ["title" => "Livro 1", "author" => "Autor 1", "price" => 19.99],
  ["title" => "Livro 2", "author" => "Autor 2", "price" => 29.99]
];

// Converte os dados em JSON e envia como resposta
echo json_encode($purchasedBooks);
?>
