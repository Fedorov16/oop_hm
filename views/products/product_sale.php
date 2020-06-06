<script src="<?= JS; ?>sale.js" defer> </script>
<section>
    <h1>Товар дня</h1>
    <h1>До конца акции осталось</h1>
    <div class="timer-numbers" id="timer">
			<span class="hours">18</span>
			<span>:</span>
			<span class="minutes">20</span>
			<span>:</span>
			<span class="seconds">11</span>
	</div>
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
                    <s class="old_price_product"><?= $product_old_price ?></s>
                    <p class="price_product"><?= $product_price ?></p>
                    <a href="javascript:void(0)" class="to_order_product" onclick="addToCart(<?= $product['product_id']; ?>)">В корзину</a>
                </div>
            </div>
            <a class="btn btn-primary" onclick="deleteSale(<?= $product_id ?>, '<?= SITE_ROOT; ?>')">Удалить акцию</a>
        </div>
        <?php } ?>
    </div>
</section>
<?php include_once('./views/templates/footer.php'); ?>
