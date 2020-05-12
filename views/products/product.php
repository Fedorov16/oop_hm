 <!-- include_once('../../config/constants.php'); -->
 <?php include_once('./views/templates/head.php');
    include_once('./views/templates/header.php');?>

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
</section>
<?php include_once('./views/templates/footer.php'); ?>