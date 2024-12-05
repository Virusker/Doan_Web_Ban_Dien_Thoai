

$('#pv-select').on('change', function() {
    const selectedOption = $(this).find(':selected');

    const price = selectedOption.data('price');
    
    let text = parseFloat(price).toLocaleString("VI", {style:"currency", currency:"VND"});

    $('.price').text(text);

    console.log(text);

    var category = $('#category').val();

});

$('#addcart-form').on('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(this);
    // var quantity = $('.quantity').val();
    // var pv_id = $('#pv-select').val();

    // console.log(pv_id);
    // console.log(quantity);
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: '/add_cart',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function(data){
            console.log(data);

            var cartCount = $("#cart-count");
            $("#cart-count").text(parseInt(cartCount.text()) + parseInt(data.quantity));
            alert('Add to cart successfully');
        }
    });

});

$('.minus').on('click', function(e) {
    e.preventDefault();
    var input = $(this).parent().find('input');

    var quantity = $('.quantity').val();
    if (quantity == 1) return;

    $('.quantity').val(parseInt(quantity) - 1);

});
$('.plus').on('click', function(e) {
    e.preventDefault();
    var quantity = $('.quantity').val();

    $('.quantity').val(parseInt(quantity) + 1);
});

