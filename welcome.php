<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h1>Добро пожаловать, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
        <p style="text-align:center"><a href="logout.php">Выйти</a></p>
    </div>
</body>
</html>
