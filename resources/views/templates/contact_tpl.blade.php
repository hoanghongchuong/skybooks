@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    // $about = Cache::get('about');
    $about = DB::table('about')->select()->first();
?>

 <!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="{{url('')}}">Trang chủ</a></li>
                        <li><a href="{{url('lien-he')}}" class="active">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- googleMap-area-start -->
<div class="map-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="googleMap">{!! $setting->iframemap !!}</div>
            </div>
        </div>
    </div>
</div>
<!-- googleMap-end -->
<!-- contact-area-start -->
<div class="contact-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-info">
                    <h3>Thông tin liên hệ</h3>
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <span>Địa chỉ</span>
                            {{$setting->address}}                          
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <span>Điện thoại</span>
                            <a href="tel:{{$setting->phone}}">{{$setting->phone}} </a>
                        </li>
                        <li>
                            <i class="fa fa-mobile"></i>
                            <span>Email</span>
                            <a href="mailto:{{$setting->email}}" title="">{{$setting->email}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form class="contact-form" method="post" action="{{ route('postContact') }}">
                    {{ csrf_field() }}
                    <h3><i class="fa fa-envelope-o"></i>Để lại tin nhắn</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="name" placeholder="Họ và tên (*)" required="required" />
                        </div>
                        <div class="col-lg-6">
                             <input type="text" name="phone" placeholder="Số điện thoại (*)" required="required" />
                        </div>
                    </div>
                    <div class="single-form-3">
                        
                        <input type="email" name="email" placeholder="Email (*)" required="required" />
                    </div>
                    <div class="single-form-3">
                        <textarea name="content" placeholder="Tin nhắn..." cols="30" rows="10"></textarea>
                        <input type="submit" value="Gửi">
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<!-- contact-area-end -->

@endsection
