<?php 
    if(isset($errors) && !empty($errors)){  ?>
        <div>
            <?php foreach($errors as $error){?>
                <p><?= $error ?></p>
            <?php }?>
        </div>
    <?php } ?>

<div class="main_content">
    <section>
        <form method='POST' enctype="multipart/form-data">
            <label for="news_icon">Изображение</label><input type="file" name="news_icon"><br>
            <label for="news_name">Заголовок</label><input type="text" name="news_name"><br>
            <label for="news_body">Описание</label><textarea class="news_body" name="news_body"></textarea><br>
            
            <input type="submit" value="Отправить">
        </form>
    </section>
</div>
<?php include_once('./views/templates/footer.php'); ?>