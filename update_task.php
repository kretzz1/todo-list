<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $stmt = $pdo->prepare("UPDATE tasks SET title = ?, description = ? WHERE id = ?");
    $stmt->execute([$title, $description, $id]);

    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM tasks WHERE id = ?");
$stmt->execute([$id]);
$task = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Editar Tarefa</h1>
    <form action="update_task.php" method="POST">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
        <input type="text" name="title" value="<?= htmlspecialchars($task['title']) ?>" required>
        <textarea name="description"><?= htmlspecialchars($task['description']) ?></textarea>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>