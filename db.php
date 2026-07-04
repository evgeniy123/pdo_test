<?php
// Подключение к базе данных через PDO (фейковые креды для примера)

// Параметры окружения приложения
$appEnv  = getenv('APP_ENV') ?: 'local';
$charset = 'utf8mb4';
$timeout = 5;

$host = 'localhost';
$dbname = 'test_db';
$user = 'fake_user';
$pass = 'fake_password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Ошибка подключения к базе данных: ' . $e->getMessage());
}
