<?php include_once('./views/templates/head.php');
    include_once('./views/templates/header.php');?>

    <section class="container">
        <h1>Форма регистрации</h1>
        <form method="POST">
            <input type="text" name='user_login' id="user_login" class="form-control" placeholder="Логин"><br>
            <input type="text" name='user_name' id="user_name" class="form-control" placeholder="Ваше имя"><br>
            <input type="text" name='user_surname' id="user_surname" class="form-control" placeholder="Ваша Фамилия"><br>
            <input type="password" name='user_pass' id="user_password" class="form-control" placeholder="Введите пароль"><br>
            <input type="password" name='user_pass2' id="user_password2" class="form-control" placeholder="Повторите пароль"><br>
            <input type="text" name='user_phone' id="user_phone" class="form-control" placeholder="Номер телефона"><br>
            <input type="text" name='user_email' id="user_email" class="form-control" placeholder="Email"><br>
            <button class="btn btn-success" type="submit">Зарегистрироваться</button><br><br>
        </form>
        <button class="btn btn-info"><a class="default" href="<?=SITE_ROOT?>auth">Авторизация</a></button>
    </section>
    <script src="<?=SITE_ROOT?>assets/libs/bootstrap/js/bootstrap.js"></script>

