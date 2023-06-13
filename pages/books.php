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

            $sql = "SELECT * FROM livros";

            // Executar a consulta SQL
            $result = $mysqli->query($sql);

            // Verificar se há registros retornados
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Nome do Livro</th><th>Descrição</th><th>Autor</th><th>Preço</th><th>Id</th></tr>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['descricao'] . "</td>";
                    echo "<td>" . $row['autor'] . "</td>";
                    echo "<td>$" . $row['valor'] . "</td>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td><a href='adicionar_carrinho.php?id=" . $row['id'] . "'>Adicionar ao Carrinho</a></td>";
                    echo "<td><a href='remover_livro.php?id=".$row['id']."'>Remover</a></td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            } else {
            echo "Nenhum livro encontrado.";
            }

            // Fechar a conexão com o banco de dados
            $mysqli->close();
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