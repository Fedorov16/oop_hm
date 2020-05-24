<?php include_once('./views/templates/head.php');
    include_once('./views/templates/header.php');?>
   <? if (isset($errors) && !empty($errors)): ?>
		<div> 
			<? foreach ($errors as $error): ?>
				<p class="errors"> <?php $error; ?> </p>
			<? endforeach; ?>
		</div>
	<? endif; ?>
<section>
    <div class="container">
        <h1>Форма авторизации</h1>
        <form method="POST">
            <input type="text" name='user_login' id="user_login" class="form-control" placeholder="Логин"
            value="<?= isset($_POST['user_login']) ? $_POST['user_login'] : ""; ?>"><br>
            <input type="password" name='user_pass' id="user_pass" class="form-control" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Авторизироваться</button><br><br>
        </form>
        <button class="btn btn-info"><a class="default" href="<?=SITE_ROOT?>register">Регистрация</a></button>
    </div>
</section>
