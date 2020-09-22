
//удаление продукта
function deleteProduct(id, site_root) {
	if (confirm('Вы действительно хотите удалить этот продукт?')) {
		window.location.href = `${site_root}products/delete/${id}`; 
	} 
}
//удаление акции
function deleteSale(id, site_root) {
	if (confirm('Вы действительно хотите удалить из акции этот продукт?')) {
		window.location.href = `${site_root}products/deleteSale/${id}`; 
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

function deleteCart() {

	setCookie('cart', "", {
    	expires: -1,
		path: '/',
	});
	
}

// отображение продукта

	$(".img_product").click(function(){
	  	var img = $(this);
		var src = img.attr('src');
		$("body").append("<div class='popup'>"+
						 "<div class='popup_bg'></div>"+
						 "<img src='"+src+"' class='popup_img' />"+
						 "</div>"); 
		$(".popup").fadeIn(800);
		$(".popup_bg").click(function(){	   
			$(".popup").fadeOut(800);
			setTimeout(function() {
			  $(".popup").remove();
			}, 800);
		});
	});