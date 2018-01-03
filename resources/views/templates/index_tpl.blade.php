@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$cateProducts = Cache::get('cateProducts');
$banner = DB::table('banner_content')->where('position',1)->get();
?>
<div class="banner-area ptb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-banner">
                    <div class="banner-img">
                        <a href="#"><img src="{{asset('public/img/banner/1.png')}}" alt="banner" /></a>
                    </div>
                    <div class="banner-text">
                        <h4>Vận chuyển miễn phí</h4>
                        <p>Tất cả đơn hàng trên 500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-banner">
                    <div class="banner-img">
                        <a href="#"><img src="{{asset('public/img/banner/2.png')}}" alt="banner" /></a>
                    </div>
                    <div class="banner-text">
                        <h4>Cam kết hoàn tiền</h4>
                        <p>100% hoàn trả tiền</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
                <div class="single-banner">
                    <div class="banner-img">
                        <a href="#"><img src="{{asset('public/img/banner/3.png')}}" alt="banner" /></a>
                    </div>
                    <div class="banner-text">
                        <h4>Thanh toán qua thẻ</h4>
                        <p>Lorem ipsum dolor amet consectetur</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-banner">
                    <div class="banner-img">
                        <a href="#"><img src="{{asset('public/img/banner/4.png')}}" alt="banner" /></a>
                    </div>
                    <div class="banner-text">
                        <h4>Hỗ trợ</h4>
                        <p>Điện thoại: <a href="tel:0123456789" title="">+ 0123.4567.89</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('templates.layout.slider')

<div class="product-area mt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-30">
                    <h2>Danh mục sản phẩm</h2>
                    <p>Được lựa chọn từ những quyển sách bán chạy và được yêu thích nhất.<br /> Bạn chắc chắn sẽ tìm được quyển sách phù hợp.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- tab-menu-start -->
                <div class="tab-menu mb-40 text-center">
                    <ul>
                        <li class="active"><a href="#Audiobooks" data-toggle="tab">Sách nói </a></li>
                        <li><a href="#books"  data-toggle="tab">Sách trẻ em</a></li>
                        <li><a href="#bussiness" data-toggle="tab">Sách kinh doanh và tiền </a></li>
                    </ul>
                </div>
                <!-- tab-menu-end -->
            </div>
        </div>
        <!-- tab-area-start -->
        <div class="tab-content">
            <div class="tab-pane active" id="Audiobooks">
                <div class="row">
                    <div class="tab-active">
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html" title="">
                                        <img src="{asset('public/img/product/1.jpg')}}" alt="book" class="primary" />
                                        <img src="{asset('public/img/product/2.jpg')}}" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Joust Duffle Bag</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>60.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{asset('public/img/product/3.jpg')}}" alt="book" class="primary" />
                                        <img src="{asset('public/img/product/4.jpg')}}" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>52.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{asset('public/img/product/5.jpg')}}" alt="book" class="primary" />
                                        <img src="{asset('public/img/product/6.jpg')}}" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Set of Sprite Yoga Straps</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$34.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('public/img/product/7.jpg')}}" alt="book" class="primary" />
                                        <img src="{{asset('public/img/product/8.jpg')}}" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Strive Shoulder Pack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>30.000</li>
                                            <li class="old-price">32.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('public/img/product/9.jpg')}}" alt="book" class="primary" />
                                        <img src="img/product/10.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>35.000</li>
                                            <li class="old-price">40.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="img/product/11.jpg" alt="book" class="primary" />
                                        <img src="img/product/12.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Impulse Duffle</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>74.000</li>
                                            <li class="old-price">78.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="books">
                <div class="row">
                    <div class="tab-active">
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="img/product/5.jpg" alt="book" class="primary" />
                                        <img src="img/product/6.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Set of Sprite Yoga Straps</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>34.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="img/product/7.jpg" alt="book" class="primary" />
                                        <img src="img/product/8.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Strive Shoulder Pack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>30.000</li>
                                            <li class="old-price">32.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="img/product/1.jpg" alt="book" class="primary" />
                                        <img src="img/product/2.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Joust Duffle Bag</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>60.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="img/product/3.jpg" alt="book" class="primary" />
                                        <img src="img/product/4.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Chaz Kangeroo Hoodie</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>52.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="img/product/9.jpg" alt="book" class="primary" />
                                        <img src="img/product/10.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>35.000</li>
                                            <li class="old-price">40.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="img/product/11.jpg" alt="book" class="primary" />
                                        <img src="img/product/12.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Impulse Duffle</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>74.000</li>
                                            <li class="old-price">78.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="bussiness">
                <div class="row">
                    <div class="tab-active">
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="img/product/9.jpg" alt="book" class="primary" />
                                        <img src="img/product/10.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>35.000</li>
                                            <li class="old-price">40.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="img/product/11.jpg" alt="book" class="primary" />
                                        <img src="img/product/12.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Impulse Duffle</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>74.000</li>
                                            <li class="old-price">78.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="img/product/1.jpg" alt="book" class="primary" />
                                        <img src="img/product/2.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Joust Duffle Bag</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>60.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/3.jpg" alt="book" class="primary" />
                                        <img src="img/product/4.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Chaz Kangeroo Hoodie</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>52.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="img/product/5.jpg" alt="book" class="primary" />
                                        <img src="img/product/6.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="#">Set of Sprite Yoga Straps</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>34.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        <div class="col-lg-12">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="img/product/7.jpg" alt="book" class="primary" />
                                        <img src="img/product/8.jpg" alt="book" class="secondary" />
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">Strive Shoulder Pack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>30.000</li>
                                            <li class="old-price">32.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tab-area-end -->
    </div>
