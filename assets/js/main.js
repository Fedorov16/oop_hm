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

//удаление продукта
function deleteBook(id, site_root) {
	if (confirm('Вы действительно хотите удалить этот продукт?')) {
		window.location.href = `${site_root}products/delete/${id}`; 
	} 
}

//куки для корзины
function addToCart(id) {
	let cart = (getCookie('cart') === "") ? {} : JSON.parse(getCookie('cart'));
	if (cart.hasOwnProperty(id)) {
		cart[id]++;
	} else {
		cart[id] = 1;
	}
	setCookie('cart', JSON.stringify(cart), {
		'expires': 2*24*60*60,
		'path': '/'
	});
}

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
	let user_password2_val = user_password2.val();
	if((user_password2_val.length > 6) && (user_password2 === user_password2)){
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