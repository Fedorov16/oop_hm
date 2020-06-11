<div class="main_content">
    <section>
        <div class="news">
            <?php foreach($news as $news){extract($news, EXTR_OVERWRITE) ?>
                <div class="article">
                    <div class="article_header">
                    </div>
                    <div class="article_desc">
                        <img src="<?= IMG . "news_icon/dir" . $news_icon ?>" alt="Лого" width='210px' height="210px" >
                        <h2 class="article_name"><a href="<?= SITE_ROOT . 'news/view/' . $news_id?>"><?= $news_name ?></a></h2>
                        <p class="article_body"> <?= $news_body ?> </p>
                        <button id="article_edit">Редактировать</button>
                        <div class="article_body_input" role="textbox" aria-multiline="true"></div>
                        <p class="article_date"><?php $date = new DateTime($news_date);?><?= $date->format('d.m.Y');?> в <?= $date->format('G:i')?> </p>
                    </div>
                </div>
            <?php } ?>
        </div>
        </br><h2><a href="<?= SITE_ROOT . 'news/add'?>">Добавить Новость</a></h2>
    </section>
</div>
<?php include_once('./views/templates/footer.php'); ?>