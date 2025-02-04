@extends('layout/layout')

@section('title', 'Home')


@section('content')
@foreach($products as $p) <p>
</p>

@endforeach

<section class="product-list pt-4 container">

    <div class="row">
        <div class="col-12 col-xl-3 category-product-wrap translate-r">
            <div class="category-product">
                <div class="close-category-btn"><i class="fa-solid fa-xmark"></i></div>
                <h5 class="fw-bold">Danh Mục</h5>
                <ul class="category-list">
                    <li class="active"><a href="./product.html">Tất cả</a></li>
                    <!-- <li><a href="">Thịnh hành</a></li>
                    <li><a href="">Hàng mới</a></li> -->


                </ul>
            </div>
        </div>
        <div class="col-12 col-xl-9">
            <h5 class="fw-bold">Sản Phẩm</h5>
            <div class="btn-filter">
                <i class="fa-solid fa-filter"></i>
            </div>
            <div class="row">
                @foreach($products as $p)
                <div class="col-xl-3 col-6 col-md-4">
                    <div class="product-item card">
                        <!-- <span class="flag">30% off</span> -->
                        <a href="/p/{{ $p->id }}">
                        <div class="product-item-img">
                        @if($p->image_url)
                            <img src="{{ Vite::asset('public/images/products/' . $p->image_url) }}"
                                class="card-img-top" alt="...">
                            @else
                            <img src="{{ Vite::asset('public/images/products/default.jpg') }}" class="card-img-top"
                                alt="...">
                            @endif
                         
                        </div>
                        </a>
                        <div class="card-body">
                            <h6 class="card-title fw-bold">{{ $p->name }}</h6>

                            <p class="card-text">{{ number_format($p->representative_price, 0, ',', '.') }} ₫</p>

                            <!-- <div class="heart-icon">
                                <i class="fa-solid fa-cart-plus"></i>
                                <i class="fa-solid fa-cart-plus"></i>
                            </div> -->
                        </div>
                    </div>
                </div>
                @endforeach


            </div>

        
            @if ($tp > 1)
            <div class="pagination w-100">
                
                <ul class="pagination-list d-flex">
                    @for($i = 1; $i <= $tp; $i++)
                    <li class="{{ $i==$page?'active':'' }}">
                        <a style="text-decoration:none;" href="?q={{ request()->q }}&page={{ $i }}">
                        {{ $i }}
                        </a>
                    </li>
                    @endfor
                </ul>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection