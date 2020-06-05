'use strict';

//Подключаем js
function include(url) {
	let script = document.createElement('script');
	script.src = url;
	document.getElementsByTagName('head')[0].appendChild(script);
}
include('http://localhost/oop_hm/assets/js/category.js');
include('http://localhost/oop_hm/assets/js/products.js');
include('http://localhost/oop_hm/assets/js/news.js');
include('http://localhost/oop_hm/assets/js/sale.js');

//выпадающее меню навигатора

$('.li_dropdown').on('click', function(){
    $('.category_footer').toggleClass('display_none');
});


//Регулярка по регистрации
let user_login = $('#user_login'),
	user_phone = $('#user_phone'),
	user_password = $('#user_password'),
	user_password2 = $('#user_password2'),
	reg = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/;

user_login.on("focusout", () =>{
	let user_login_val = user_login.val();
	// console.log(user_login);
	$.ajax({
		url: `./ajax/check_if_login_exists?user_login=${user_login_val}`,
		success: function(response){
			if(response || (user_login_val =='')){
				user_login.addClass('outline_red');
				user_login.removeClass('outline_green');
			}
			else if(user_login_val.length < 5){
				user_login.addClass('outline_red');
				user_login.removeClass('outline_green');
			}
			else{
				user_login.addClass('outline_green');
				user_login.removeClass('outline_red');
			}
		},
		error:function(error){
			console.log(error);
		}
	})
});
user_password2.on("focusout", () =>{
	let user_password_val = user_password.val();
	let user_password2_val = user_password2.val();
	if((user_password2_val.length > 6) && (user_password_val === user_password2_val)){
		console.log('да');
		user_password.addClass('outline_green');
		user_password2.addClass('outline_green');
		user_password.removeClass('outline_red');
		user_password2.removeClass('outline_red');
	}
	else{
		user_password.addClass('outline_red');
		user_password2.addClass('outline_red');
		user_password.removeClass('outline_green');
		user_password2.removeClass('outline_green');
	}
});

user_phone.on("focusout", () =>{
	let user_phone_val = user_phone.val();
	if(reg.exec(user_phone_val)){
		user_phone.addClass('outline_green');
		user_phone.removeClass('outline_red');
	}
	else{
		user_phone.addClass('outline_red');
		user_phone.removeClass('outline_green');
	}
});






