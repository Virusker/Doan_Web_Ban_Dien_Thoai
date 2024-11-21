@extends('layout/layout')

@section('title', 'Home')

@section('content')

@if(isset($product))
    <p>{{ $product->name }}</p>
@else
    <div id="productNotFound" style="min-height: 50vh; text-align: center; margin: 50px;">
        <h1 style="color: red; margin-bottom: 10px;">Không tìm thấy sản phẩm</h1>
        <a href="{{ route('home') }}" style="text-decoration: underline;">Quay lại trang chủ</a>
    </div>
@endif

<section>
    <div class="chitietSanpham" style="margin-bottom: 100px">
        <h1>Điện thoại</h1>
        <div class="rating"></div>
        <div class="rowdetail group">
            <div class="picture">
                <img src="https://tse4.mm.bing.net/th?id=OIP.0l_P5JQgxOXmCa6lf6CH2gHaOc&pid=Api&P=0&h=180" onclick="opencertain()">
            </div>
            <div class="price_sale">
                <div class="area_price">1000k</div>
                <div class="ship" style="display: none;">
                    <img src="img/chitietsanpham/clock-152067_960_720.png">
                    <div>NHẬN HÀNG TRONG 1 GIỜ</div>
                </div>
                <div class="area_promo">
                    <strong>Khuyến mãi</strong>
                    <div class="promo">
                        <img src="img/chitietsanpham/icon-tick.png">
                        <div id="detailPromo"></div>
                    </div>
                </div>
                <div class="policy">
                    <div>
                        <img src="img/chitietsanpham/box.png">
                        <p>Trong hộp có: Sạc, Tai nghe, Sách hướng dẫn, Cây lấy sim, Ốp lưng</p>
                    </div>
                    <div>
                        <img src="img/chitietsanpham/icon-baohanh.png">
                        <p>Bảo hành chính hãng 12 tháng.</p>
                    </div>
                    <div class="last">
                        <img src="img/chitietsanpham/1-1.jpg">
                        <p>1 đổi 1 trong 1 tháng nếu lỗi, đổi sản phẩm tại nhà trong 1 ngày.</p>
                    </div>
                </div>
                <div class="area_order">
                    <a class="buy_now" onclick="themVaoGioHang(maProduct, nameProduct);">
                        <b><i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng</b>
                        <p>Giao trong 1 giờ hoặc nhận tại cửa hàng</p>
                    </a>
                </div>
            </div>
            <div class="info_product">
                <h2>Thông số kỹ thuật</h2>
                <ul class="info">
                    <li>
                        <p>Màn hình</p>
                        <div>LTPS LCD, 6.3', Full HD+</div>
                    </li>
                    <li>
                        <p>Hệ điều hành</p>
                        <div>Android 11</div>
                    </li>
                    <li>
                        <p>Camera</p>
                        <div>64MP + 8MP</div>
                    </li>
                    <li>
                        <p>Dung lượng pin</p>
                        <div>4500 mAh</div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="overlaycertainimg" class="overlaycertainimg">
            <div class="close" onclick="closecertain()">&times;</div>
            <div class="overlaycertainimg-content">
                <img id="bigimg" class="bigimg" src="img/chitietsanpham/oppo-f9-red-2-400x460.png">
                <div class="div_smallimg owl-carousel">
                    <!-- Các ảnh nhỏ -->
                </div>
            </div>
        </div>
    </div>
    <div id="goiYSanPham"></div>
</section>

@endsection
