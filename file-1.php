<?php
// Указываем путь к текстовому файлу
$file_path = 'example.txt';
$message = "";

// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['content'])) {
        // Сохраняем новый контент в файл
        file_put_contents($file_path, $_POST['content']);
        $message = "Файл успешно сохранён.";
    }
}

// Читаем содержимое файла
$content = file_exists($file_path) ? file_get_contents($file_path) : "Файл не найден.";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование файла</title>
</head>
<body>
    <h1>Редактирование текстового документа</h1>

    <?php if (!empty($message)) echo "<p style='color: green;'>$message</p>"; ?>

    <form method="post">
        <textarea name="content" rows="10" cols="50"><?php echo htmlspecialchars($content); ?></textarea><br>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>
