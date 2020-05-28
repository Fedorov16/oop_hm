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
        <form method='POST' enctype="multipart/form-data">
            <label for="product_icon">Логотип</label><input type="file" name="product_icon"><br>
            <label for="product_name">Название</label><input type="text" name="product_name" 
            value="<?= isset($_POST['product_name']) ? $_POST['product_name'] : $product['product_name']; ?>"><br>
            <label for="product_price">Цена</label><input type="text" name="product_price" 
            value="<?= isset($_POST['product_price']) ? $_POST['product_price'] : $product['product_price'];?>"><br>
            <label for="product_category_id">Категория</label>
            <select name="product_category_id" id="product_category_id">
                <?php foreach($category_name as $category){ ?>
            <option value="<?=$category['category_id'] ?>"
            <?= ($product['product_category_id'] == $category['category_id']) ? 'selected': '';?> >
            <?= $category['category_name'] ?></option>
                <?php } ?>
            </select><br>
            <label for="product_desc">Описание</label><textarea class="desc_area" name="product_desc"><?= $product['product_desc']?></textarea><br>
            <input type="submit" value="Отправить">
        </form>
    </section>
<?php// include_once('./views/templates/footer.php'); ?>