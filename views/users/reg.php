<?php include_once('./views/templates/head.php');
    include_once('./views/templates/header.php');?>
    <? if (isset($errors) && !empty($errors)): ?>
		<div> 
			<? foreach ($errors as $error): ?>
				<p class="errors"> <?php $error; ?> </p>
			<? endforeach; ?>
		</div>
	<? endif; ?>

    <section class="container">
        <h1>Форма регистрации</h1>
        <form method="POST">
            <input type="text" name='user_login' id="user_login" class="form-control user_login" placeholder="Логин"
            value="<?= isset($_POST['user_login']) ? $_POST['user_login'] : ""; ?>"><br>
            <div type="text" id="login_helper"></div>
            <input type="text" name='user_name' id="user_name" class="form-control" placeholder="Ваше имя"
            value="<?= isset($_POST['user_name']) ? $_POST['user_name'] : ""; ?>"><br>
            <input type="text" name='user_surname' id="user_surname" class="form-control" placeholder="Ваша Фамилия"
            value="<?= isset($_POST['user_surname']) ? $_POST['user_surname'] : ""; ?>"><br>
            <input type="password" name='user_pass' id="user_password" class="form-control" placeholder="Введите пароль"
            value="<?= isset($_POST['user_pass']) ? $_POST['user_pass'] : ""; ?>"><br>
            <input type="password" name='user_pass2' id="user_password2" class="form-control" placeholder="Повторите пароль"
            value="<?= isset($_POST['user_pass2']) ? $_POST['user_pass2'] : ""; ?>"><br>
            <input type="tel" name='user_phone' id="user_phone" class="form-control" placeholder="Номер телефона"
            value="<?= isset($_POST['user_phone']) ? $_POST['user_phone'] : ""; ?>"><br>
            <input type="text" name='user_email' id="user_email" class="form-control" placeholder="Email"
            value="<?= isset($_POST['user_email']) ? $_POST['user_email'] : ""; ?>"><br>
            <button class="btn btn-success" type="submit">Зарегистрироваться</button><br><br>
        </form>
        <button class="btn btn-info"><a class="default" href="<?=SITE_ROOT?>auth">Авторизация</a></button>
    </section>
    <script src="<?=SITE_ROOT?>assets/libs/bootstrap/js/bootstrap.js"></script>