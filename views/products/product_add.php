<?php include_once('./views/templates/head.php');
    include_once('./views/templates/header.php');
    if(isset($errors) && !empty($errors)){  ?>
        <div>
            <?php foreach($errors as $error){?>
                <p><?= $error ?></p>
            <?php }?>
        </div>
    <?php } ?>

    <section>
        <form method='POST'>
            <label for="product_icon">Логотип(не настроено)</label><input type="file" name="product_icon"><br>
            <label for="product_name">Название</label><input type="text" name="product_name"><br>
            <label for="product_price">Цена</label><input type="text" name="product_price"><br>
            <label for="product_desc">Описание</label><textarea class="desc_area" name="product_desc"></textarea><br>
            
            <label for="product_category_id">Категория</label>
            <select name="product_category_id" id="product_category_id">
                <?php foreach($category_name as $category){ ?>
            <option value="<?=$category['category_id'] ?>">
            <?= $category['category_name'] ?></option>
                <?php } ?>
            </select><br>
            
            <input type="submit" value="Отправить">
        </form>
    </section>
<?php// include_once('./views/templates/footer.php'); ?>