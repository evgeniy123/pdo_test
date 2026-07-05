<?php
// Подключение к базе данных через PDO (креды берём из окружения, хардкод удалён)

$appEnv  = getenv('APP_ENV') ?: 'local';
$charset = 'utf8mb4';
$timeout = 5;

try {
    $pdo = new PDO(
        "mysql:host=" . getenv('DB_HOST') . ";dbname=" . getenv('DB_NAME') . ";charset=$charset",
        getenv('DB_USER'),
        getenv('DB_PASS')
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Ошибка подключения к базе данных: ' . $e->getMessage());
}
