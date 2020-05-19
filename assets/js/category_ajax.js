'use strict';

$(document).ready(function(){

    $('button.category_btn_add').on('click', function(){
        let category_name = $('input.category_name').val();
        $.ajax({
            method: "POST",
            url: "../models/ajax.php",
            cache: false,
            data: {category_name:category_name},
            beforeSend: function(){
                $('button.category_btn_add').prop("disabled", true);
            },
            success: function(){
                $('button.category_btn_add').prop("disabled", false);
            }
            })
            .done(function() {
                console.log('here');
                $( ".category_item_new" ).append(category_name);
                $('input.category_name').val('');
            })
            
    })
});