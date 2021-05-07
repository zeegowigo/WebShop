<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Вход</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>

<body>
<form id="login" method="post" action="log.php">
    <h1>Форма входа</h1>
    <fieldset id="inputs">
        <input id="username" name="username" type="text" placeholder="Логин" autofocus required>
        <input id="password" name="password" type="password" placeholder="Пароль" required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="ВОЙТИ">
        <a href="">Забыли пароль?</a><a href="Register.php">Регистрация</a>
    </fieldset>
</form>
</body>
</html>

