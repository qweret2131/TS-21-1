<?php
// Указываем путь к текстовому файлу
$file_path = 'example.txt';

// Проверяем, существует ли файл
if (file_exists($file_path)) {
    // Читаем содержимое файла
    $content = file_get_contents($file_path);
} else {
    $content = "Файл не найден.";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Текстовый документ</title>
</head>
<body>
    <h1>Содержимое текстового документа</h1>
    <pre><?php echo htmlspecialchars($content); ?></pre>
</body>
</html>
