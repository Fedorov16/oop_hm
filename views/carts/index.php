    <?php if(!isset($cart)){?>
<div class="main_content">
    <section>
    <h3>Ваша корзина пуста</h3>
    <a class="h3" href="<?=SITE_ROOT?>products/list">Хочу что-нибудь выбрать!</a>
    </section>
</div>
    <?php }else{ ?>
<div class="main_content">
    <section>
        <h2>Список выбранных товаров</h2>
        
            <form method="POST">
                <?php if (!(User::checkIfUserAuthorized())) : ;?>
                    <label for='user_name'>ФИО</label><input type="text" class="form-control" name="user_name"
                    value="<?= isset($_POST['user_name']) ? $_POST['user_name'] : ""; ?>">
                    <label for='user_phone'>Телефон</label><input type="text" class="form-control" name="user_phone" 
                    value="<?= isset($_POST['user_phone']) ? $_POST['user_phone']: ""; ?>">
                    <label for='user_email'>Email</label><input type="email" class="form-control" name="user_email" 
                    value="<?= isset($_POST['user_email']) ? $_POST['user_email']: ""; ?>">
                <?php endif; ?>
                <div class="products">
                    <?php foreach($productList as $product){extract($product, EXTR_OVERWRITE) ?>
                        <div class="product">
                            <div class="product_header">
                                <img src="<?= IMG . "product_icon/dir" . $product_icon ?>" alt="Лого" width='210px' height="210px">
                            </div><br>
                            <div class="desc_product">
                                <h2 class="name_product"><?= $product_name ?></h2>
                                <p class="price_product"><?= $product_price?> x <?= $cart[$product['product_id']];?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <br><h4 class="price_all">Итого за выбранные товары <?= $price_all ?> руб.</h4>
                <button type="submit" name='products_to_orders' class="btn btn-success">Заказать</button>
                <a href="<?= SITE_ROOT . 'cart'?>" class="from_order_product" onclick="deleteCart(<?= $product['product_id']; ?>)">Очистить корзину</a>
            </form>
    </section>
</div>
    <?php } ?>
<?php include_once('./views/templates/footer.php'); ?>