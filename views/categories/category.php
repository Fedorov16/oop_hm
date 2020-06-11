<div class="main_content">
    <section class='category'>
        <div class="category_content">
            <h2>Недоделанный Ajax</h2>
            <h2 class='header_category'>Категории товаров</h2>
                <?php foreach($categories as $category){extract($category, EXTR_OVERWRITE) ?>
            <li class='category_item'><a href="#"> <?= $category_name ?></a></li>
                <?php } ?>
            <li class='category_item category_item_new'><a href="#"></a></li><br>
            <div class="btns">
                <button class="category_btn_review">Добавить категорию</button>
                <input type='text' class="category_name display_none" name ='category_name'><br>
                <button type='submit' class="category_btn_add display_none">Добавить</button>
            </div>
        </div>
    </section>
</div>