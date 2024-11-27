@extends('layout/layout')

@section('title', 'Giỏ hàng')

@section('cart')

@section('content')
    <div class="cart">
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>iPhone X 256GB Silver</td>
                    <td class="product-price" data-price="27990000">27.990.000 ₫</td>
                    <td>
                        <button class="btn minus">-</button>
                        <input type="text" value="1" class="quantity" readonly>
                        <button class="btn plus">+</button>
                    </td>
                    <td class="total-price">27.990.000 ₫</td>
                    <td><button class="delete-btn">Xóa</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>iPhone Xr 64GB</td>
                    <td class="product-price" data-price="19990000">19.990.000 ₫</td>
                    <td>
                        <button class="btn minus">-</button>
                        <input type="text" value="1" class="quantity" readonly>
                        <button class="btn plus">+</button>
                    </td>
                    <td class="total-price">19.990.000 ₫</td>
                    <td><button class="delete-btn">Xóa</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>iPhone 7 Plus 32GB</td>
                    <td class="product-price" data-price="16990000">16.990.000 ₫</td>
                    <td>
                        <button class="btn minus">-</button>
                        <input type="text" value="1" class="quantity" readonly>
                        <button class="btn plus">+</button>
                    </td>
                    <td class="total-price">16.990.000 ₫</td>
                    <td><button class="delete-btn">Xóa</button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Huawei Nova 3</td>
                    <td class="product-price" data-price="9990000">9.990.000 ₫</td>
                    <td>
                        <button class="btn minus">-</button>
                        <input type="text" value="1" class="quantity" readonly>
                        <button class="btn plus">+</button>
                    </td>
                    <td class="total-price">9.990.000 ₫</td>
                    <td><button class="delete-btn">Xóa</button></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="total-label">TỔNG TIỀN:</td>
                    <td colspan="2" class="total-amount">74.960.000 ₫</td>
                </tr>
             <tr>
                <td colspan="4"></td>
                <td colspan="2" class="action-buttons">
                    <div class="action-btns-container">
                        <button class="checkout-btn">Thanh Toán</button>
                        <button class="clear-btn">Xóa hết</button>
                    </div>
                </td>
            </tr>
            </tfoot>

        </table>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
        const cartRows = document.querySelectorAll("tbody tr");
        const totalAmount = document.querySelector(".total-amount");

    // Hàm tính lại tổng tiền giỏ hàng
    function updateTotal() {
        let total = 0;
        cartRows.forEach(row => {
            const price = parseInt(row.querySelector(".product-price").getAttribute("data-price"));
            const quantity = parseInt(row.querySelector(".quantity").value);
            const totalPrice = price * quantity;
            row.querySelector(".total-price").textContent = totalPrice.toLocaleString() + " ₫";
            total += totalPrice;
        });
        totalAmount.textContent = total.toLocaleString() + " ₫";
    }

    // Xử lý sự kiện + và -
    cartRows.forEach(row => {
        const minusBtn = row.querySelector(".minus");
        const plusBtn = row.querySelector(".plus");
        const quantityInput = row.querySelector(".quantity");

        minusBtn.addEventListener("click", function() {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
                updateTotal(); // Cập nhật tổng tiền sau khi thay đổi số lượng
            }
        });

        plusBtn.addEventListener("click", function() {
            let quantity = parseInt(quantityInput.value);
            quantityInput.value = quantity + 1;
            updateTotal(); // Cập nhật tổng tiền sau khi thay đổi số lượng
        });
    });

    // Xử lý sự kiện xóa sản phẩm
    cartRows.forEach(row => {
        const deleteBtn = row.querySelector(".delete-btn");
        deleteBtn.addEventListener("click", function() {
            row.remove(); // Xóa sản phẩm khỏi giỏ hàng
            updateTotal(); // Cập nhật tổng tiền sau khi xóa sản phẩm
        });
    });

    // Xử lý sự kiện xóa hết giỏ hàng
    document.querySelector(".clear-btn").addEventListener("click", function() {
        cartRows.forEach(row => row.remove()); // Xóa tất cả các sản phẩm
        updateTotal(); // Cập nhật tổng tiền sau khi xóa hết
    });

    // Khởi tạo tổng tiền
    updateTotal();
});

</script>
@endsection
