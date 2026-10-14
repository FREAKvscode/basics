<?php

$error  = '';
$result = '';

if (!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];

    $srcFileName = $file['name'];
    $newFilePath = __DIR__ . '/uploads/' . $srcFileName;

    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $maxSize = 8 * 1024 * 1024;

    $extension = strtolower(pathinfo($srcFileName, PATHINFO_EXTENSION));

    if ($file['error'] === UPLOAD_ERR_INI_SIZE) {
        $error = 'Файл превышает лимит upload_max_filesize из php.ini';
    } elseif ($file['error'] !== UPLOAD_ERR_OK) {
        $error = 'Ошибка при загрузке файла. Код: ' . $file['error'];
    } elseif (!in_array($extension, $allowedExtensions, true)) {
        $error = 'Загрузка файлов с таким расширением запрещена!';
    } elseif ($file['size'] > $maxSize) {
        $error = 'Файл слишком большой. Максимум 8 Мб.';
    } elseif (!getimagesize($file['tmp_name'])) {
        $error = 'Файл не является изображением';
    } else {
        [$width, $height] = getimagesize($file['tmp_name']);

        if ($width > 1280 || $height > 720) {
            $error = "Изображение слишком большое: {$width}×{$height}. Максимум 1280×720.";
        } elseif (file_exists($newFilePath)) {
            $error = 'Файл с таким именем уже существует';
        } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
            $error = 'Ошибка при загрузке файла';
        } else {
            $result = 'http://localhost:8000/uploads/' . $srcFileName;
        }
    }
}
?>

<html>
<head>
    <title>Загрузка файла</title>
</head>
<body>
<?php if ($error !== ''): ?>
    <span style="color: red;"><?= htmlspecialchars($error) ?></span>
<?php elseif ($result !== ''): ?>
    <a href="<?= htmlspecialchars($result) ?>"><?= htmlspecialchars($result) ?></a>
<?php endif; ?>
<br>
<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input type="submit">
</form>
</body>
</html>


