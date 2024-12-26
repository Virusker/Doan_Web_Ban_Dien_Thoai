@extends('layout/layout')

@section('title', 'Chi tiết sản phẩm')

@section('js')
@vite(['resources/js/product.js'])
@endsection

@section('content')

<div class="product-details">
    <!-- Tiêu đề sản phẩm -->
    <h1>{{ $product->name }}</h1>

    <!-- Hàng đầu tiên -->
    <div class="row">
        <!-- Cột 1: Hình ảnh -->
        <div class="col image">
            <img src="{{ Vite::asset('public/images/products/' . $product->image_url) }}" alt="{{$product->name}}">

            <div class="row thumbnail-gallery">
                <img src="https://tse1.mm.bing.net/th?id=OIP.c9_l8QXtYGdCm6loAewKiQHaHZ&pid=Api&P=0&h=180"
                    alt="Hình ảnh 1" class="thumbnail">
                <img src="https://tse1.mm.bing.net/th?id=OIP.c9_l8QXtYGdCm6loAewKiQHaHZ&pid=Api&P=0&h=180"
                    alt="Hình ảnh 2" class="thumbnail">
                <img src="https://tse1.mm.bing.net/th?id=OIP.c9_l8QXtYGdCm6loAewKiQHaHZ&pid=Api&P=0&h=180"
                    alt="Hình ảnh 3" class="thumbnail">
                <img src="https://tse1.mm.bing.net/th?id=OIP.c9_l8QXtYGdCm6loAewKiQHaHZ&pid=Api&P=0&h=180"
                    alt="Hình ảnh 4" class="thumbnail"> -->
            </div>
        </div>
        <!-- Thêm 4 hình ảnh phía dưới -->


        <!-- Cột 2: Giá và khuyến mãi -->
        <div class="col promo">

            <div class="price">{{ number_format($product->price, 0, ',', '.') }} ₫</div>
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
            <form action="" id="addcart-form">
                <div class="mb-3">
                    <button data-id="{{ $product->id }}" class="btn minus">-</button>
                    <input style="width:50px;" data-id="{{ $product->id }}" name="quantity" type="text" value="1"
                        min="1" class="quantity-{{ $product->id }}">
                    <button data-id="{{ $product->id }}" class="btn plus">+</button>
                </div>

                <select class="form-select" name="pv_id" id="pv-select">
                    @foreach($product_variants as $pv)
                    <option data-price="{{$pv->price}}" value="{{ $pv->id }}">Màu: {{ $pv->color }}, Ram:
                        {{ $pv->ram }}GB, Rom: {{ $pv->storage }}GB</option>
                    @endforeach
                </select>
                @if (auth()->check())
                <button class="btn btn-primary">Thêm vào giỏ hàng</button>
                @else
                <a href="/login" class="btn btn-primary">Đăng nhập để mua hàng</a>
                @endif
            </form>
        </div>

        <!-- Cột 3: Thông số kỹ thuật -->
        <!-- <div class="col specs">
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
        </div> -->


        <!-- Mô tả sản phẩm -->
        <div class="product-description">
            <h3>Mô tả sản phẩm</h3>
            <p>

                <b>Thiết kế kiểu dáng:</b> Sang trọng, tối giản và hiện đại với khung viền kim loại (nhôm hoặc thép
                không gỉ) và mặt lưng kính. <br><br>
                <b>Màn hình:</b> Full màn hình với viền mỏng, thường sử dụng công nghệ Super Retina XDR OLED cho chất
                lượng
                hiển thị sắc nét. <br><br>
                <b>Nút bấm:</b> Không có nút Home vật lý ở các dòng gần đây, thay vào đó là tính năng Face ID hoặc cảm
                biến vân tay trong màn hình. <br><br>
                <b>Cổng kết nối:</b> Sử dụng cổng Lightning đặc trưng, tuy nhiên các dòng mới nhất có thể chuyển sang
                USB-C. <br><br>
                <b>Màu sắc:</b> Thường có nhiều tùy chọn màu như bạc, xám không gian, vàng, hồng, xanh dương hoặc xanh
                lá. <br><br>

                <b>Chip xử lý:</b> Sử dụng chip A-series (như A16 Bionic), với hiệu suất mạnh mẽ, tối ưu hóa tốt cho cả
                hiệu năng và tiết kiệm năng lượng. <br><br>
                <b>Bộ nhớ:</b> Đa dạng tùy chọn dung lượng lưu trữ (64GB, 128GB, 256GB, 512GB, hoặc 1TB).
                RAM: 4GB đến 8GB tùy thuộc vào dòng sản phẩm. <br> <br>

                <b>Chất lượng ảnh:</b>
                Hỗ trợ chụp ảnh sắc nét trong điều kiện thiếu sáng.
                Tính năng chụp chân dung xóa phông, zoom quang học, và quay video 4K, HDR. <br> <br>

                <b>Các tính năng nâng cao:</b> Cinematic Mode, Night Mode, và ProRAW (cho người dùng chuyên nghiệp).
                <br> <br>
                <b>Pin và Sạc Dung lượng pin:</b> Đủ dùng cho một ngày với các tác vụ thông thường (như xem video,
                duyệt web, chụp ảnh). <br> <br>

                <b>Đặc biệt Bảo mật:</b> Face ID hoặc cảm biến vân tay (Touch ID). <br> <br>
                <b>Âm thanh:</b> Hỗ trợ âm thanh vòm Dolby Atmos,
                loa kép stereo cho chất lượng âm thanh sống động. <br> <br>

                <b>Kháng nước/bụi:</b> Tiêu chuẩn IP68 (chịu được nước ở
                độ sâu 1-6 mét trong vòng 30 phút). Kết nối: Wi-Fi 6, 5G, Bluetooth 5.3, và AirDrop. Ecosystem: Tích
                hợp sâu với hệ sinh thái Apple (MacBook, Apple Watch, iPad...).
            </p>
        </div>





    </div>
</div>
@endsection