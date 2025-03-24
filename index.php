<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM tasks ORDER BY created_at DESC"); // Ordena as tarefas por data de criação começando pela mais recente
$tasks = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>To-Do List</h1>
    <form action="create_task.php" method="POST">
        
        <input type="text" name="title" placeholder="Título" required>
        <textarea name="description" placeholder="Descrição"></textarea>
        <button type="submit">Adicionar Tarefa</button>
    </form>

    <div>
        <h2>Tarefas</h2>
        <!-- Filtro para tarefas -->
        <label>
            <input type="checkbox" id="filter-pending"> Pendentes
        </label>
        <label>
            <input type="checkbox" id="filter-completed"> Concluídas
        </label>
        <ul>
    <?php foreach ($tasks as $task): ?>
        <li class="<?= $task['status'] ? 'completed' : '' ?>">
            <div class="task-content"> <!-- Marca tarefa como concluída -->
                <input type="checkbox" class="task-checkbox" data-id="<?= $task['id'] ?>" <?= $task['status'] ? 'checked' : '' ?>>
                <div class="task-details">
                    <span class="task-title"><?= htmlspecialchars($task['title']) ?></span>
                    <?php if (!empty($task['description'])): ?>
                        <p class="task-description"><?= htmlspecialchars($task['description']) ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <small><?= $task['created_at'] ?></small>
            <a href="update_task.php?id=<?= $task['id'] ?>">Editar</a>
            <a href="delete_task.php?id=<?= $task['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir esta tarefa?')">Excluir</a>
        </li>
    <?php endforeach; ?>
</ul>
    </div>

    <script src="js/script.js"></script>
</body>
</html>