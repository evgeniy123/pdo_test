<?php
// Общая «шапка» страниц: doctype, head и открытие body.
// Заголовок страницы задаёт вызывающий файл через $pageTitle.
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($pageTitle ?? 'Вход в систему') ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
