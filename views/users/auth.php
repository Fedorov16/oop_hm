<?php include_once('./views/templates/head.php');
    include_once('./views/templates/header.php');?>
<section>
    <div class="container">
        <h1>Форма авторизации</h1>
        <form action="../../models/users/auth.php" method="POST">
            <input type="text" name='login' id="login" class="form-control" placeholder="Логин"><br>
            <input type="password" name='password' id="password" class="form-control" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Авторизироваться</button><br><br>
        </form>
        <button class="btn btn-info"><a class="default" href="reg.php">Регистрация</a></button>
    </div>
</section>
