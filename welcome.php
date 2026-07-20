<?php
session_start();

$pageTitle = 'Добро пожаловать';
require __DIR__ . '/partials/layout_head.php';
?>
    <div class="login-container">
        <h1>Добро пожаловать, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
        <p style="text-align:center"><a href="logout.php">Выйти</a></p>
    </div>
</body>
</html>
