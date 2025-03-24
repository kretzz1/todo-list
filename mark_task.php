<?php
require 'db.php';

$id = $_POST['id'];
$status = $_POST['status'];

$stmt = $pdo->prepare("UPDATE tasks SET status = ? WHERE id = ?");
$stmt->execute([$status, $id]);

header('Location: index.php');
exit;
?>