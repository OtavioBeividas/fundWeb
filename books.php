<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de Livros</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Cadastro de Livros</h1>
  <form id="bookForm">
    <label for="bookName">Nome do Livro:</label>
    <input type="text" id="bookName" name="bookName" required>

    <label for="author">Autor:</label>
    <input type="text" id="author" name="author" required>

    <label for="price">Valor:</label>
    <input type="number" id="price" name="price" step="0.01" required>

    <label for="description">Descrição:</label>
    <textarea id="description" name="description" required></textarea>

    <input type="submit" value="Cadastrar">
  </form>

  <script src="script.js"></script>
</body>
</html>
