<?php
// Подключение к базе данных через PDO (фейковые креды для примера)

// Параметры окружения приложения
$appEnv  = getenv('APP_ENV') ?: 'local';
$charset = 'utf8mb4';
$timeout = 5;

$host = 'localhost';
$dbname = 'test_db';
$dbUser = 'fake_user';
$dbPass = 'fake_password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Ошибка подключения к базе данных: ' . $e->getMessage());
}
