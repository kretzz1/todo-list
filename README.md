# To-Do List Application

Esta é uma aplicação web simples de lista de tarefas (To-Do List) desenvolvida em PHP, MySQL, HTML, CSS e JavaScript.

## Requisitos

- XAMPP
- Navegador web

## Instalação

1. **Instale o XAMPP**:
   - Baixe e instale o XAMPP a partir do [site oficial](https://www.apachefriends.org/index.html).

2. **Inicie o Apache e MySQL**:
   - Abra o painel de controle do XAMPP e inicie os serviços `Apache` e `MySQL`.

3. **Crie o banco de dados**:
   - Acesse o phpMyAdmin (`http://localhost/phpmyadmin`).
   - Crie um novo banco de dados chamado `todo_list`.
   - Importe o script SQL fornecido para criar a tabela `tasks`.

4. **Clone o repositório**:
   - Clone este repositório para a pasta `htdocs` do XAMPP.

5. **Acesse a aplicação**:
   - Abra o navegador e acesse `http://localhost/todo-list`.

## Funcionalidades

- **Adicionar tarefa**: Insira um título e uma descrição (opcional) para adicionar uma nova tarefa.
- **Editar tarefa**: Clique "Editar" para modificar uma tarefa existente.
- **Marcar como concluída**: Marque a checkbox para alterar o status da tarefa para "Concluída".
- **Excluir tarefa**: Clique "Excluir" para remover uma tarefa (com confirmação).
- **Filtrar tarefas**: Use as checkboxes para filtrar tarefas pendentes ou concluídas.

## Estrutura do Projeto

- `index.php`: Página principal da aplicação.
- `db.php`: Conexão com o banco de dados.
- `create_task.php`: Criação de novas tarefas.
- `update_task.php`: Edição de tarefas existentes.
- `delete_task.php`: Exclusão de tarefas.
- `mark_task.php`: Marcação de tarefas como concluídas.
- `css/styles.css`: Estilos CSS.
- `js/script.js`: Scripts JavaScript.
