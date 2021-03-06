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
            <?php $slogans = DB::table('slogan')->get(); ?>
            @foreach($slogans as $slogan)
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-banner">
                    <div class="banner-img">
                        <a href="#"><img src="{{asset('upload/hinhanh/'.$slogan->photo)}}" alt="banner" /></a>
                    </div>
                    <div class="banner-text">
                        <h4>{{$slogan->name}}</h4>
                        <p>{!!$slogan->content!!}</p>
                    </div>
                </div>
            </div>
            @endforeach
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
                        @foreach($cateProducts as $k => $cate)
                        <li class="@if($k == 0)active @endif"><a href="#tab{{$k}}" data-toggle="tab">{{$cate->name}} </a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- tab-menu-end -->
            </div>
        </div>
        <!-- tab-area-start -->
        <div class="tab-content">
            @foreach($cateProducts as $k => $cate)
            <?php 
                $cateChild = DB::table('product_categories')->where('parent_id', $cate->id)->get();
            ?>
            <div class="tab-pane @if($k == 0)active @endif" id="tab{{$k}}">
                <div class="row">
                    <div class="tab-active">
                        @foreach($cateChild as $item)
                        <?php $ids = array();
                            $ids[] = $item->id;
                            $products = DB::table('products')->whereIn('cate_id', $ids)->get();
                            
                         ?>
                        @foreach($products as $item) 
                        <div class="col-lg-12">
                           
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <span class="sale">mới</span>
                                <div class="product-img">
                                    <a href="product-details.html" title="">
                                        <img src="{{asset('upload/product/'.$item->photo)}}" alt="book" class="primary" />
                                        <!-- <img src="{asset('public/img/product/2.jpg')}}" alt="book" class="secondary" /> -->
                                    </a>
                                </div>
                                
                                <div class="product-details text-center">
                                    <h4><a href="product-details.html">{{$item->name}}</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>{{number_format($item->price)}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="javascript:;" data-id="{{$item->id}}" class="btn-addcartx" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="{{url('san-pham/'.$item->alias.'.html')}}" data-toggle="tooltip" title="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
                            <!-- single-product-end -->
                        </div>
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
             @endforeach
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
                    <?php $banner = DB::table('banner_content')->where('position', 1)->get(); ?>
                    <a href="{{$banner[0]->link}}"><img src="{{asset('upload/banner/'.$banner[0]->image)}}" alt="banner" /></a>
                    <!-- <div class="banner-text">
                        <h3>G. Meyer Books & Spiritual Traveler Press</h3>
                        <h2>Giảm trên 30%</h2>
                    </div> -->
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
                    <a href="{{$banner[1]->link}}"><img src="{{asset('upload/banner/'.$banner[1]->image)}}" alt="banner" /></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="banner-img-2">
                    <a href="{{$banner[2]->link}}"><img src="{{asset('upload/banner/'.$banner[2]->image)}}" alt="banner" /></a>
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
                    <a href="{{$banner[3]->link}}"><img src="{{asset('upload/banner/'.$banner[3]->image)}}" alt="banner" /></a>
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
