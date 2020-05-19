'use strict';

// кнопки категорий
$('button.category_btn_review').on('click', function(){
    $('.category_btn_review').addClass('display_none');
    $('.category_name').removeClass('display_none');
    $('.category_btn_add').removeClass('display_none');
})

//выпадающее меню навигатора

$('.li_dropdown').on('click', function(){
    $('.category_footer').toggleClass('display_none');
});