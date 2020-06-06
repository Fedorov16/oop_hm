<?php extract($product, EXTR_OVERWRITE);?>
<?php 
    if(isset($errors) && !empty($errors)){  ?>
        <div>
            <?php foreach($errors as $error){?>
                <p><?= $error ?></p>
            <?php }?>
        </div>
    <?php } ?>

    <section>
    <h2><?= $product_name; ?></h2><br>
        <form method='POST'>
        <label for="product_price">Новая цена</label><input type="text" name="product_price" 
            value="<?= isset($_POST['product_price']) ? $_POST['product_price'] : $product['product_price'];?>"><br>
        <label for="product_old_price">Старая цена</label><input type="text" name="product_old_price" 
            value="<?= isset($_POST['product_old_price']) ? $_POST['product_old_price'] : $product['product_old_price'];?>"><br>
        <input type="submit" value="Отправить">
        </form>
    </section>
<?php// include_once('./views/templates/footer.php'); ?>