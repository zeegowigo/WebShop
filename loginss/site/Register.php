<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>

<body>
<form id="register" action="reg.php" method="post">
    <h1>Форма входа</h1>
    <fieldset id="inputs">
        <input name="username" type="text" placeholder="Логин" autofocus required>
        <input name="email" type="email" placeholder="email" autofocus required>
        <input name="password" type="password" placeholder="Пароль" required>
        <input name="password_repeat" type="password" placeholder="Повторите пароль" required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="Регистрация">
        <a href="">Забыли пароль?</a><a href="Login.php">Войти</a>
    </fieldset>
</form>
</body>
</html>

