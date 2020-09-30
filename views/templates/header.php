<body>
    <header>
        <div class="top_header">
            <div class="logo_header">
                 <a href="<?= ROOT ?>products/list"><img src="<?= IMG ?>logo.png" alt="лого"></a>
                 <a href="<?= ROOT ?>products/list" class="logo_header_name">HANDMADE ПО-НИЖЕГОРОДСКИ</a>
            </div>
            <div class="search_header">
                <form method="POST" action="<?= ROOT ?>products/found" class="search_form">
                <input type="text" placeholder="Поиск.." class="search_input" name="search"><!--
                --><button type="submit"><i class="fa fa-search search_button"></i></button>
                </form>
            </div>
            <div class="basket_header">
                <?php if(User::checkIfUserAuthorized()) : ;?>
                <div class="wish_basket">
                     <a href="<?= ROOT ?>products/wish" class="header_icon"><img src="<?=IMG . 'wish2.png'?>" class='icon_like'><p class='header_icon_cart'>Like</p></a>
                </div>
                <?php endif; ?>
                <div class="basket_basket">
                     <a href="<?=SITE_ROOT .'cart'?>" class="header_icon"> <img src="<?=IMG . 'cart.png'?>" class='icon_cart'> <p class='header_icon_cart'>Корзина</p>    </a>
                </div>
            </div>
            <div class="logReg">
             <?php if(!(User::checkIfUserAuthorized())) : ;?>
                <li class="li_inline-block"><a class="logReg_btn" href="<?=SITE_ROOT?>auth">Вход</a></li>
                <?php else : ;?>
                <li class="li_inline-block"><a class="logReg_btn" href="<?=SITE_ROOT?>out">Выход</a></li>
                <?php endif; ?> 
            </div>
        </div>

        <div class="footer_header">
             <ul class="category_top">
                 <li class="li_inline-block li_dropdown"><a href="#" class="category_top_text">Каталог товаров</a>
                    <ul class="category_footer display_none">
                    <?php foreach($categories as $category){extract($category, EXTR_OVERWRITE) ?>
                        <li class="li_block standart-border"><a href="<?=SITE_ROOT . 'categories/view/' . $category_id?>" class="category_footer_text"><?=$category_name?></a></li>
                    <?php } ?>    
                    </ul>
                </li>
                 <li class="li_inline-block"><a href="<?=SITE_ROOT . 'products/sale'?>" class="category_top_text">Акции</a></li>
                 <?php if(User::checkIfUserIsAdmin()) : ;?>
                 <li class="li_inline-block li_dropdown_admin"><a href="#" class="category_top_text">Admin</a>
                    <ul class="category_footer_admin display_none">
                        <li class="li_block standart-border"><a href="<?= SITE_ROOT . 'admin/users'?>" class="category_footer_text">USERS</a></li>
                        <li class="li_block standart-border"><a href="<?= SITE_ROOT . 'admin/orders'?>" class="category_footer_text">ORDERS</a></li>
                    </ul>
                 </li>
                 <?php endif; ?> 
            </ul>
             
            
            
        </div>
     </header>
