<?php
    $setting = Cache::get('setting');
    $menu_top = Cache::get('menu_top');
    $cateProducts = Cache::get('cateProducts');
?>
<!-- header-area-start -->
<header>
    <!-- header-mid-area-start -->
    <div class="header-mid-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                    <div class="header-search">
                        <form action="{{ route('search') }}" method="get">
                            <input type="text" name="txtSearch" placeholder="Tìm kiếm..." />
                            <a href="{{ url('tim-kiem') }}"><i class="fa fa-search" style="margin-top: 12px;"></i></a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="logo-area text-center">
                        <a href="{{url('')}}"><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                    <div class="my-cart">
                        <ul>
                            <li><a href="{{url('gio-hang')}}"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a>
                                <span id='count_cart'>{{Cart::count()}}</span>
                                <!-- <div class="mini-cart-sub">
                                    <div class="cart-product">
                                        <div class="single-cart">
                                            <div class="cart-img">
                                                <a href="product-details.html"><img src="img/product/1.jpg" alt="book" /></a>
                                            </div>
                                            <div class="cart-info">
                                                <h5><a href="product-details.html">Joust Duffle Bag</a></h5>
                                                <p>1 x 60.000</p>
                                            </div>
                                        </div>
                                        <div class="single-cart">
                                            <div class="cart-img">
                                                <a href="product-details.html"><img src="img/product/3.jpg" alt="book" /></a>
                                            </div>
                                            <div class="cart-info">
                                                <h5><a href="product-details.html">Chaz Kangeroo Hoodie</a></h5>
                                                <p>1 x 52.000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-totals">
                                        <h5>Tổng tiền <span>120.000</span></h5>
                                    </div>
                                    <div class="cart-bottom">
                                        <a href="{{url('thanh-toan')}}">Thanh toán</a>
                                    </div>
                                </div> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-mid-area-end -->
    <!-- main-menu-area-start -->
    <div class="main-menu-area hidden-sm hidden-xs" id="header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-area">
                        <nav>
                            <ul>
                                <li class="active"><a href="{{url('')}}">Trang chủ</a></li>
                                <li><a href="#">Sách<i class="fa fa-angle-down"></i></a>
                                    <div class="mega-menu">
                                        @foreach($cateProducts as $cate)
                                        <span>
                                            <a href="#" class="title">{{$cate->name}}</a>
                                            <?php $cateChilds = DB::table('product_categories')->where('parent_id', $cate->id)->get(); ?>
                                            @foreach($cateChilds as $cateChild)
                                            <a href="{{url('san-pham/'.$cateChild->alias)}}">{{$cateChild->name}}</a>
                                            @endforeach
                                        </span>
                                        @endforeach
                                    </div>
                                </li>
                                <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                                <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>
                                <li><a href="{{ url('lien-he') }}">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="safe-area">
                        <a href="{{url('sach-giam-gia')}}">Sách giảm giá</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-menu-area-end -->
    <!-- mobile-menu-area-start -->
    <div class="mobile-menu-area hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul>
                                <li class="active"><a href="{{url('')}}">Trang chủ</a></li>
                                <li><a href="javascript:;">Sách<i class="fa fa-angle-down"></i></a>
                                    <div class="mega-menu">
                                        @foreach($cateProducts as $cate)
                                        <span>
                                            <a href="#" class="title">{{$cate->name}}</a>
                                            <?php $cateChilds = DB::table('product_categories')->where('parent_id', $cate->id)->get(); ?>
                                            @foreach($cateChilds as $cateChild)
                                            <a href="{{url('san-pham/'.$cateChild->alias)}}">{{$cateChild->name}}</a>
                                            @endforeach
                                        </span>
                                        @endforeach
                                    </div>
                                </li>
                                <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                                <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>
                                <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
                                <li><a href="{{url('sach-giam-gia')}}">Sách giảm giá/a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area-end -->
</header>
<!-- header-area-end -->