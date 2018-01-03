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
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                <div class="about-img">
                    <a href="#"><img src="{{asset('public/img/banner/32.jpg')}}" alt="man" /></a>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <div class="about-content">
                    <h3 class="text-capitalize">Tại sao<span>Là chúng tôi?</span></h3>
                    <p>Mellentesque faucibus dapibus dapibus. Morbi aliquam aliquet neque. Donec placerat dapibus sollicitudin. Morbi arcu nisi, mattis ut ullamcorper in, dapibus ac nunc. Cras bibendum mauris et sapien feugiat. scelerisque accumsan nibh gravida. Quisque aliquet justo elementum lectus ultrices bibendum.</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-check"></i>Amazing wordpress theme</a></li>
                        <li><a href="#"><i class="fa fa-check"></i>HTML & CSS3 build with bootstrap</a></li>
                        <li><a href="#"><i class="fa fa-check"></i>Powerfull admin panel</a></li>
                        <li><a href="#"><i class="fa fa-check"></i>Icon well organized & SEO optimized friendy</a></li>
                        <li><a href="#"><i class="fa fa-check"></i>Iconncredible design</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-main-area-end -->
<!-- our-mission-area-start -->
<div class="our-mission-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-misson">
                    <h3>Những việc chúng tôi làm</span></h3>
                    <p>Huis nostrud exerci tation ullamcorper suscipites lobortis nisl ut aliquip ex ea commodo consequat. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-misson">
                    <h3>Sứ mệnh của chúng tôi</h3>
                    <p>Huis nostrud exerci tation ullamcorper suscipites lobortis nisl ut aliquip ex ea commodo consequat. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-misson">
                    <h3>Tầm nhìn của chúng tôi</span></h3>
                    <p>Puis nostrud exerci tation ullamcorper suscipito lobortis nisl ut aliquip ex ea commodo consequat. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our-mission-area-end -->
<!-- counter-area-start -->
<!-- <div class="counter-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-counter text-center">
                    <h2 class="counter">99</h2>
                    <span>Dự án hoàn thành</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-counter text-center">
                    <h2 class="counter">180</h2>
                    <span>Khách hàng hài lòng</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-counter text-center">
                    <h2 class="counter">500</h2>
                    <span>Cốc cà phê</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
                <div class="single-counter text-center">
                    <h2 class="counter">320</h2>
                    <span>Giải thưởng</span>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- counter-area-end -->
<!-- team-area-start -->
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
