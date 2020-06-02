
<section>
    <h1>Скидки</h1>
    <div class="products">
    <?php foreach($products as $product){extract($product, EXTR_OVERWRITE) ?>
        <div class="product">
            <div class="product_header">
                <img src="<?= IMG . "product_icon/dir" . $product_icon ?>" alt="Лого" width='210px' height="210px" >
                <a href="#"><img src="<?= IMG . 'heart.png'?>" alt="logo_heart" class="logo_heart"></a>
            </div>
            <div class="desc_product">
                <h2 class="name_product"><a href="<?= SITE_ROOT . 'products/view/' . $product_id?>"><?= $product_name ?></a></h2>
                <p class="category_product"> <?= $category_name ?> </p>
                <p class="date_product"><?php $date = new DateTime($product_date);?><?= $date->format('d.m.Y');?> в <?= $date->format('G:i')?> </p>
                <div class="for_order">
                    <s class="price_product"><?= $product_price ?></s>
                    <a href="javascript:void(0)" class="to_order_product" onclick="addToCart(<?= $product['product_id']; ?>)">В корзину</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<?php include_once('./views/templates/footer.php'); ?>