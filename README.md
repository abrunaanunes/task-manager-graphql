# Gerenciador de Tarefas em GraphQL com Laravel

## Descrição

Este projeto é um gerenciador de tarefas desenvolvido em Laravel utilizando GraphQL com a biblioteca `rebing/graphql-laravel`. A API permite realizar operações de criação, leitura, atualização e exclusão (CRUD) de tarefas, incluindo campos como título, descrição e status de conclusão.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP para desenvolvimento web.
- **GraphQL**: Linguagem de consulta para APIs.
- **rebing/graphql-laravel**: Biblioteca para integrar GraphQL ao Laravel.
- **MySQL**: Banco de dados utilizado para persistência de dados.

## Funcionalidades

- Cadastrar novas tarefas.
- Listar todas as tarefas.
- Atualizar informações de tarefas existentes.
- Deletar tarefas.
- Consultas personalizadas para filtrar resultados.

## Estrutura da API

### Types

Os tipos definem a estrutura dos dados. Por exemplo, o `TaskType` representa uma tarefa com os seguintes campos:

- `id`: Identificador único da tarefa.
- `title`: Título da tarefa.
- `description`: Descrição da tarefa.
- `completed`: Status de conclusão da tarefa.

### Queries

As queries são usadas para buscar dados. Exemplos de queries incluem:

- `tasks`: Retorna todas as tarefas.
- `task(id: ID!)`: Retorna uma tarefa específica pelo ID.

### Mutations

As mutations permitem alterar dados. Exemplos de mutations incluem:

- `createTask(title: String!, description: String!): Task`: Cria uma nova tarefa.
- `updateTask(id: ID!, title: String, description: String, completed: Boolean): Task`: Atualiza uma tarefa existente.
- `deleteTask(id: ID!): Boolean`: Deleta uma tarefa.

## Instalação

1. Clone o repositório:

   ```bash
   git clone https://github.com/seuusuario/gerenciador-de-tarefas-graphql.git
   ```

2. Navegue até o diretório do projeto:

   ```bash
   cd gerenciador-de-tarefas-graphql
   ```

3. Instale as dependências com Composer:

   ```bash
   composer install
   ```

4. Configure o arquivo `.env` com suas credenciais de banco de dados.

5. Execute as migrações para criar as tabelas no banco de dados:

   ```bash
   php artisan migrate
   ```

6. Inicie o servidor:

   ```bash
   php artisan serve
   ```

## Uso

Utilize uma ferramenta como [GraphiQL](https://graphql.org/swapi-graphql/) ou [Postman](https://www.postman.com/) para testar as queries e mutations.

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir um issue ou pull request.