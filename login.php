<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
<div class="login-box">
    <h2>Login</h2>
    <form method="POST" action="auth.php">
        <input type="text" name="username" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Ingresar</button>
    </form>
</div>
</body>
</html>
