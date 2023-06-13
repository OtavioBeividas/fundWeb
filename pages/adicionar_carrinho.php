<?php

include('conexao.php');

$livro_id = $_GET['id'];

$sql = "INSERT INTO carrinho (livroId) VALUES ('$livro_id')";

// Executar a consulta
if (mysqli_query($mysqli, $sql)) {
  echo "Produto adicionado ao carrinho com sucesso!";
} else {
  echo "Erro ao adicionar o produto ao carrinho: " . mysqli_error($mysqli);
}

// Fechar a conexão
mysqli_close($mysqli);
header("Location: carrinho.php")
?>