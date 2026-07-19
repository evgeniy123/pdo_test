<?php
// Аутентификация пользователей

/**
 * Ищет пользователя по логину и проверяет пароль.
 *
 * @return array|null Строка пользователя либо null, если проверка не прошла
 */
function authenticate(PDO $pdo, string $username, string $password): ?array
{
    $stmt = $pdo->prepare('SELECT id, username, password FROM users WHERE username = :username');
    $stmt->execute(['username' => $username]);
    $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($userRow && password_verify($password, $userRow['password'])) {
        return $userRow;
    }

    return null;
}