</div>
<!-- product-area-end -->
<!-- banner-area-start -->
<div class="banner-area-5 mtb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-img-2">
                    <a href="#"><img src="{{asset('public/img/banner/5.jpg')}}" alt="banner" /></a>
                    <div class="banner-text">
                        <h3>G. Meyer Books & Spiritual Traveler Press</h3>
                        <h2>Giảm trên 30%</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area-end -->

<!-- bestseller-area-start -->
<div class="bestseller-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="bestseller-content">
                    <h1>Sách bán chạy</h1>
                    <h2>J. k. <br />Rowling</h2>
                    <p>Vestibulum porttitor iaculis gravida. Praesent vestibulum varius placerat. Cras tempor congue neque, id aliquam orci finibus sit amet. Fusce at facilisis arcu. Donec aliquet nulla id turpis semper, a bibendum metus vulputate. Suspendisse potenti. </p>
                    <div class="social-author">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="banner-img-2 hidden-xs">
                    <a href="#"><img src="img/banner/6.jpg" alt="banner" /></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="bestseller-active">
                    <div class="bestseller-total">
                        <div class="single-bestseller mb-25">
                            <div class="bestseller-img">
                                <a href="#"><img src="img/product/13.jpg" alt="book" /></a>
                            </div>
                            <div class="bestseller-text text-center">
                                <h3> <a href="product-details.html">Rival Messenger</a></h3>
                                <div class="price">
                                    <ul>
                                        <li><span class="mới-price">40.000</span></li>
                                        <li><span class="old-price">45.000</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-bestseller">
                            <div class="bestseller-img">
                                <a href="#"><img src="img/product/14.jpg" alt="book" /></a>
                            </div>
                            <div class="bestseller-text text-center">
                                <h3> <a href="product-details.html">Impulse Duffle</a></h3>
                                <div class="price">
                                    <ul>
                                        <li><span class="mới-price">70.000</span></li>
                                        <li><span class="old-price">74.000</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bestseller-total">
                        <div class="single-bestseller mb-25">
                            <div class="bestseller-img">
                                <a href="product-details.html"><img src="img/product/15.jpg" alt="book" /></a>
                            </div>
                            <div class="bestseller-text text-center">
                                <h3> <a href="product-details.html">Voyage Yoga Bag</a></h3>
                                <div class="price">
                                    <ul>
                                        <li><span class="mới-price">30.000</span></li>
                                        <li><span class="old-price">32.000</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-bestseller">
                            <div class="bestseller-img">
                                <a href="product-details.html"><img src="img/product/16.jpg" alt="book" /></a>
                            </div>
                            <div class="bestseller-text text-center">
                                <h3> <a href="product-details.html">Compete Track Tote</a></h3>
                                <div class="price">
                                    <ul>
                                        <li><span class="mới-price">32.000</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bestseller-total">
                        <div class="single-bestseller mb-25">
                            <div class="bestseller-img">
                                <a href="product-details.html"><img src="img/product/17.jpg" alt="book" /></a>
                            </div>
                            <div class="bestseller-text text-center">
                                <h3> <a href="product-details.html">Fusion Backpack</a></h3>
                                <div class="price">
                                    <ul>
                                        <li><span class="mới-price">59.000</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-bestseller">
                            <div class="bestseller-img">
                                <a href="product-details.html"><img src="img/product/14.jpg" alt="book" /></a>
                            </div>
                            <div class="bestseller-text text-center">
                                <h3> <a href="product-details.html">Impulse Duffle</a></h3>
                                <div class="price">
                                    <ul>
                                        <li><span class="mới-price">70.000</span></li>
                                        <li><span class="old-price">74.000</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bestseller-area-end -->
<!-- mới-book-area-start -->
<div class="mới-book-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title bt text-center pt-70 mb-40">
                    <h2>Sách Mới</h2>
                </div>
            </div>
            <div class="tab-active">
                @foreach($news_products->chunk(2) as $chunks)
               
                    <div class="tab-total">
                        @foreach($chunks as $product)
                        <div class="product-wrapper mb-40">
                            <span class="sale">mới</span>
                            <div class="product-img">
                                <a href="{{url('san-pham/'.$product->alias.'.html')}}">
                                    <img src="{{ asset('upload/product/'.$product->photo) }}" alt="" class="primary" />
                                    <img src="img/product/2.jpg" alt="book" class="secondary" />
                                </a>
                            </div>
                            <div class="product-details text-center">
                                <h4><a href="{{url('san-pham/'.$product->alias.'.html')}}">{{$product->name}}</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>{{number_format($product->price)}}</li>
                                        @if($product->price_old > $product->price)
                                        <li class="old-price">{{number_format($product->price_old)}}</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li><a href="{{url('san-pham/'.$product->alias.'.html')}}" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>  
                        </div>
                        @endforeach
                        
                    </div>
                   
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- mới-book-area-start -->
<!-- banner-static-area-start -->
<div class="banner-static-area bg ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="banner-img-2">
                    <a href="#"><img src="img/banner/8.jpg" alt="banner" /></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="banner-img-2">
                    <a href="#"><img src="img/banner/9.jpg" alt="banner" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-static-area-end -->
