@extends('frontend.layout.app')
@section('title')
Chi tiết sản phẩm
@endsection
@section('content')
@section('style')
<link rel="stylesheet" href="{{ asset('css/image.css') }}">
@endsection
@include('frontend.includes.menu')
<div class="container-fluid" style="margin: 30px 0px; margin-top: 100px; margin-left: 60px">
		<div class="container card">
			<div class="row">            	

            	<div class="col-md-4">
					<div class="form-group">
				    	<strong>Tên thương hiệu:</strong>
				    	<p>{{ $sanpham->thuonghieu->ten }}</p>
				  	</div>
				  	<div class="form-group">
				  		<strong>Tên sản phẩm:</strong>
				  		<p>{{ $sanpham->ten }}</p>
				  	</div>
				  		<div class="form-group">
				  		<strong>Giới tính:</strong>
 						<p>{{ $sanpham->thuonghieu->loaisanpham->ten }}</p>
				  	</div>
				  		<div class="form-group">
				  		<strong>Xuất xứ:</strong>
					 	<p>{{ $sanpham->xuatxu }}</p>
				  	</div>
				  	<div class="form-group">
				  		<strong>Dung tích:</strong>
					 	<p>{{ $sanpham->dungtich }}</p>
				  	</div>
				  	<div class="form-group">
				  		<strong>Số lượng:</strong>
					 	<p>{{ $sanpham->soluong }}</p>
				  	</div>
				  		<div class="form-group">
				  		<strong>Mô tả:</strong>
 						<p>{{ $sanpham->mota }}</p>
				  	</div>

				</div>

				<div class="col-md-8">
			<!--  hinh`  -->

					<div class="container">
						@if($sanpham->hinh->count() < 1)
							<div class="mySlides">
								<img src="<?php echo asset("image/nuochoa_nu/$sanpham->hinhanh") ?>" style="width:28.4%">
							</div>
						@else
							@foreach($sanpham->hinh as $hinh)
							<div class="mySlides">
								<img src="<?php echo asset("image/nuochoa/$hinh->hinhanh") ?>" style="width:28.4%">
							</div>
							@endforeach
						@endif
						<div class="row" style="margin-left: 0px; padding-left: 0px">
							@foreach($sanpham->hinh as $hinh)
						    <div class="column">
						      <img class="demo cursor" src="<?php echo asset("image/nuochoa/$hinh->hinhanh") ?>" style="width:100%" onclick="currentSlide(<?php echo $hinh->id ?>)" alt="The Woods">
						    </div>
							@endforeach
						</div>

					</div>
			<!--  end hinh` -->
					<label for="email">Giá sản phẩm</label>
		    		<br><input type="text" class="form-control" name="giakhuyenmai" value="{{ number_format($sanpham->price)}} (VND)"></br>
		    		<form method="POST" action="{{route('cart.add')}}">
	                        @csrf
	                        <input name="id" type="hidden" value="{{$sanpham->id}}">
	                        <button type="button" class="btn btn-info"><a href="{{ route('index') }}">Trở về</a></button>
	                        <button type="submit" class="btn btn-default"><a title="Add to Cart">Thêm vào giỏ hàng</a></button>
	                    
					</form>
				</div>



			</div>
			<hr>
			<div class="content">
				
				@if(isset(Auth::user()->name))
				<form action="{{ route('binhluan') }}"  method="POST">
					@csrf
					<div class="form-group">
					  <label for="comment">Bình Luận:</label>
					  <input type="hidden" name="id" value="{{ $sanpham->id }}">
					  <textarea class="form-control" name="noidung" rows="5" id="comment"></textarea>
					</div>
					<div>
					<button type="submit" class="btn btn-info pull-right">Gửi</button>
					</div>
				</form>
				@else
				<button type="button" class="btn btn-info"><a href="{{ route('login') }}">Đăng nhập để bình luận</a>
				@endif
			</div>
			<hr>
			<div class="content">
				@foreach($binhluan as $bl)
				<div class="media">
				    <div class="media-left">
				      <img src="{{ asset('image/nuochoa_nu/anhdaidien.png') }}" class="media-object" style="width:60px">
				    </div>
					
				    <div class="media-body">
				      <h4 class="media-heading">{{ $bl->users->name }} <i>{{ $bl->created_at }}</i></h4>
				      <p>{{ $bl->noidung }}</p>
				    </div>
			  	</div>
			  	<hr>
			  	@endforeach
			</div>
            </div>
        </div>
    </div>
</div>  
@endsection
@section('script')
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
@endsection