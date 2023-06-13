<?php
// Dados fictícios para exemplificar
$availableBooks = [
  ["title" => "Livro 3", "author" => "Autor 3", "price" => 24.99],
  ["title" => "Livro 4", "author" => "Autor 4", "price" => 14.99]
];

// Converte os dados em JSON e envia como resposta
echo json_encode($availableBooks);
?>
