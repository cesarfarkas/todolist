# Siga os passos abaixo, para dar start na API Rest

Essa API é importante para o front-end

### BANCO DE DADOS

Nesse projeto está sendo usado um banco MySQL. Crie uma database chamda laravel.
Mais detalhes consulte o arquivo .env

Dentro da pasta do projeto rode o seguinte comando para criar as tabelas necessárias:

### `php artisan migrate`

### DANDO O START NO PROJETO

### `php artisan serve`

Para realizar o teste, abra o aplicativo POSTMAN

### Inserir: POST 

http://127.0.0.1:8000/api/tarefa , Headers(KEY → Content-Type) and VALUE(application/json) + Body(raw):

{
  "titulo": "Primeiro artigo pelo Postman",
  "conteudo": "Descrição desse artigo de número um."
}

### Listar todas as tarefas: GET

http://127.0.0.1:8000/api/tarefas


### FIM

Se através do seu postman você conseguiu inserir e listar as tarefas agora está tudo pronto para você rodar o front-end do todolist