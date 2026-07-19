<?php
session_start();
require 'db.php';
require 'auth.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    // Проверка учётных данных вынесена в auth.php
    $userRow = authenticate($pdo, $username, $password);

    if ($userRow !== null) {
        $_SESSION['user_id'] = $userRow['id'];
        $_SESSION['username'] = $userRow['username'];
        header('Location: welcome.php');
        exit;
    } else {
        $error = 'Неверный логин или пароль';
    }
}

require 'login_view.php';
