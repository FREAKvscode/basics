<?php
$login = $_GET['login'] ?? '';
$password = $_GET['password'] ?? '';

if ($login === 'admin' && $password === 'Pa$$w0rd') {
    $authResult = 'Авторизация прошла успешно';
} else if($login !== 'admin') {
    $authResult = 'Логин неверный';
} else {
    $authResult = 'Пароль неверный';
}
?>


<html>
<head>
    <title>Результат авторизации</title>
</head>
<body>
<?= $authResult ?>
</body>
</html>



