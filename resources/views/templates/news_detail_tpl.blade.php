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
                        <li><a href="{{ url('tin-tuc') }}">Tin tức</a></li>
                        <li><a href="{{ url('tin-tuc/'.$news_detail->alias.'.html') }}" class="active">{{$news_detail->name}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- blog-main-area-start -->
<div class="blog-main-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="single-blog mb-50">
                    <div class="blog-left-title">
                        <h3>Danh mục</h3>
                    </div>
                    <div class="blog-side-menu">
                        <ul>
                            @foreach($cateNews as $cate)
                            <?php 
                                $newCate = DB::table('news')->where('cate_id', $cate->id)->get();
                                $numberNews = count($newCate);
                            ?>
                            <li><a href="{{ url('tin-tuc/'.$cate->alias) }}">{{$cate->name}} ({{$numberNews}})</a></li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <div class="single-blog mb-50">
                    <div class="blog-left-title">
                        <h3>Tin tức đọc nhiều</h3>
                    </div>
                    <div class="blog-side-menu">
                        <ul>
                            @foreach($tintuc_noibat as $tt)
                            <li><a href="{{url('tin-tuc/'.$tt->alias.'.html')}}" title="{{$tt->name}}">{{$tt->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="blog-main-wrapper">
                    <div class="author-destils mb-30">
                        <div class="author-left">
                            
                            <div class="author-description">
                                <p>Đăng bởi: 
                                    <a href="#">Admin</a>
                                </p>
                                <span>{{date('d/m/Y', strtotime($news_detail->created_at))}}</span>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="single-blog-content">
                        <div class="single-blog-title">
                            <h1><a href="blog-details.html">{{$news_detail->name}}</a></h1>
                        </div>
                        <div class="blog-single-content">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
                            <blockquote class="blockstyle">claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim. laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
                            <p>dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim. laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
                        </div>
                    </div>
                    <div class="comment-reply-wrap mt-50">
                        <img src="img/cm.jpg" title="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog-main-area-end -->
@endsection
