<?php include_once('./views/templates/head.php');
    include_once('./views/templates/header.php');?>

    <section class="container">
        <h1>Форма регистрации</h1>
        <form action="../../models/users/reg.php" method="POST">
            <input type="text" name='login' id="login" class="form-control" placeholder="Логин"><br>
            <input type="text" name='name' id="name" class="form-control" placeholder="Ваше имя"><br>
            <input type="text" name='surname' id="surname" class="form-control" placeholder="Ваша Фамилия"><br>
            <input type="password" name='password' id="password" class="form-control" placeholder="Введите пароль"><br>
            <input type="password" name='password2' id="password2" class="form-control" placeholder="Повторите пароль"><br>
            <!-- <input type="date" name='birth' id="birth" class="form-control" placeholder="Введите дату рождения"><br> -->
            <input type="text" name='phone' id="phone" class="form-control" placeholder="Номер телефона"><br>
            <input type="text" name='email' id="email" class="form-control" placeholder="Email"><br>
            <button class="btn btn-success" type="submit">Зарегистрироваться</button><br><br>
        </form>
        <button class="btn btn-info"><a class="default" href="auth.php">Авторизация</a></button>
    </section>
    <script src="../../assets/libs/bootstrap/js/bootstrap.js"></script>

