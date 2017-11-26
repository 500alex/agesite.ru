function showCart(cart) {
    $('#cart .modal-body').html(cart);
    $('#cart').modal();
}

function getCart() {
    $.ajax({
        url:'/web/cart/show',
        type:'GET',
        success:function (res) {
            if (!res) alert ('С корзиной что то не так!');
            showCart(res);
        },
        error:function () {
            alert ('Не удалось сформировать корзину!');
        }

    });
    return false;
}


$('#cart .modal-body').on('click','.del-item',function () {
        var id = $(this).data('id');
    $.ajax({
        url:'/web/cart/del-item',
        data:{id:id},
        type:'GET',
        success:function (res) {
            if (!res) alert ('Ошибка');
            // console.log(res);
            showCart(res);
        },
        error:function () {
            alert ('Error удаления товара');
        }
    });
});




function clearCart() {
    $.ajax({
        url:'/web/cart/clear',
        type:'GET',
        success:function (res) {
            if (!res) alert ('Ошибка');
            showCart(res);
        },
        error:function () {
            alert ('Error!');
        }
    });
}

$('.add-to-cart').on('click',function (e) {
    e.preventDefault();
    var id = $(this).data('id'),
        qty = $('#qty').val();
    $.ajax({
        url:'/web/cart/add',
        data:{id:id,qty:qty},
        type:'GET',
        success:function (res) {
            if (!res) alert ('Ошибка');
            // console.log(res);
            showCart(res);
        },
        error:function (res) {
            alert ('Ошибка добавления товара');
            //console.log(res);
        }
    });
});