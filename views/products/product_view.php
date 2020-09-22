<?php extract($product, EXTR_OVERWRITE);?>

<div class="main_content"> 
    <section>
        <div class="product_view">
        <h2 class='product_name'><?= $product_name; ?></h2><br>
            <div class="product_view_main">
                <?php ?>
                <div class="parent-block">
                    <div class="img_slider">
                        <img src="<?= IMG . "product_icon/dir" . $product_icon ?>" alt="" class='img_slider_img'>
                    </div>
                    <div class="product_right_bar">
                        <p class="product_right_category">Категория: <?= $category_name ?> </p>
                        <p class="product_right_price">Цена <?= $product_price ?> руб</p> 
                        <a href="javascript:void(0)" class="to_order_product to_order_product_backet" onclick="addToCart(<?= $product['product_id']; ?>)">В корзину</a>
                    </div>
                </div>
                <div class="product_view_box">
                    <h4>Описание</h4>
                    <hr>
                    <p class="product_view_desc"><?= $product_desc?></p>
                </div>
                <?php if(User::checkIfUserAuthorized()) : ;?>
                <a href="<?= SITE_ROOT . 'products/edit/' . $product_id ?>" class="btn btn-primary">Редактировать</a>
                <a href="<?= SITE_ROOT . 'products/addSale/' . $product_id ?>" class="btn btn-primary">Добавить акцию</a>
                <a class="btn btn-primary" onclick="deleteProduct(<?= $product_id ?>, '<?= SITE_ROOT; ?>')">Удалить продукт</a>
                <?php endif?>
            </div>   
        </div>
    </section>
</div>
<?php include_once('./views/templates/footer.php'); ?>