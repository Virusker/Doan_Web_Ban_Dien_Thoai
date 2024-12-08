@extends('layout/layout')

@section('title', 'Home')



@section('content')
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
                            <a href="/p/{{ $product->id }}">
                                @if($product->primaryImage)
                                <img src="{{ Vite::asset('public/images/products/' . $product->primaryImage->image_url) }}"
                                    class="card-img-top" alt="...">
                                @else
                                <img src="{{ Vite::asset('public/images/products/default.png') }}" class="card-img-top"
                                    alt="...">
                                @endif
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="/p/{{ $product->id }}">
                                <h6 class="card-title fw-bold">{{ $product->name }}</h6>
                            </a>
                            <p class="card-text">{{ $product->getPrice() }}</p>
                            <div data-value="{{ $product->id }}" class="heart-icon">
                                <!-- <i class="fa-solid fa-cart-plus"></i> -->
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
            <button id="new-item-pre-btn" class="hiden_tablet_mobile"><i class="fa-solid fa-chevron-left"></i></button>
            <button id="new-item-next-btn" class="hiden_tablet_mobile"><i
                    class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>
</Section>
<!-- <section id="limited-offer">
      <div class="container-md h-100 d-flex align-items-center">
        <div class="row d-flex align-items-center">
          <div class="col-md-7 col-12 text-center">
            <div class="image-holder">
              <img src="../image/Banner-iPhone.jpg" class="img-fluid" alt="banner">
            </div>
          </div>
          <div class="col-md-5 col-12 text-center text-md-start">
            <h2 class="fw-bold">Giảm giá sốc cho tất cả điện thoại Iphone. Nhanh tay ngay!!!</h2>
            <div id="countdown-clock" class="text-dark d-flex align-items-center my-3">
              <div class="time d-grid pe-3">
                <span class="days fs-1 fw-normal">00</span>
                <small>Days</small>
              </div>
              <span class="fs-1 circle-countdown">:</span>
              <div class="time d-grid pe-3 ps-3">
                <span class="hours fs-1 fw-normal">00</span>
                <small>Hrs</small>
              </div>
              <span class="fs-1 circle-countdown">:</span>
              <div class="time d-grid pe-3 ps-3">
                <span class="minutes fs-1 fw-normal">00</span>
                <small>Min</small>
              </div>
              <span class="fs-1 circle-countdown">:</span>
              <div class="time d-grid ps-3">
                <span class="seconds fs-1 fw-normal">00</span>
                <small>Sec</small>
              </div>
            </div>
            <a href="" class="btn mt-3">Mua ngay</a>
          </div>
        </div>
      </div>
      </div>
    </section> -->
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
                    @if($product->primaryImage)
                    <img src="{{ Vite::asset('public/images/products/' . $product->primaryImage->image_url) }}"
                        class="card-img-top" alt="...">
                    @else
                    <img src="{{ Vite::asset('public/images/products/default.png') }}" class="card-img-top" alt="...">
                    @endif

                </div>
                <div class="card-body">
                    <h6 class="card-title fw-bold">{{ $product->name }}</h6>
                    <p class="card-text">{{ $product->price }}</p>
                    <div class="heart-icon">
                        <i class="fa-solid fa-cart-plus"></i>
                        <i class="fa-solid fa-cart-plus"></i>
                    </div>
                </div>
            </div>


        </div>
        @endforeach

    </div>
</section>
<div id="backTop">
    <i class="fa-solid fa-angles-up"></i>
</div>
@endsection