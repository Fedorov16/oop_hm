<?php
 include_once('./views/templates/head.php');
 include_once('./views/templates/header.php');?>

<section>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Категория</th>
                <th>Продукт</th>
                <th>Описание</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Лого</th>
            </tr>            
        </thead>
        <tbody>
            <?php foreach($categories as $category){extract($category, EXTR_OVERWRITE) ?>
            <tr>
                <td><?= $category_id ?></td>
                <td><a href="<?= SITE_ROOT . 'categories/view/' . $category_id?>"><?= $category_name ?></a></td>
                <td><?= $product_name ?></td>
                <td><?= $product_desc ?></td>
                <td><?= $product_price ?></td>
                <td><?= $product_count ?></td>
                <td><?= $product_icon ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</section>