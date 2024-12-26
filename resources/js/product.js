

$('#pv-select').on('change', function () {
    const selectedOption = $(this).find(':selected');

    const price = selectedOption.data('price');

    let text = parseFloat(price).toLocaleString("VI", { style: "currency", currency: "VND" });

    $('.price').text(text);

    console.log(text);

    var category = $('#category').val();

});

$('#addcart-form').on('submit', function (event) {
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
        success: function (data) {
            console.log(data);

            var cartCount = $("#cart-count");
            $("#cart-count").text(parseInt(cartCount.text()) + parseInt(data.quantity));
            alert('Add to cart successfully');
        }
    });

});

$('.minus').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var quantity = $('.quantity-' + id).val();
    if (quantity == 1) return;

    $('.quantity-' + id).val(parseInt(quantity) - 1).trigger("input");

});
$('.plus').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');

    var quantity = $('.quantity-' + id).val();
    console.log(id, quantity);

    $('.quantity-' + id).val(parseInt(quantity) + 1).trigger("input");
});
let debounceTimer;

$('.quantity').on("input", function () {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => {
        var id = $(this).data('id');
        var oldQuantity = $(this).data("oq");
        var quantity = $('.quantity-' + id).val();
        var price = $('.product-price-' + id).data('price');

        if (quantity < 1) {
            $('.quantity').val(1);

        }
        // update total price
        $('.total-price-' + id).text(parseFloat(price * quantity).toLocaleString("VI", { style: "currency", currency: "VND" }));
        // update total price data
        $('.total-price-' + id).data('price', price * quantity);

        // update total price all
        updateTotalPrice()

        // update cart count
        $('.cart-count').html(function (i, oldval) {
            console.log(parseInt(oldval) - parseInt(oldQuantity) + parseInt(quantity));
            return parseInt(oldval) - parseInt(oldQuantity) + parseInt(quantity);
        });
        $(this).data("oq", quantity);
        updateCart(id, quantity);


    }, 500);

});

$('.delete-btn').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var quantity = $('.quantity-' + id).val();


    $('.cart-count').html(function (i, oldval) {
        return parseInt(oldval) - parseInt(quantity);
    });
    $('.cart-item-' + id).remove();
    updateTotalPrice();

    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    var formData = new FormData();
    formData.append('pv_id', id);
    $.ajax({
        url: '/remove_cart',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function (data) {
            console.log('remove cart successfully');
            // location.reload();
        }
    });
});

function updateCart(pid, quantity) {
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    var formData = new FormData();
    formData.append('pv_id', pid);
    formData.append('quantity', quantity);

    $.ajax({
        url: '/update_cart',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function (data) {
            console.log('update cart successfully');
        }
    });
}

function updateTotalPrice() {
    var totalPrice = 0;
    $('.total-price').each(function () {
        totalPrice += parseFloat($(this).text().replace(/[.₫]/g, ''));

    });
    $('.total-price-all').text(totalPrice.toLocaleString("VI", { style: "currency", currency: "VND" }));
}

updateTotalPrice();


document.addEventListener('DOMContentLoaded', () => {
    // Chọn ảnh chính
    const mainImage = document.querySelector('.col.image img');

    // Chọn tất cả các ảnh trong gallery
    const thumbnails = document.querySelectorAll('.thumbnail-gallery .thumbnail');

    // Lặp qua từng thumbnail để thêm sự kiện click
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', () => {
            // Thay đổi src và alt của ảnh chính theo thumbnail được click
            mainImage.src = thumbnail.src;
            mainImage.alt = thumbnail.alt;
        });
    });
});
