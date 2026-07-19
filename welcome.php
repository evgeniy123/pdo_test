<?php
session_start();

// Доступ к странице разрешён только авторизованным пользователям
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$pageTitle = 'Добро пожаловать';
require __DIR__ . '/partials/layout_head.php';
?>
    <div class="login-container">
        <h1>Добро пожаловать, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
        <p style="text-align:center"><a href="logout.php">Выйти</a></p>
    </div>
</body>
</html>
