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
        // Conexão com o banco de dados
        include('conexao.php');

        // Consulta SQL para obter os itens do carrinho com detalhes do livro
        $consulta = "SELECT carrinho.livroId, livros.nome, livros.autor, livros.valor, livros.descricao FROM carrinho INNER JOIN livros ON carrinho.livroId = livros.id";
        $resultado = mysqli_query($mysqli, $consulta);

        // Verifica se há itens no carrinho para exibir
        if (mysqli_num_rows($resultado) > 0) {
          // Loop para exibir cada item do carrinho
          echo "<table>";
          echo "<tr><th>Nome do Livro</th><th>Autor</th><th>Descriçao</th><th>Preço</th><th>Id</th></tr>";
          while ($item = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $item['nome'] . "</td>";
            echo "<td>" . $item['autor'] . "</td>";
            echo "<td>" . $item['valor'] . "</td>";
            echo "<td>" . $item['descricao'] . "</td>";
            echo "</tr>";
            echo "<td>";
            echo "<a href='comprar.php?livroId=" . $item['livroId'] . "' class='button'>Comprar</a>";
            echo "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='4'>Nenhum item encontrado no carrinho.</td></tr>";
        }
        echo "</table>";

        // Fecha a conexão com o banco de dados
        mysqli_close($mysqli);
        ?>
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
