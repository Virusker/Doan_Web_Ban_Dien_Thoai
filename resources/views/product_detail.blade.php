@extends('layout/layout')

@section('title', 'Chi tiết sản phẩm')

@section('content')
<div class="product-details">
    <!-- Tiêu đề sản phẩm -->
    <h1>Điện thoại Realme 2 Pro 8GB/128GB</h1>

    <!-- Hàng đầu tiên -->
    <div class="row">
        <!-- Cột 1: Hình ảnh -->
        <div class="col image">
            <img src="https://tse4.mm.bing.net/th?id=OIP.0l_P5JQgxOXmCa6lf6CH2gHaOc&pid=Api&P=0&h=180" alt="Realme 2 Pro">
        </div>

        <!-- Cột 2: Giá và khuyến mãi -->
        <div class="col promo">
            <div class="price">6.990.000đ</div>
            <div class="promo-list">
                <h3>Khuyến mãi</h3>
                <ul>
                    <li> Khách hàng được thử máy miễn phí tại cửa hàng.</li>
                    <li> Đổi trả lỗi trong vòng 2 tháng.</li>
                </ul>
                <p><strong>Trong hộp có:</strong> Sạc, Tai nghe, Sách hướng dẫn, Cây lấy sim, Ốp lưng</p>
                <p><strong>Bảo hành:</strong> 12 tháng.</p>
                <p>1 đổi 1 trong 1 tháng nếu lỗi kỹ thuật.</p>
            </div>
            <button class="add-to-cart">Thêm vào giỏ hàng</button>
        </div>

        <!-- Cột 3: Thông số kỹ thuật -->
        <div class="col specs">
            <h3>Thông số kỹ thuật</h3>
            <table>
                <tr>
                    <td>Màn hình</td>
                    <td>IPS LCD, 6.3', Full HD+</td>
                </tr>
                <tr>
                    <td>Hệ điều hành</td>
                    <td>ColorOS 5.2 (Android 8.1)</td>
                </tr>
                <tr>
                    <td>Camera sau</td>
                    <td>16 MP và 2 MP (2 camera)</td>
                </tr>
                <tr>
                    <td>Camera trước</td>
                    <td>16 MP</td>
                </tr>
                <tr>
                    <td>CPU</td>
                    <td>Qualcomm Snapdragon 660</td>
                </tr>
                <tr>
                    <td>RAM</td>
                    <td>8 GB</td>
                </tr>
                <tr>
                    <td>Bộ nhớ trong</td>
                    <td>128 GB</td>
                </tr>
                <tr>
                    <td>Thẻ nhớ</td>
                    <td>MicroSD, hỗ trợ tối đa 256 GB</td>
                </tr>
                <tr>
                    <td>Dung lượng pin</td>
                    <td>3500 mAh</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
