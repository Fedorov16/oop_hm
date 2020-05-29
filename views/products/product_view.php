<?php extract($product, EXTR_OVERWRITE);?>
<section>
    
    <div class="product_view">
    <h2><?= $product_name; ?></h2><br>
        <div class="product_view_main">
        <?php ?>
            <div class="img_slider">
                <img src="<?= IMG . "product_icon/dir" . $product_icon ?>" alt="" class='img_slider_img'>
            </div>
            <p class="product_view_desc"><?= $product_desc?></p>
            <a href="<?= SITE_ROOT . 'products/edit/' . $product_id ?>" class="btn btn-primary">Редактировать</a>
            <a class="btn btn-primary" onclick="deleteBook(<?= $product_id ?>, '<?= SITE_ROOT; ?>')">Удалить продукт</a>
        </div>
        <div class="product_right_bar">
            <p class="product_right_price">Цена <?= $product_price ?> руб</p> 
            <p class="product_right_category">Категория: <?= $category_name ?> </p>
        </div>
    </div>
</section>
<?php// include_once('./views/templates/footer.php'); ?>