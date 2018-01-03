@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
?>
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="{{url('')}}">Trang chủ</a></li>
                        <li><a href="{{url('san-pham')}}">Sách</a></li>
                        <li><a href="#" class="active">{{$product_detail->name}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- product-main-area-start -->
<div class="product-main-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <!-- product-main-area-start -->
                <div class="product-main-area">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="{{asset('public/img/thum-2/1.jpg')}}">
                                      <img src="{{asset('public/img/flex/1.jpg')}}" alt="woman" />
                                    </li>
                                    <li data-thumb="{{asset('public/img/thum-2/5.jpg')}}">
                                      <img src="{{asset('public/img/flex/2.jpg')}}" alt="woman" />
                                    </li>
                                    <li data-thumb="{{asset('public/img/thum-2/2.jpg')}}">
                                      <img src="{{asset('public/img/flex/3.jpg')}}" alt="woman" />
                                    </li>
                                    <li data-thumb="{{asset('public/img/thum-2/5.jpg')}}">
                                      <img src="{{asset('public/img/flex/3.jpg')}}" alt="woman" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="product-info-main">
                                <div class="page-title">
                                    <h1>{{$product_detail->name}}</h1>
                                </div>
                                <div class="product-info-stock-sku">
                                    <span>Còn hàng</span>
                                </div>
                                <div class="product-info-price">
                                    <div class="price-final">
                                        <span>{{number_format($product_detail->price)}}</span>
                                    @if($product_detail->price_old > $product_detail->price)
                                        <span class="old-price">{{number_format($product_detail->price_old)}}</span>
                                    @endif
                                    </div>
                                </div>
                                <div class="product-add-form">
                                    <form action="#">
                                        <div class="quality-button">
                                            <input class="qty" type="number" value="1">
                                        </div>
                                        <a href="#">Thêm vào giỏ hàng</a>
                                    </form>
                                </div>
                                <div class="product-social-links">
                                    <div class="product-addto-links-text">
                                        <p>{!! $product_detail->mota !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- product-main-area-end -->
                <!-- product-info-area-start -->
                <div class="product-info-area mt-80">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#Details" data-toggle="tab">Chi tiết</a></li>
                        <li><a href="#Reviews" data-toggle="tab">Đánh giá</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="Details">
                            <div class="valu">
                              {!! $product_detail->content !!}
                            </div>
                        </div>
                        <div class="tab-pane" id="Reviews">
                            <div class="valu valu-2">
                               
                                <div class="fb-comments" data-href="{{url('san-pham/'.$product_detail->alias.'.html')}}" data-width="100%" data-numposts="4"></div>
                            </div>
                        </div>
                    </div>
                            
                </div>
                <!-- product-info-area-end -->
                <!-- mới-book-area-start -->
                <div class="mới-book-area mt-60">
                    <div class="section-title text-center mb-30">
                        <h3>Sản phẩm giảm giá</h3>
                    </div>
                    <div class="tab-active-2">
                        <!-- single-product-start -->
                        @foreach($productSale as $item)
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="{{url('san-pham/'.$item->alias.'.html')}}">
                                    <img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}" class="primary" />

                                    <img src="img/product/2.jpg" alt="book" class="secondary" />

                                </a>
                            </div>
                            <div class="product-details text-center">
                                <h4><a href="{{url('san-pham/'.$item->alias.'.html')}}">{{$item->name}}</a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li>{{number_format($item->price)}}</li>
                                    
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <a href="{{url('san-pham/'.$item->alias.'.html')}}" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li><a href="{{url('san-pham/'.$item->alias.'.html')}}" data-toggle="tooltip" title="Xem chi tiểt"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>  
                        </div>
                        @endforeach
                        <!-- single-product-end -->
                        
                    </div>
                </div>
                <!-- mới-book-area-start -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="shop-left">
                    <div class="left-title mb-20">
                        <h4>Sách liên quan</h4>
                    </div>
                    <div class="random-area mb-30">
                        @foreach($productSameCate->chunk(3) as $productS)
                        <div class="product-active-2">

                            <div class="product-total-2">
                                @foreach($productS as $item)
                                <div class="single-most-product bd mb-18">
                                    <div class="most-product-img">
                                        <a href="{{url('san-pham/'.$item->alias.'.html')}}"><img src="{{asset('upload/product/'.$item->photo)}}" alt="book" /></a>
                                    </div>
                                    <div class="most-product-content">
                                        <h4><a href="{{url('san-pham/'.$item->alias.'.html')}}">{{$item->name}}</a></h4>
                                        <div class="product-price">
                                            <ul>
                                                <li>{{number_format($item->price)}}</li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                             
                        </div>
                        @endforeach
                    </div>
                    <div class="banner-area mb-30">
                        <div class="banner-img-2">
                            <a href="#"><img src="{{asset('public/img/banner/33.jpg')}}" alt="banner" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-main-area-end -->


@endsection
