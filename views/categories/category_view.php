<div class="main_content">
    <section>
            <h2>Продукты категории</h2>
            <h2><?=$category['category_name']?></h2>
        <div class="products">
        <?php foreach($products as $product){extract($product, EXTR_OVERWRITE) ?>
            <div class="product">
                <div class="product_header">
                  <img src="<?= IMG . "product_icon/dir" . $product_icon ?>" alt="Лого" width='210px' height="210px" >
                <?php if(isset($wishList)){?>
                  <a href="<?= SITE_ROOT . 'products/wishAdd/' . $product_id?>"><img src="<?= IMG . 'heart.svg'?>" alt="logo_heart" class="logo_heart"></a>
                  <?php foreach($wishList as $wish){extract($wish, EXTR_OVERWRITE) ?>
                    <?php if($product_id === $wish_product_id){ ?>
                      <a href="<?= SITE_ROOT . 'products/wishAdd/' . $product_id?>"><img src="<?= IMG . 'heartFill.svg'?>" alt="logo_heart" class="logo_heart"></a>
                      <?php } } ?>
                    <?php } ?>
              </div>
                <div class="desc_product">
                    <h2 class="name_product"><a href="<?= SITE_ROOT . 'products/view/' . $product_id?>"><?= $product_name ?></a></h2>
                    <p class="category_product"> <?= $category_name ?> </p>
                    <p class="date_product">11 мая 16:40</p>
                    <div class="for_order">
                        <p class="price_product"><?= $product_price ?></p>
                        <a href="javascript:void(0)" class="to_order_product" onclick="addToCart(<?= $product['product_id']; ?>)">В корзину</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
</div>
<?php include_once('./views/templates/footer.php'); ?>
