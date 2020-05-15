<?php include_once('./views/templates/head.php');
include_once('./views/templates/header.php');
extract($category, EXTR_OVERWRITE);?>
<section>
<h2><?= $category_name; ?></h2>
<!-- TODO: верстка -->
<div class="category_view">
    <div class="product_view_main">
    <?php ?>
        <div class="img_slider">
            <img src="../../assets/img/product_icon/scarf.jpg" alt="" class='img_slider_img'>
        </div>
        <p class="product_view_name"><?= $product_name?></p>
        <p class="product_view_desc"><?= $product_desc?></p>
        
    </div>
    <div class="product_right_bar">
        <p class="product_right_price">Цена <?= $product_price ?> руб</p> 
    </div>
    <a href="<?= SITE_ROOT . 'categories/edit/' . $category_id ?>" class="btn btn-primary">Редактировать</a>
</div>
</section>
