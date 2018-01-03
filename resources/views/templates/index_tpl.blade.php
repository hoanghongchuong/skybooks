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
                    <h2>{{$productSalling[0]->name}}</h2>
                    <p>{!! $productSalling[0]->mota !!} </p>
                    
                </div>
                <div class="banner-img-2 hidden-xs">
                    <a href="{{ url('san-pham/'.$productSalling[0]->alias.'.html') }}}"><img src="{{asset('upload/product/'.$productSalling[0]->photo)}}" alt="banner" /></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="bestseller-active">
                    @foreach($productSalling->chunk(2) as $chunks)
                    <div class="bestseller-total">
                        @foreach($chunks as $ps)
                        <div class="single-bestseller mb-25">
                            <div class="bestseller-img">
                                <a href="{{url('san-pham/'.$ps->alias.'.html')}}"><img src="{{asset('upload/product/'.$ps->photo)}}" alt="{{$ps->name}}" /></a>
                            </div>
                            <div class="bestseller-text text-center">
                                <h3> <a href="{{url('san-pham/'.$ps->alias.'.html')}}">{{$ps->name}}</a></h3>
                                <div class="price">
                                    <ul>
                                        <li><span class="mới-price">{{number_format($ps->price)}}</span></li>
                                        <li><span class="old-price">{{number_format($ps->price_old)}}</span></li>
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
                                    <a href="javascript:;" data-id="{{$product->id}}" class="btn-addcartx" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
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
                    <a href="#"><img src="{{asset('public/img/banner/8.jpg')}}" alt="banner" /></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="banner-img-2">
                    <a href="#"><img src="{{asset('public/img/banner/9.jpg')}}" alt="banner" /></a>
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
                    @foreach($productSalling->chunk(3) as $chunks)
                    <div class="product-total-2">
                        @foreach($chunks as $item)
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="{{url('san-pham/'.$item->alias.'.html')}}"><img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="{{url('san-pham/'.$item->alias.'.html')}}">{{$item->name}}</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>{{$item->price}}</li>
                                        @if($item->price > $item->price_old)
                                        <li class="old-price">{{$item->price}}</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach 
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="section-title-2 mb-30">
                    <h3>Sách đặc biệt </h3>
                </div>
                <div class="product-active-2">
                    @foreach($productNoiBat->chunk(3) as $chunks)
                    <div class="product-total-2">
                        @foreach($chunks as $item)
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="{{url('san-pham/'.$item->alias.'.html')}}"><img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="{{url('san-pham/'.$item->alias.'.html')}}">{{$item->name}}</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>{{$item->price}}</li>
                                        @if($item->price > $item->price_old)
                                        <li class="old-price">{{$item->price}}</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                     @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
                <div class="section-title-2 mb-30">
                    <h3>Sách giảm giá</h3>
                </div>
                <div class="product-active-2">
                    @foreach($productSale->chunk(3) as $chuk)
                    <div class="product-total-2">
                        @foreach($chuk as $items)
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                 <a href="{{url('san-pham/'.$items->alias.'.html')}}"><img src="{{asset('upload/product/'.$items->photo)}}" alt="{{$items->name}}" /></a>
                            </div>
                            <div class="most-product-content">
                                <h4><a href="{{url('san-pham/'.$items->alias.'.html')}}">{{$items->name}}</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>{{$items->price}}</li>
                                        @if($items->price > $items->price_old)
                                        <li class="old-price">{{$items->price}}</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="">
                    <a href="#" title=""><img src="{{asset('public/img/banner/31.jpg')}}" alt="banner"></a>
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
                @foreach($feedback as $fb)
                <div class="col-lg-12">
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <a href="#"><i class="fa fa-quote-right" style="margin-top: 25px;"></i></a>
                        </div>
                        <div class="testimonial-text">
                            <p>{!! $fb->content !!}</p>
                            <a href="#"><span>{{$fb->name}} </span>/ khách hàng</a>
                        </div>
                    </div>
                </div>
                @endforeach
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
                @foreach($tintuc_moinhat as $news)
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="{{url('tin-tuc/'.$news->alias.'.html')}}"><img src="{{asset('upload/news/'.$news->photo)}}" alt="post" /></a>
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.html">{{$news->name}}</a></h3>
                            <p>{!! $news->mota !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
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
