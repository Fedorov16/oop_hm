'use strict';
// кнопки категорий
$('button.category_btn_review').on('click', function(){
    $('.category_btn_review').addClass('display_none');
    $('.category_name').removeClass('display_none');
    $('.category_btn_add').removeClass('display_none');
})
//просмотр категорий

// $(document).ready(function(){

//     let category_name = $('input.category_name').val();
//     $.ajax({
//         method: "POST",
//         url: "../models/ajax.php",
//         cache: false,
//         data: {category_name:category_name},
//         beforeSend: function(){
//             $('button.category_btn_add').prop("disabled", true);
//         },
//         success: function(){
//             $('button.category_btn_add').prop("disabled", false);
//         }
//         })
//         .done(function() {
//             console.log('here');
//             // $( ".category_item_new" ).append(category_name);
//             $('input.category_name').val('');
//         }) 
//     })

//добавление категории
$(document).ready(function(){

    $('button.category_btn_add').on('click', function(){
        let category_name_val = $('input.category_name').val();
        $.ajax({
            url: `./categories/add?category_name=${category_name_val}`,
            beforeSend: function(){
                $('button.category_btn_add').prop("disabled", true);
            },
            success: function(){
                $('button.category_btn_add').prop("disabled", false);
            }
            })
            .done(function() {
                console.log('here');
                // $( ".category_item_new" ).append(category_name);
                $('input.category_name').val('');
            })
            
    })
});