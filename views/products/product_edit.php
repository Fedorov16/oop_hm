<?php include_once('./views/templates/head.php');
    include_once('./views/templates/header.php');
    extract($product, EXTR_OVERWRITE);
    if(isset($errors) && !empty($errors)){
    ?>
    
    <section>
    <div>
    <?php foreach($errors as $error){?>
        <p><?= $error ?></p>
    <?php }?>
    </div>
    <?php } ?>
        <form action="" method='POST'>
            <label for="product_name">Название</label><input type="text" name="product_text" value="<?= $product_name?>"><br>
            <label for="product_price">Цена</label><input type="text" name="product_price" value="<?= $product_price?>"><br>
            <label for="category_name">Категория</label>
            <!-- переписать через select. Возможно придется делать отдельные запросы для категорий
            т.е. еще много всего -->
            <select name="category_name" id=""></select>
            <input type="text" name="category_name" value="<?=$category_name ?>"><br>
            <label for="product_desc">Описание</label><textarea class="desc_area" name="product_desc"><?= $product_desc?></textarea><br>
            <input type="submit" value="Отправить">
        </form>
    </section>
<?php //include_once('./views/templates/footer.php'); ?>