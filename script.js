// Função para enviar uma requisição POST
function postData(url, data) {
  return fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  })
  .then(response => response.json());
}

// Função para cadastrar um livro
function addBook(event) {
  event.preventDefault();

  const form = document.getElementById('bookForm');
  const bookName = form.bookName.value;
  const author = form.author.value;
  const price = parseFloat(form.price.value);
  const description = form.description.value;

  const bookData = {
    bookName,
    author,
    price,
    description
  };

  postData('add_book.php', bookData)
    .then(response => {
      console.log(response);
      // Aqui você pode adicionar código para exibir uma mensagem de sucesso ou atualizar a lista de livros cadastrados
    })
    .catch(error => {
      console.error(error);
      // Aqui você pode adicionar código para exibir uma mensagem de erro
    });
}

// Evento de submit do formulário
const form = document.getElementById('bookForm');
form.addEventListener('submit', addBook);
