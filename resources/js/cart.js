$(".heart-icon").click(function(){
    var val = $(this).attr("data-value");
    addCart(val,1);
});

function addCart(product_id,quantity){
    var cartCount = $("#cart-count");
    $("#cart-count").text(parseInt(cartCount.text()) + quantity);
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: '/add_cart',
        type: 'POST',
        data: {product_id: product_id, quantity: quantity},
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function(data){
            console.log(data);
        }
    });
}