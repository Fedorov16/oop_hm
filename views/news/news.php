
<section>
    <div class="news">
        <?php foreach($news as $news){extract($news, EXTR_OVERWRITE) ?>
            <div class="article">
                <div class="article_header">
                </div>
                <div class="article_desc">
                    <h2 class="article_name"><a href="<?= SITE_ROOT . 'news/view/' . $news_id?>"><?= $news_name ?></a></h2>
                    <p class="article_body"> <?= $news_body ?> </p>
                    <p class="article_date">11 мая 16:40</p>
                </div>
            </div>
        <?php } ?>
    </div>
    </br><h2><a href="<?= SITE_ROOT . 'news/add'?>">Добавить Новость</a></h2>
</section>
<?php include_once('./views/templates/footer.php'); ?>
