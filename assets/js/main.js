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