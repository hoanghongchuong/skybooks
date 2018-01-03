<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $cateProducts = Cache::get('cateProducts');
?>
<footer>
    <!-- footer-mid-start -->
    <div class="footer-mid ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="single-footer">
                        <div class="footer-title mb-20">
                            <h3>Thông tin liên lạc</h3>
                        </div>
                        <div class="footer-contact">
                            <p class="adress">
                                <span>Trụ sở</span>
                                {{$setting->address}}
                            </p>
                            <p><span>Điện thoại:</span> <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a></p>
                            <p><span>Email:</span>  <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="single-footer">
                        <div class="footer-title mb-20">
                            <h3>Link hữu ích</h3>
                        </div>
                        <div class="footer-mid-menu">
                            <ul>
                                <li><a href="{{url('')}}">Trang chủ</a></li>
                                <li><a href="{{url('san-pham')}}">Sách</a></li>
                                <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
                                <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="single-footer">
                        <div class="footer-title mb-20">
                            <h3>Fanpage</h3>
                        </div>
                        <div class="footer-mid-menu">
                            <!-- <img src="img/detail_08.jpg" title="" alt=""> -->
                            <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="200px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-mid-end -->
    <!-- footer-bottom-start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row bt-2">
                <div class="col-lg-12 col-xs-12">
                    <div class="text-center copy-right-area">
                        <p>Designed By <a href="#">Hastech</a> and Developed By <a href="http://gco.vn" title="">GCO</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom-end -->
</footer>
<!-- footer-area-end -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=124844007858325";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>