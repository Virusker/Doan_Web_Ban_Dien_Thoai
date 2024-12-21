@extends('layout/layout')

@section('title', 'Home')


@section('content')


<Section class="row banners">
    <div class="banner col-md-12 col-12 " id="banner1">
        <div id="demo" class="carousel slide banner-slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators carousel-btn-list">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                    <img src="https://img3.thuthuatphanmem.vn/uploads/2019/10/08/banner-quang-cao-dien-thoai_103211774.jpg"
                        alt="Los Angeles" class="d-block w-100 h-100">
                </div>
                <div class="carousel-item h-100">
                    <img src="http://cdn.tgdd.vn/Files/2014/05/08/545039/Bannertop.jpg" alt="Chicago"
                        class="d-block w-100 h-100">
                </div>
                <div class="carousel-item h-100">
                    <img src="https://cdn.tgdd.vn/2023/06/banner/LTMS-1200-300-1200x300.png" alt="New York"
                        class="d-block w-100 h-100">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="slide-btn carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="slide-btn carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

</Section>


<Section class="new-items">
    <div class="container-md">
        <div class="section-title d-flex justify-content-between align-items-center mb-4 mt-4">
            <h2 class="d-flex align-items-center">Sản phẩm mới</h2>
            <a href="" class="btn">Xem thêm</a>
        </div>
        <div class="wrap-new-items-List">
            <div class="new-items-List">
                <div class="list">
                    @foreach($products_new as $product)
                    <div class="product-item new-item card">
                        <span class="flag">New</span>
                        <div class="product-item-img">
                        <a href="/p/{{ $product->product_id }}">
                            @if($product->image_url)
                            <img src="{{ Vite::asset('public/images/products/' . $product->image_url) }}"
                                class="card-img-top" alt="...">
                            @else
                            <img src="{{ Vite::asset('public/images/products/default.jpg') }}" class="card-img-top"
                                alt="...">
                            @endif
                        </a>
                        </div>
                        <a style="text-decoration:none;" href="/p/{{ $product->id }}">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">{{ $product->name }}</h6>
                            <p class="card-text">{{ number_format($product->representative_price, 0, ',', '.') }} ₫</p>
                            <!-- <div class="heart-icon">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </div> -->
                            </div>
                        </div>
                        </a>
                    
                    @endforeach
                </div>
            </div>
            <button id="new-item-pre-btn" class="hiden_tablet_mobile"><i class="fa-solid fa-chevron-left"></i></button>
            <button id="new-item-next-btn" class="hiden_tablet_mobile"><i
                    class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>
</Section>

<section class="product-list container-md">
    <div class="section-title d-flex justify-content-between align-items-center mb-4 mt-4">
        <h2 class="d-flex align-items-center">Sản phẩm bán chạy</h2>
        <a href="" class="btn">Xem thêm</a>
    </div>

    <div class="row">
        @foreach($products_popular as $product)
        <div class="col-xl-3 col-6 col-md-4">
            <div class="product-item card">
                <span class="flag">HOT</span>
                <div class="product-item-img">
                <a style="text-decoration:none;" href="/p/{{ $product->id }}">
                @if($product->image_url)
                    <img src="{{ Vite::asset('public/images/products/' . $product->image_url) }}"
                        class="card-img-top" alt="...">
                    @else
                    <img src="{{ Vite::asset('public/images/products/default.jpg') }}" class="card-img-top" alt="...">
                    @endif
                </a>
                </div>
                <a style="text-decoration:none;" href="/p/{{ $product->id }}">
                <div class="card-body">
                    <h6 class="card-title fw-bold">{{ $product->name }}</h6>
                    <p class="card-text">{{ number_format($product->price, 0, ',', '.') }} ₫</p>
                    <!-- <div class="heart-icon">
                        <i class="fa-solid fa-cart-plus"></i>
                        <i class="fa-solid fa-cart-plus"></i>
                    </div> -->
                </div>
                </a>
            </div>
        </div>
        @endforeach

    </div>
</section>
<div id="backTop">
    <i class="fa-solid fa-angles-up"></i>
</div>
@endsection