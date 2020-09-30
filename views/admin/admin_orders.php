<div class="main_content">
    <section>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Дата заказа</th>
                    <th scope="col">ФИО</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Почта</th>
                    <th scope="col">Продукт[ID](количество->цена)</th>
                    <th scope="col">Общая сумма</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($allOrders as $order){extract($order, EXTR_OVERWRITE) ?>
                <tr>
                    <td class="t_row"><?= $order_date?></td>
                    <?php   $infoUser = preg_split('/,/', $order_info); ?>
                    <td class="t_row"><?= $user_name? $user_name: $infoUser[0] ?></td>
                    <td class="t_row"><?= $user_phone? $user_phone: $infoUser[1] ?></td>
                    <td class="t_row"><?= $user_email? $user_email: $infoUser[2] ?></td>
                    <td class="t_row">
                    <?php
                        $infoProduct = preg_split('/,/', $names);
                        $infoCount = preg_split('/,/', $count);
                        $infoPrice = preg_split('/,/', $prices);
                        $infoID = preg_split('/,/', $ids);
                        $i=0;
                       while(isset($infoProduct[$i])){
                                ?>
                     <?= $infoProduct[$i] ?>[<?=$infoID[$i]?>](<?= $infoCount[$i] ?>-><?= $infoPrice[$i] ?>)<br>
                        <?php $i++; } ?>
                    </td>
                    <td class="t_row"><?= $sum?></td>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
       
    </section>
</div>

