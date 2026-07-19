<?php
$pageTitle = 'Вход в систему';
require __DIR__ . '/partials/layout_head.php';
?>
    <div class="login-container">
        <h1>Вход</h1>

        <?php if ($error): ?>
            <p class="error"><?
            = htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <label for="username">Логин</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Войти</button>
        </form>
    </div>
</body>
</html>
