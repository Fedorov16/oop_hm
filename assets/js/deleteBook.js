function deleteBook(id, site_root){
    if(confirm("Удалить текущую запись?")){

        window.location.href = `${site_root}product/delete/${id}`;
    } 
}
function addToCard(id){

    let cart = (getCookie('cart') === '') ? {} : JSON.parse(getCookie('cart'));
    if (cart.hasOwnProperty(id)){
        cart[id]++;
    } else{
        cart[id] = 1;
    }
    setCookie('cart', JSON.stringify(cart), {
        'expires': 2*24*60*60,
        'path': '/'
    });
}