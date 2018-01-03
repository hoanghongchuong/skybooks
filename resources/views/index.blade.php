<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php 
        $setting = Cache::get('setting'); 
        $product_list = Cache::get('product_list');
    ?>
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name='revisit-after' content='1 days' /> 
    <title><?php if(!empty($title)) echo $title; else echo $setting->title; ?></title>
    <meta name="author" content="{!! $setting->website !!}" />
    <meta name="copyright" content="GCO" />
    <meta name="keywords" content="<?php if(!empty($keyword)) echo $keyword; else echo $setting->keyword; ?>" />
    <meta name="description" content="<?php if(!empty($description)) echo $description; else echo $setting->description; ?>" />
    <meta http-equiv="content-language" content="vi" />
    <meta property="og:title" content="<?php if(!empty($title)) echo $title; else echo $setting->title; ?>" />
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:url" content="{!! $setting->website !!}" />
    <meta property="og:site_name" content="<?php if(!empty($title)) echo $title; else echo $setting->title; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php if(!empty($img_share)) echo $img_share; else echo asset('upload/hinhanh/'.$setting->photo) ?>" />
    <meta property="og:description" content="<?php if(!empty($description)) echo $description; else echo $setting->description; ?>" />

    <meta name="googlebot" content="all, index, follow" />
    <meta name="geo.region" content="VN" />
    <meta name="geo.position" content="10.764338, 106.69208" />
    <meta name="geo.placename" content="Hà Nội" />
    <meta name="Area" content="HoChiMinh, Saigon, Hanoi, Danang, Vietnam" />
    <link rel="shortcut icon" href="{!! asset('upload/hinhanh/'.$setting->favico) !!}" type="image/png" />

   <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('public/css/animate.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset('public/css/meanmenu.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('public/css/owl.carousel.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
    <!-- flexslider.css-->
    <link rel="stylesheet" href="{{asset('public/css/flexslider.css')}}">
    <!-- chosen.min.css-->
    <link rel="stylesheet" href="{{asset('public/css/chosen.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('public/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('public/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <script src="{{asset('public/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <script type="text/javascript">
        function baseUrl(){
            return '<?php echo url('/'); ?>';
        }
        window.token = '{{ csrf_token() }}';
        window.urlAddCart = '{{ route("addProductToCartAjax") }}';
        window.getRate = '{{ route("rating") }}';
   </script>

</head>
<body class="">
        
        @include('templates.layout.header')
        @yield('content')
        @include('templates.layout.footer')
  

    {{ $setting->codechat }}
    {{ $setting->analytics }}
    @yield('script')
    <!-- all js here -->
        
        <!-- bootstrap js -->
        <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
        <!-- meanmenu js -->
        <script src="{{asset('public/js/jquery.meanmenu.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('public/js/wow.min.js')}}"></script>
        <!-- jquery.parallax-1.1.3.js -->
        <script src="{{asset('public/js/jquery.parallax-1.1.3.js')}}"></script>
        <!-- jquery.countdown.min.js -->
        <script src="{{asset('public/js/jquery.countdown.min.js')}}"></script>
        <!-- jquery.flexslider.js -->
        <script src="{{asset('public/js/jquery.flexslider.js')}}"></script>
        <!-- chosen.jquery.min.js -->
        <script src="{{asset('public/js/chosen.jquery.min.js')}}"></script>
        <!-- jquery.counterup.min.js -->
        <script src="{{asset('public/js/jquery.counterup.min.js')}}"></script>
        <!-- waypoints.min.js -->
        <script src="{{asset('public/js/waypoints.min.js')}}"></script>
        <!-- plugins js -->
        <script src="{{asset('public/js/plugins.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('public/js/main.js')}}"></script>
</body>
</html>