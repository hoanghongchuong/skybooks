@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="{{url('')}}">Trang chủ</a></li>
                        <li><a href="{{url('gioi-thieu')}}" class="active">Giới thiệu</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- about-main-area-start -->
<div class="about-main-area mb-70">
    <div class="container">
        <div class="row">
            {!! $about->content !!}
        </div>
    </div>
</div>

<div class="team-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-title text-center mb-50">
                    <h2>Thành viên</h2>
                </div>
            </div>
            <?php $partners = DB::table('partner')->orderBy('id','desc')->get(); ?>
            @foreach($partners as $item)
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">

                <div class="single-team">
                    <div class="team-img-area">
                        <div class="team-img">
                            <a href="#"><img src="{{asset('upload/banner/'.$item->photo)}}" alt="man" /></a>
                        </div>
                        
                    </div>
                    <div class="team-content text-center">
                        <h3>{{$item->name}}</h3>
                        <!-- <span>Class Master</span> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- team-area-end -->
<!-- skill-area-start -->
<!-- <div class="skill-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="skill-content">
                    <h3 class="text-uppercase">Tại sao chọn<span>Skybook</span>Store</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. sed diam voluptua ater vero. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumys eirmod tempor empor invidunt ut labore et dolore.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="skill-progress">
                    <div class="progress">
                        <div class="skill-title">Chiến lược 79%</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.2s" role="progressbar" style="width: 79%;">
                        </div>
                    </div>  
                    <div class="progress">
                        <div class="skill-title">Marketing 96%</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.3s" role="progressbar" style="width: 96%;">
                        </div>
                    </div>  
                    <div class="progress">
                        <div class="skill-title">Wordpress Theme 65%</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.4s" role="progressbar" style="width: 65%;">
                        </div>
                    </div>  
                    <div class="progress">
                        <div class="skill-title">Thiết kế UI/UX 92%</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.3s" role="progressbar" style="width: 89%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- skill-area-end -->
@endsection
