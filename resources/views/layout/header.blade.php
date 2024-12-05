<header class="header">
        <div class=" wide">
            <div class="container navbar-top hiden_tablet_mobile">
                <ul class="navbar-top__list">
                    <li class="has-hover pointer navbar-top__list-item about-item">
                        <!-- <a href="./about.html" class="item-content">
                            <i class="fa-solid fa-address-card"></i> 
                            Về Onie
                        </a> -->
                    </li>
                    <li class="has-hover pointer navbar-top__list-item">
                        <div class="item-content">
                            <i class="navbar__list-icon fa-regular fa-bell"></i>  
                            Thông báo
                        </div>
                        <div class=" navbar__notify apper">
                            <header class="navbar__notify-header">
                                Thông báo mới nhận
                            </header>
                            <ul class="navbar__notify-list">
                                <!-- <li class="navbar__notify-item">
                                    <a href="" class="navbar__notify-link">
                                        <img src="https://pos.nvncdn.com/cba2a3-7534/ps/20240502_6LxRfHUCpE.jpeg" alt="" class="navbar__notify-img">
                                        <div class="navbar__notify-info">
                                            <span class="navbar__notify-name">Móc khóa nhồi bông Funny vibes little</span>
                                            <span class="navbar__notify-description">little boy runny nose tóc Vàng</span>
                                        </div>
                                    </a>
                                </li> -->
                                <!-- <li class="navbar__notify-item">
                                    <a href="" class="navbar__notify-link">
                                        <img src="https://pos.nvncdn.com/cba2a3-7534/ps/20240504_X3aTLqZ5cV.jpeg" alt="" class="navbar__notify-img">
                                        <div class="navbar__notify-info">
                                            <span class="navbar__notify-name">Buộc tóc MJ Hải ly Loopy</span>
                                            <span class="navbar__notify-description">Hải ly Loopy má hồng khối tròn - Mix</span>
                                        </div>
                                    </a>
                                </li> -->
                                <!-- <li class="navbar__notify-item">
                                    <a href="" class="navbar__notify-link">
                                        <img src="https://pos.nvncdn.com/cba2a3-7534/ps/20240428_eJeME1MRCF.jpeg" alt="" class="navbar__notify-img">
                                        <div class="navbar__notify-info">
                                            <span class="navbar__notify-name">Đồ chơi xếp hình Sanrio family Kuromi</span>
                                            <span class="navbar__notify-description">Sanrio family Kuromi hình trứng 3x4x6 - Mix</span>
                                        </div>
                                    </a>
                                </li> -->
                            </ul>
                            <div class="navbar__notify-footer">
                                <a href="" class="navbar__notify-footer-btn">Xem tất cả</a>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-top__list-item">
                        <a href="" class="navbar__list-item-link">
                            <i class="navbar__list-icon fa-regular fa-circle-question"></i>
                            Hỗ trợ
                        </a>
                    </li>
                    <li class="has-hover navbar-top__list-item">
                        <div class="item-content">
                            <i class="navbar__list-icon fa-solid fa-globe"></i>
                            Tiếng việt
                            <i class="navbar__list-icon fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="navbar__language apper">
                            <p class="navbar__language-vn navbar__language--pointer">Tiếng Việt</p>
                            <p class="navbar__language-en navbar__language--pointer">English</p>
                        </div>
                    </li>
                    @if (Auth::check())
                    <li class="has-hover navbar-top__list-item">
                        <div class="item-content">
                            <i class="navbar__list-icon fa-solid fa-globe"></i>
                            {{ Auth::user()->name }}
                            <i class="navbar__list-icon fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="navbar__language apper">
                            <a href="/logout" class="navbar__language-vn navbar__language--pointer">logout</p>
                            <!-- <p class="navbar__language-en navbar__language--pointer">English</p> -->
                        </div>
                    </li>
                    @else
                    <li class="navbar-top__list-item user-btn">            
                        <a href="/login" class="navbar__list-item-link">Đăng nhập</a>    
                    </li>
                    @endif 
                </ul>
            </div>
    
            <!-- header with search -->
            <div class="header-search-wrap">
                <div class="container header-with-search">
                    <div class="header__logo">
                        <i class="fa-solid fa-bars bars-btn"></i>
                        <a href="/">
                            <img src="{{ Vite::asset('public/images/products/default.png') }}" alt="" class="header__logo-img">
                        </a>
                        <i class="fa-regular fa-user user-btn"></i>
                    </div>
                    <div class="header-with-search__section">
                        <div class="header__search">
                                <div class="header__search-input-wrap">
                                    <input type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm">
                                    <div class="header__search-history">
                                        <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                        <!-- <ul class="header__search-history-list"> -->
                                            <!-- <Li class="header__search-history-item">
                                                <a href="">Phụ kiện</a>
                                            </Li>
                                            <Li class="header__search-history-item">
                                                <a href="">Kẻ mắt</a>
                                            </Li>
                                            <Li class="header__search-history-item">
                                                <a href="">Quà sinh nhật</a>
                                            </Li>
                                            <Li class="header__search-history-item">
                                                <a href="">Túi đeo</a>
                                            </Li>
                                            <Li class="header__search-history-item">
                                                <a href="">Tranh để bàn</a>
                                            </Li>
                                            <Li class="header__search-history-item">
                                                <a href="">Đồ chơi xếp hình</a>
                                            </Li>
                                            <Li class="header__search-history-item">
                                                <a href="">Đèn bàn</a>
                                            </Li>
                                        </ul> -->
                                    </div>
                                </div>
                            <button class="header__search-btn">
                                <i class="fa-solid fa-magnifying-glass header__search-btn-icon"></i>
                            </button>
                        </div>
                        <div class="header-product hide-on-mobile-tablet">
                        </div>
                    </div>
                    
                    <label for="check1" class="header__cart has-hover">
                        <a href="/cart">
                        <input type="checkbox" class="cart-input" hidden id="check1">
                        <i class="header__cart-icon fa-solid fa-cart-shopping"></i>
                        <span class="cart-count" id="cart-count">0</span>
                        </a>          
                    </label>
                </div>
            </div>
    
            <nav class="nav-header translate-l container">
                <ul class="nav__list">
                    <div class="close-nav-header"><i class="fa-solid fa-xmark"></i></div>
                    <li class="has-hover nav__list-item hiden_tablet_mobile">
                        <a href="/">Tất cả</a>
                    </li>
                    @foreach($categories as $c)
                    <li class="has-hover nav__list-item hiden_tablet_mobile">
                        <a href="/products/{{ $c->id }}">{{ $c->name }}</a>
                    </li>
                    @endforeach
                    <!--  -->
                    <li class="nav__list-item hiden_tablet_mobile" style="border-right: 1px solid var(--white-color);">
                        <a href="">Phụ kiện</a>    
                    </li>

                    <li class="nav__list-item active-tablet">
                        <a href="./about.html">Trang trí</a>    
                    </li>
                    <li class="nav__list-item active-tablet">
                        <a href="./product.html">Sản Phẩm</a>    
                    </li>
                    <li class="nav__list-item active-tablet">
                        <a href="#">Thông báo</a>    
                    </li>
                    <li class="nav__list-item active-tablet">
                        <a href="#">Ngôn ngữ</a>    
                    </li>
                    <li class="nav__list-item active-tablet">
                        <a href="#">Cài đặt</a>    
                    </li>
                    <li class="nav__list-item active-tablet">
                        <a href="#">Hỗ trợ</a>    
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="tabs-listing">
                        <nav>
                            <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
                                <button class="nav-link text-capitalize active" id="nav-sign-in-tab" data-bs-toggle="tab" data-bs-target="#nav-sign-in" type="button" role="tab" aria-controls="nav-sign-in" aria-selected="true">đăng nhập </button>
                                <button class="nav-link text-capitalize" id="nav-register-tab" data-bs-toggle="tab" data-bs-target="#nav-register" type="button" role="tab" aria-controls="nav-register" aria-selected="false">Đăng ký</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-sign-in" role="tabpanel" aria-labelledby="nav-sign-in-tab">
                                
                                <form action="/login" method="post" id="sign-in-form" class="needs-validation" novalidate>
                                    @csrf
                                    <div class="form-group py-2">
                                        <label class="mb-2" for="sign-in-email">Email:</label>
                                        <input type="email" id="sign-in-email" name="email" placeholder="Nhập email" class="form-control p-2" required>
                                        <div class="invalid-feedback text-start">
                                            Vui lòng nhập email phù hợp.
                                        </div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label class="mb-2" for="sign-in-password">Mật khẩu:</label>
                                        <input type="password" id="sign-in-password" name="password" placeholder="Nhập mật khẩu." class="form-control p-2" required>
                                        <div class="invalid-feedback text-start">
                                            Vui lòng nhập mật khẩu.
                                        </div>
                                    </div>
                                    <label class="py-2">
                                        <input type="checkbox" id="sign-in-remember" required class="d-inline">
                                        <span class="label-body">Lưu tài khoản</span>
                                        <span class="label-body"><a href="#" class="fw-bold">Quên mật khẩu:</a></span>
                                    </label>
                                    <button type="submit" id="sign-in-submit" class="btn btn-login btn-dark w-100 my-3">Đăng nhập</button>
                                    <input type="submit" class="btn btn-login btn-dark w-100 my-3" value="Đăng nhập">
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
                                
                                <form action="/register" method="post" id="register-form" class="needs-validation" novalidate>
                                    @csrf
                                    <div class="form-group py-2">
                                        <label class="mb-2" for="register-email">Emai:</label>
                                        <input type="email" id="register-email" name="username" placeholder="Nhập email." class="form-control p-2" required>
                                        <div class="invalid-feedback text-start">
                                            Vui lòng nhập email phù hợp.
                                        </div>
                                    </div>
                                    <div class="form-group py-2">
                                        <label class="mb-2" for="register-password">Mật khẩu:</label>
                                        <input type="password" id="register-password" name="password" placeholder="Nhập mật khẩu." class="form-control p-2 password-register" required>
                                        <div class="invalid-feedback text-start">
                                            Vui lòng nhập mật khẩu.
                                        </div>
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="mb-2" class="form-label">Nhập lại mật khẩu</label>
                                        <input class="form-control p-2 password_confirmation" id="register-password-confirm" name="password_confirmation" placeholder="Xác thực mật khẩu" type="password" required>
                                        <div class="invalid-feedback text-start invalid-confirm-pw">
                                            Không khớp với mật khẩu vừa nhập.
                                        </div>
                                    </div>
                                    <label class="py-2">
                                        <input type="checkbox" id="register-agree" required class="form-check-input d-inline">
                                        <span class="label-body">Đồng ý với <a href="#" class="fw-bold">chính sách bảo mật</a></span>
                                        <span class="invalid-feedback">
                                            Bạn chưa đồng ý chính sách bảo mật.
                                          </span>
                                    </label>
                                    <button type="submit" id="register-submit" class="btn btn-register btn-dark w-100 my-3">Đăng ký</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->