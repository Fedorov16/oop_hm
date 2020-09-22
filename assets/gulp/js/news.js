'use strict';

let article_body = $('.article_body'),
	article_body_val = $('.article_body').val(),
	article_edit = $('#article_edit'),
	article_body_input = $('.article_body_input');

	for(let i=0; i<article_edit.length; i++){
		article_edit.on('click', function func(){
		let input = document.createElement('input');
		input.value = article_body_val.innerHTML;
		this.innerHTML = '';
		this.appendChild(input);

		let edit = this;
		input.addEventListener('blur', function(){
			edit.innerHTML = this.value;
			edit.addEventListener('click', func);
		});
		this.removeEventListener('click', func);
	});
	};





// let user_login = $('#user_login');
// user_login.on("focusout", () =>{
// 	let user_login_val = user_login.val();
// 	// console.log(user_login);
// 	$.ajax({
// 		url: `./ajax/check_if_login_exists?user_login=${user_login_val}`,
// 		success: function(response){
// 			if(response || (user_login_val =='')){
// 				user_login.addClass('outline_red');
// 				user_login.removeClass('outline_green');
// 			}
// 			else if(user_login_val.length < 5){
// 				user_login.addClass('outline_red');
// 				user_login.removeClass('outline_green');
// 			}
// 			else{
// 				user_login.addClass('outline_green');
// 				user_login.removeClass('outline_red');
// 			}
// 		},
// 		error:function(error){
// 			console.log(error);
// 		}
// 	})
// });