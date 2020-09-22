<div class="main_content">
  <section>
  <div class="slider">
      <div class="slider__wrapper">
        <div class="slider__item">
          <div style="height: 300px;"><img src="<?= IMG . "fon/clide_2.png" ?>"></div>
        </div>
        <div class="slider__item">
          <div style="height: 300px;"><img src="<?= IMG . "fon/clide1.png" ?>"></div>
        </div>
        <div class="slider__item">
          <div style="height: 300px;"><img src="<?= IMG . "fon/clide2.png" ?>"></div>
        </div>
        <div class="slider__item">
          <div style="height: 300px;"><img src="<?= IMG . "fon/clide3.png" ?>"></div>
        </div>
      </div>
      <a class="slider__control slider__control_left" href="#" role="button"></a>
      <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
    </div>

      
      <div class="products">
      <?php foreach($products as $product){extract($product, EXTR_OVERWRITE) ?>
          <div class="product">
              <div class="product_header">
                  <img src="<?= IMG . "product_icon/dir" . $product_icon ?>" alt="Лого" width='210px' height="210px" class="img_product">
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
                  <p class="date_product"><?php $date = new DateTime($product_date);?><?= $date->format('d.m.Y');?> в <?= $date->format('G:i')?> </p>
                  <div class="for_order">
                      <p class="price_product"><?= $product_price ?></p>
                      <a href="javascript:void(0)" class="to_order_product" onclick="addToCart(<?= $product['product_id']; ?>)">В корзину</a>
                  </div>
              </div>
          </div>
          <?php } ?>
      </div>
      <?php if(User::checkIfUserAuthorized()) : ;?>
        </br><h2><a href="<?= SITE_ROOT . 'products/add'?>">Добавить продукт</a></h2>
        </br><h2><a href="<?= SITE_ROOT . 'categories/list'?>">Просмотр категорий</a></h2>
      <?php endif;?>
  </section>
</div>
<script src="<?=JS . 'carusel.js'?>"></script>
<?php include_once('./views/templates/footer.php'); ?>