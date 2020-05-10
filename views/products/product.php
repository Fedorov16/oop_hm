<?php include_once('../../config/constants.php');
    include_once('../templates/head.php');
    include_once('../templates/header.php');?>

<section>
    <img src="<?= IMG ?>fon/img1.jpg" alt="fon">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Категория</th>
                <th>Продавец</th>
                <th>Оценка</th>
                <th>Лого</th>
            </tr>            
        </thead>
        <tbody>
            <?php foreach($arr['products'] as $product){extract($product, EXTR_OVERWRITE) ?>
            <tr>
                <td><?= $product_id ?></td>
                <td><?= $product_name ?></td>
                <td><?= $product_desc ?></td>
                <td><?= $product_price ?></td>
                <td><?= $product_count ?></td>
                <td><?= $category_name ?></td>
                <td><?= $seller_name ?></td>
                <td><?= $product_mark ?></td>
                <td><?= $product_icon ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <h3><a href="../users/reg.php">Перейти на страницу Регистрации</a></h3>
</section>
<?php include_once('../templates/footer.php'); ?>