<!-- most-product-area-start -->
<div class="most-product-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="section-title-2 mb-30">
                    <h3>Sách bán chạy</h3>
                </div>
                <div class="product-active-2">
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/20.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Endeavor Daytrip Backpack</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>30.000</li>
                                        <li class="old-price">33.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/21.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Savvy Shoulder Tote</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>30.000</li>
                                        <li class="old-price">35.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/22.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Compete Track Tote</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>35.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/23.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Voyage Yoga Bag</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>30.000</li>
                                        <li class="old-price">33.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/24.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Impulse Duffle</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>70.000</li>
                                        <li class="old-price">74.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/22.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Fusion Backpack</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>59.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="section-title-2 mb-30">
                    <h3>Sách đặc biệt </h3>
                </div>
                <div class="product-active-2">
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/23.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Voyage Yoga Bag</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>30.000</li>
                                        <li class="old-price">33.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="img/product/24.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Impulse Duffle</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>70.000</li>
                                        <li class="old-price">74.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/26.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Driven Backpack1</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>40.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/20.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Endeavor Daytrip Backpack</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>30.000</li>
                                        <li class="old-price">33.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/21.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Savvy Shoulder Tote</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>30.000</li>
                                        <li class="old-price">35.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/22.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Compete Track Tote</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>35.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
                <div class="section-title-2 mb-30">
                    <h3>Sách giảm giá</h3>
                </div>
                <div class="product-active-2">
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/27.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Crown Summit Backpack</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>36.000</li>
                                        <li class="old-price">38.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/28.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Driven Backpack</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>34.000</li>
                                        <li class="old-price">36.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="img/product/29.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Endeavor Daytrip Backpack</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>30.000</li>
                                        <li class="old-price">33.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="img/product/23.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Voyage Yoga Bag</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>30.000</li>
                                        <li class="old-price">33.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/24.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Impulse Duffle</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>70.000</li>
                                        <li class="old-price">74.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="product-details.html"><img src="img/product/22.jpg" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="product-details.html">Fusion Backpack</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>59.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="">
                    <a href="#" title=""><img src="img/banner/31.jpg" alt="banner"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- most-product-area-end -->
<!-- testimonial-area-start -->
<div class="testimonial-area ptb-100 bg">
    <div class="container">
        <div class="row">
            <div class="testimonial-active">
                <div class="col-lg-12">
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <a href="#"><i class="fa fa-quote-right"></i></a>
                        </div>
                        <div class="testimonial-text">
                            <p>I'm so happy with all of the themes, great support, could not wish for more. These people are <br /> geniuses ! Kudo's from the Netherlands !</p>
                            <a href="#"><span>Sandy Wilcke </span>/khách hàng</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <a href="#"><i class="fa fa-quote-right"></i></a>
                        </div>
                        <div class="testimonial-text">
                            <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support ,<br /> advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</p>
                            <a href="#"><span>Sandy Wilcke </span>/khách hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial-area-end -->
<!-- recent-post-area-start -->
<div class="recent-post-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-40">
                    <h2>Tin tức</h2>
                </div>
            </div>
            <div class="post-active text-center">
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="blog-details.html"><img src="img/post/1.jpg" alt="post" /></a>
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.html">The History and the Hype</a></h3>
                            <p>Discover five of our favourite dresses from our mới collection that are destined to be worn and loved immediately.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="blog-details.html"><img src="img/post/2.jpg" alt="post" /></a>
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.html">Answers to your Questions</a></h3>
                            <p>Discover five of our favourite dresses from our mới collection that are destined to be worn and loved immediately.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="blog-details.html"><img src="img/post/3.jpg" alt="post" /></a>
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.html">What is Bootstrap?</a></h3>
                            <p>Discover five of our favourite dresses from our mới collection that are destined to be worn and loved immediately.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="blog-details.html"><img src="img/post/4.jpg" alt="post" /></a>
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.html">Etiam eros massa</a></h3>
                            <p>Discover five of our favourite dresses from our mới collection that are destined to be worn and loved immediately.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- recent-post-area-end -->
<!-- social-group-area-start -->
<div class="social-group-area ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="section-title-3 text-center">
                    <h3>Mạng xã hội</h3>
                </div>
                <div class="link-follow">
                    <ul class="text-center">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li class="hidden-sm"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li class="hidden-sm"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- social-group-area-end -->
@endsection
