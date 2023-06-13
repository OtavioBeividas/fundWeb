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
          <li><a href="index.php">Inicio</a></li>
          <li><a href="adicionar_livros.php">Cadastrar Livros</a></li>
          <li><a href="carrinho.php">Carrinho</a></li>
          <li><a href="logout.php">Sair</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="featured-books">
    <div class="container">
      <h2>Livros enviados para cadastro</h2>
      <div class="book">
        <?php

        include('conexao.php');

        if (isset($_GET['livroId'])) {
            $livroId = $_GET['livroId'];
        
            // Busca as informações do livro na tabela livros
            $buscarLivro = "SELECT * FROM livros WHERE id = '$livroId'";
            $resultado = mysqli_query($mysqli, $buscarLivro);
        
            if ($resultado && mysqli_num_rows($resultado) > 0) {
            // Obtém os dados do livro
            $livro = mysqli_fetch_assoc($resultado);
        
            // Exibe as informações do livro
            echo "<h2>Detalhes do Livro</h2>";
            echo "<p><strong>Nome:</strong> " . $livro['nome'] . "</p>";
            echo "<p><strong>Autor:</strong> " . $livro['autor'] . "</p>";
            echo "<p><strong>Valor:</strong> $" . $livro['valor'] . "</p>";
            echo "<p><strong>Descrição:</strong> " . $livro['descricao'] . "</p>";
        
            // Formulário para preenchimento dos dados do comprador
            echo "<h2>Preencha seus dados</h2>";
            echo "<form action='processar_compra.php' method='POST'>";
            echo "<input type='hidden' name='livroId' value='" . $livroId . "'>";
            echo "<label for='nome'>Nome:</label>";
            echo "<input type='text' name='nome' id='nome'>";
            echo "<label for='cpf'>CPF:</label>";
            echo "<input type='text' name='cpf' id='cpf'>";
            echo "<label for='endereco'>Endereço:</label>";
            echo "<input type='text' name='endereco' id='endereco'>";
            echo "<label for='telefone'>Telefone:</label>";
            echo "<input type='text' name='telefone' id='telefone'>";
            echo "<input type='submit' value='Finalizar Compra'>";
            echo "</form>";
            } else {
            echo "Livro não encontrado.";
            }
        } else {
            echo "Livro não especificado.";
        }  
        ?>
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
