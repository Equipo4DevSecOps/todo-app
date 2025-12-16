<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ToDo App</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<header>
    <h2>Bienvenido <?php echo $_SESSION['user']; ?></h2>
    <a href="logout.php">Cerrar sesión</a>
</header>

<div class="container">
    <div class="add-task">
        <input type="text" id="task" placeholder="Nueva tarea">
        <button onclick="addTask()">Agregar</button>
    </div>

    <div class="tasks">
        <ul id="taskList"></ul>
    </div>
</div>

<script src="public/js/app.js"></script>
</body>
</html>
