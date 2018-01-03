<?php
	$slider = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
@if(isset($slider))
	<div class="slider-area">
		<div class="slider-active">
			@foreach($slider as $key => $item)
			<div class="single-slider">
				<div class="slider-img">
					<a href="{{$item->link}}"><img src="{{asset('upload/hinhanh/'.$item->photo)}}" alt="slider" /></a>
				</div>
				<div class="slider-content @if($key==1) {{'text-center'}} @elseif($key==0) {{'slider-content-2'}} @endif">
					<h1>{{$item->name}} {{$key}}</h1>
					<h2>{!! $item->mota !!}</h2>
					<!-- <h3>Chỉ 99.000</h3> -->
					<a href="#" title="">Mua ngay</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>

@endif