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
        <h1>Форма авторизации</h1>
        <form method="POST">
            <input type="text" name='user_login' id="user_login_auth" class="form-control" placeholder="Логин"
            value="<?= isset($_POST['user_login']) ? $_POST['user_login'] : ""; ?>"><br>
            <input type="password" name='user_pass' id="user_pass" class="form-control" placeholder="Введите пароль"><br>
            <button class="btn btn-success btn_boot" type="submit">Авторизироваться</button><br><br>
        </form>
        <button class="btn btn-secondary"><a class="default" href="<?=SITE_ROOT?>register">Регистрация</a></button>
    </section>
