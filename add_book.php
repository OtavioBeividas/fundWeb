<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtém os dados do formulário
  $nomeLivro = $_POST["nome_livro"];
  $autor = $_POST["autor"];
  $valor = $_POST["valor"];
  $descricao = $_POST["descricao"];

  // Conexão com o banco de dados (substitua com as suas configurações)
  $servername = "localhost";
  $username = "seu_usuario";
  $password = "sua_senha";
  $dbname = "seu_banco_de_dados";

  // Cria a conexão
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verifica se houve algum erro na conexão
  if ($conn->connect_error) {
      die("Falha na conexão com o banco de dados: " . $conn->connect_error);
  }

  // Prepara a consulta SQL para inserir os dados do livro na tabela correspondente (substitua com o nome da sua tabela)
  $sql = "INSERT INTO livros (nome_livro, autor, valor, descricao) VALUES ('$nomeLivro', '$autor', '$valor', '$descricao')";

  // Executa a consulta SQL
  if ($conn->query($sql) === TRUE) {
    echo "Cadastro de livro realizado com sucesso!";
  } else {
    echo "Erro ao cadastrar o livro: " . $conn->error;
  }

  // Fecha a conexão com o banco de dados
  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de Livros</h2>
        <form action="cadastro_livros.php" method="POST">
            <div class="form-group">
                <label for="nome_livro">Nome do Livro:</label>
                <input type="text" name="nome_livro" id="nome_livro" required>
            </div>
            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" required>
            </div>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" name="valor" id="valor" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="imagem">URL da Imagem:</label>
                <input type="text" name="imagem" id="imagem" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>

