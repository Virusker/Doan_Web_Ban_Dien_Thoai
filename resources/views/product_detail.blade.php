@extends('layout/layout')

@section('title', 'Chi tiết sản phẩm')

@section('content')

<div class="product-details">
    <!-- Tiêu đề sản phẩm -->
    <h1>{{$product->name}}</h1>

    <!-- Hàng đầu tiên -->
    <div class="row">
        <!-- Cột 1: Hình ảnh -->
        <div class="col image">
            <img src="https://mcdn.coolmate.me/image/September2021/hang-dien-thoai-17.jpg" alt="Realme 2 Pro">
        </div>

        <!-- Cột 2: Giá và khuyến mãi -->
        <div class="col promo">
            <div class="price">1.000.000đ</div>
            <hr>
            <div class="promo-list">
                <h4>KHUYẾN MÃI</h4>
                <ul>
                    <li> Khách hàng sẽ được giảm 5% khi mua tại cửa hàng.</li>
                    
                </ul>
                <hr>
                <p><strong>Trong hộp có:</strong> Sạc, Tai nghe, Sách hướng dẫn, Cây lấy sim, Ốp lưng</p>
                <hr>
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


        <!-- Mô tả sản phẩm -->
        <div class="product-description">
            <h3>Mô tả sản phẩm</h3>
            <p>
                'Chiếc điện thoại thông minh này mang đến trải nghiệm hoàn hảo với thiết kế hiện đại và nhiều tính năng vượt trội. Thích hợp cho cả công việc và giải trí, đây là sự lựa chọn lý tưởng cho mọi người dùng.
            </p>
        </div>


    </div>
</div>
@endsection
