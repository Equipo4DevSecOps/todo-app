<?php
session_start();
require 'config/database.php';

if (!isset($_SESSION['user'])) exit;

$tasks = $db->tasks->find(['user' => $_SESSION['user']]);

$result = [];
foreach ($tasks as $task) {
    $result[] = $task['task'];
}

echo json_encode($result);
