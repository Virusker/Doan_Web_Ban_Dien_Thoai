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
                    @foreach($products as $product)
                        <div class="product-item new-item card">
                                <span class="flag">New</span>
                                <div class="product-item-img">
                                    <img src="{{ Vite::asset('resources/image/iphone-12-den-600x600.jpg') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                  <h6 class="card-title fw-bold">{{ $product->name }}</h6>
                                  <p class="card-text">{{ $product->price }}</p>
                                  <div class="heart-icon">
                                    <i class="fa-regular fa-heart"></i>
                                    <i class="fa-solid fa-heart"></i>
                                  </div>
                              </div>
                        </div>
                        @endforeach

                        
                    </div>
                </div>
                <button id="new-item-pre-btn" class="hiden_tablet_mobile"><i class="fa-solid fa-chevron-left"></i></button>
                <button id="new-item-next-btn" class="hiden_tablet_mobile"><i class="fa-solid fa-chevron-right"></i></button>
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
            <div class="col-xl-3 col-6 col-md-4">
                <div class="product-item card">
                                <span class="flag">Trả góp 0%</span>
                            <div class="product-item-img">
                                <img src="../image/oppo-reno10-pro-plus-thumbnew-600x600.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <h6 class="card-title fw-bold">Oppo Reno10 Pro+ 12GB/128GB</h6>
                              <p class="card-text">15.000.000đ</p>
                              <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart"></i>
                              </div>
                            </div>
                        </div>
            </div>
            <div class="col-xl-3 col-6 col-md-4">
                <div class="product-item card">
                                <span class="flag">Trả góp 0%</span>
                            <div class="product-item-img">
                                <img src="../image/ss-s24-ultra-xam-222.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <h6 class="card-title fw-bold">Samsung Galaxy S24 Ultra 12GB 256GB</h6>
                              <p class="card-text">26.000.000đ</p>
                              <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart"></i>
                              </div>
                            </div>
                        </div>
            </div>
            <div class="col-xl-3 col-6 col-md-4">
                <div class="product-item card">
                                <span class="flag">Trả góp 0%</span>
                            <div class="product-item-img">
                                <img src="../image/xiaomi_14t_pro_1_.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <h6 class="card-title fw-bold">Xiaomi 14T Pro 12GB 512GB</h6>
                              <p class="card-text">18.000.000đ</p>
                              <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart"></i>
                              </div>
                            </div>
                        </div>
            </div>
            <div class="col-xl-3 col-6 col-md-4">
                <div class="product-item card">
                                <span class="flag">Trả góp 0%</span>
                            <div class="product-item-img">
                                <img src="../image/tainghe_apple-airpods-pro-2-usb-c_1_.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <h6 class="card-title fw-bold">Tai nghe Bluetooth Apple Airpods Pro 2 2023 Chính hãng Apple Việt Nam </h6>
                              <p class="card-text">5.590.000đ</p>
                              <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart"></i>
                              </div>
                            </div>
                        </div>
            </div>
            <div class="col-xl-3 col-6 col-md-4">
                <div class="product-item card">
                                <span class="flag">New</span>
                            <div class="product-item-img">
                                <img src="../image/cap-type-c-1m-xmobile-dr-t10-thumb-600x600.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <h6 class="card-title fw-bold">Cáp sạc Type C 1m XMoblie DR-T10</h6>
                              <p class="card-text">170.000đ</p>
                              <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart"></i>
                              </div>
                            </div>
                        </div>
            </div>
            <div class="col-xl-3 col-6 col-md-4">
                <div class="product-item card">
                                <span class="flag">New</span>
                            <div class="product-item-img">
                                <img src="../image/adapter-sac-2-cong-usb-type-c-iq3-20w-anker-a2348-thumb-638622777852209142-600x600.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <h6 class="card-title fw-bold">Sạc 2 cổng Anker A2348</h6>
                              <p class="card-text">150.000đ</p>
                              <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart"></i>
                              </div>
                            </div>
                        </div>
            </div>
            <div class="col-xl-3 col-6 col-md-4">
                <div class="product-item card">
                                <span class="flag">New</span>
                            <div class="product-item-img">
                                <img src="../image/Sac_3_cong_Anker_A2674.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <h6 class="card-title fw-bold">Sạc 3 cổng Anker A2674</h6>
                              <p class="card-text">550.000đ</p>
                              <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart"></i>
                              </div>
                            </div>
                        </div>
            </div>
            <div class="col-xl-3 col-6 col-md-4">
                <div class="product-item card">
                                <span class="flag">50% off</span>
                            <div class="product-item-img">
                                <img src="../image/Cap_TypeC_1m_AVA_CS_CL0862.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <h6 class="card-title fw-bold">Cáp sạc Type C 1m AVA+ CS_CL0862</h6>
                              <p class="card-text">135.000đ</p>
                              <div class="heart-icon">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-heart"></i>
                              </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>
    <div id="backTop">
        <i class="fa-solid fa-angles-up"></i>
    </div>
@endsection