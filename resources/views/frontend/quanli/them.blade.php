@extends('frontend.layout.app')
@section('title')
Trang chủ
@endsection
@section('content')
@include('frontend.includes.menu')
<div class="container-fluid" style="margin-top: 100px; margin-left: 130px">
	<form action="{{ url('sanpham/them') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="container card">
			<div class="row">
				<!-- cột trái -->
				<div class="col-md-4">
					<div class="form-group">
				    	<label for="email">Tên sản phẩm</label>
				    	<input type="text" class="form-control" name="ten">
				  </div>
				  <div class="form-group">
				    	<label for="email">Giá sản phẩm</label>
				    	<input type="text" class="form-control" name="price">
				  </div>
				  <!-- <div class="form-group">
				    	<label for="email">Giá khuyến mãi</label>
				    	<input type="text" class="form-control" name="giakhuyenmai">
				  </div> -->
				  <div class="form-group">
				    	<label for="email">Xuất xứ</label>
				    	<input type="text" class="form-control" name="xuatxu">
				  </div>
				  <div class="form-group">
				    	<label for="email">Dung tích</label>
				    	<input type="text" class="form-control" name="dungtich">
				  </div>
				  <div class="form-group">
				    	<label for="email">Số lượng sản phẩm</label>
				    	<input type="text" class="form-control" name="soluong">
				  </div>
				</div>
				<!-- cột phải -->
				<div class="col-md-5">
					<div class="form-group">
					  <label for="comment">Mô tả</label>
					  <textarea class="form-control" rows="8" name="mota"></textarea>
					</div>
					<div class="form-group">
					  <label for="sel1">Select list:</label>
					  <select class="form-control" name="thuonghieu_id" onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;">
					  	@foreach($thuonghieu as $th)
					    <option value="{{ $th->id }}">{{ $th->ten }}</option>
					    @endforeach
					  </select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
					  <label for="comment">Hình sản phẩm</label>
					  <input type="file" name="hinhanh"></input>
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-10"></div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-primary">Thêm</button>
					<button type="submit" class="btn btn-default"><a href="{{ route('sanpham.quanli') }}">Trở về</a></button>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection