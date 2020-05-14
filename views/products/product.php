 <?php include_once('./views/templates/head.php');
    include_once('./views/templates/header.php');?>

<section>
    <!-- <img src="<?= IMG ?>fon/img1.jpg" alt="fon"> -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Категория</th>
                <th>Оценка</th>
                <th>Лого</th>
            </tr>            
        </thead>
        <tbody>
            <?php foreach($products as $product){extract($product, EXTR_OVERWRITE) ?>
            <tr>
                <td><?= $product_id ?></td>
                <td><?= $product_name ?></td>
                <td><?= $product_desc ?></td>
                <td><?= $product_price ?></td>
                <td><?= $product_count ?></td>
                <td><?= $category_name ?></td>
                <td><?= $product_mark ?></td>
                <td><?= $product_icon ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="products">
    <?php foreach($products as $product){extract($product, EXTR_OVERWRITE) ?>
        <div class="product">
            <div class="product_header">
                <a href="#"><img src="../../assets/img/like1.svg" alt="logo_heart" class="logo_heart"></a>
            </div>
            <div class="desc_product">
                <h2 class="name_product"><a href="<?= SITE_ROOT . 'products/view/' . $product_id?>"><?= $product_name ?></a></h2>
                <p class="category_product"> <?= $category_name ?> </p>
                <p class="date_product">11 мая 16:40</p>
                <div class="for_order">
                    <p class="price_product"><?= $product_price ?></p>
                    <p class="to_order_product"><a href="#">В корзину</a></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    
</section>
<?php include_once('./views/templates/footer.php'); ?>