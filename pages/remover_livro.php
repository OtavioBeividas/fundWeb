<?php

include('conexao.php');

if (isset($_GET['id'])) {
    // Obtém o ID do livro a ser removido
    $livro_id = $_GET['id'];

    // Executa a consulta para excluir o livro da tabela
    $sql = "DELETE FROM livros WHERE id = $livro_id";
    if ($mysqli->query($sql) === TRUE) {
        echo "Livro removido com sucesso.";
    } else {
        echo "Erro ao remover livro: " . $mysqli->error;
    }
}
header("Location: books.php");
?>