<?php
session_start();
require 'config/database.php';

if (!isset($_SESSION['user'])) exit;

$data = json_decode(file_get_contents("php://input"), true);

$db->tasks->insertOne([
    'user' => $_SESSION['user'],
    'task' => $data['task'],
    'created_at' => new MongoDB\BSON\UTCDateTime()
]);

echo json_encode(['status' => 'ok']);
