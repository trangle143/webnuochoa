@extends('frontend.layout.app')
@section('title')
Trang chủ
@endsection
@section('content')
@include('frontend.includes.menu')
<link rel="stylesheet" href="{{ asset('build.css') }}">
<div class="container-fluid bgcolor">
<div class="container">
	<div class="timeline">
		<div class="col1">
		</div>
		<div class="col2">
		</div>
		<div class="col3">
		</div>

		<button class="btn1" type="button"></button>
		<button class="btn2" type="button"></button>
		<button class="btn3" type="button"></button>
		<button class="btn4" type="button"></button>
		<div>
		<h4 class="gh">Giỏ Hàng</h4>
		<h4 class="tt">Thông Tin</h4>
		<h4 class="xn">Xác Nhận</h4>
		<h4 class="tc">Thành Công</h4>
		</div>
		
	</div>
</div>
<div class="container">
	<div class="card">
		<div class="card-body">
		<div class="card-title"><h1>GIỎ HÀNG CỦA BẠN</h1></div>
		<div class="card-content">
			<table class="table table-bordered">
				<tr>
					<th>Xóa</th>
					<th>Hình</th>
					<th>Sản phẩm</th>
					<th>Đơn giá</th>
					<th>Số lượng</th>
					<th>Khuyến mãi</th>
					<th>Thành tiền</th>
				</tr>
				@foreach(Cart::getContent() as $sanpham)
				<tr>
					<td>
						<form action="{{route('cart.remove')}}" method="POST">
							@csrf
							<input type="hidden" name="id" value="{{$sanpham->id}}">
							<button class="btn-delete" type="submit">Xóa</button>
						</form>
					</td>
					<td><img height="170px" src='./image/nuochoa_nu/{{$sanpham["attributes"]["0"]}}' alt=""></td>
					<td>{{$sanpham->ten}}</td>
					<td>{{number_format($sanpham->price)}}</td>
					<td>{{$sanpham->quantity}}</td>
					<td></td>
					<td>{{ number_format($sanpham->price * $sanpham->quantity) }}</td>
				</tr>
				@endforeach
				<tr>
					<td colspan="4"></td>
					<td colspan="2">Tổng tiền</td>
					<td>{{ number_format (Cart::getSubTotal() )}}</td>
				</tr>
				<tr>
					<td colspan="4"></td>
					<td colspan="2">Tổng khuyến mãi</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4" style="text-align: center;">
						<p>(*) Phụ thu 25.000 - 30.000 vnđ phí giao hàng đối với đơn hàng <= 600.000đ.</p>
						<p>Quý khách xem thêm Chính sách giao hàng tại đây <a href="">(chi tiết)</a></p>
					</td>
					<td colspan="2">Phí vận chuyển</td>
					<td>0</td>
				</tr>
				<tr>
					<td colspan="6" style="text-align: right;"><b>Tổng thanh toán</b></td>
					<td>690K	</td>
				</tr>
			</table>
		</div>
		<hr>
		<div class="card-content">
			<div class="row">
					<div class="col-md-9">
						<form action="{{route('cart.clear')}}" method="POST" >
						@csrf
						<div class="trang"><button type="submit">Hủy Đơn Hàng</button></div>
						</form>
					</div>
					<div class="col-md-3">
						<button class="btn-goback" onclick="javascript:history.go(-1)">Quay về</button>
						<button  class="btn-goback" ><a href="thongtin">Tiếp tục</a></button>

					</div>
				</div>
		</div>
		</div>
	</div>
</div>

</div>
@endsection



