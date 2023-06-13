<?php

include('conexao.php');

if (isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['livroId'])) {
            // Obter os valores do formulário
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $livroId = $_POST['livroId'];
          
            // Inserir os dados na tabela de compras
            $inserirCompra = "INSERT INTO compras (nome, cpf, endereco, telefone, livroId) VALUES ('$nome', '$cpf', '$endereco', '$telefone', '$livroId')";
          
            if (mysqli_query($mysqli, $inserirCompra)) {
              echo "Compra realizada com sucesso!";
            } else {
              echo "Erro ao realizar a compra: " . mysqli_error($mysqli);
            }
          } else {
            echo "Por favor, preencha todos os campos do formulário.";
          }

?>