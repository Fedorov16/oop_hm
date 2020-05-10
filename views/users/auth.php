<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../../assets/libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Форма авторизации</h1>
        <form action="../../models/users/auth.php" method="POST">
            <input type="text" name='login' id="login" class="form-control" placeholder="Логин"><br>
            <input type="password" name='password' id="password" class="form-control" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Авторизироваться</button><br><br>
        </form>
        <button class="btn btn-info"><a class="default" href="reg.php">Регистрация</a></button>
    </div>
    <script src="../../assets/libs/bootstrap/js/bootstrap.js"></script>
</body>
</html>
