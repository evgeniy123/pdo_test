<?php
// Подключение к базе данных через PDO (фейковые креды для примера)

require __DIR__ . '/config.php';

// Уровень логирования держим рядом с бутстрапом БД — им пользуется обработчик
// ошибок подключения, а не конфиг приложения
$logLevel = 'debug';
$logFile  = '/var/log/pdo.log';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Ошибка подключения к базе данных: ' . $e->getMessage());
}
