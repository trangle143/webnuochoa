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
		<div class="col111">
		</div>
		<div class="col222">
		</div>
		<div class="col333">
		</div>

		<button class="btn111" type="button"></button>
		<button class="btn222" type="button"></button>
		<button class="btn333" type="button"></button>
		<button class="btn444" type="button"></button>
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
		<div class="card-title"><h1>XÁC NHẬN THÔNG TIN</h1></div>
		<div class="card-content">
			<div class="row">
				<div class="col-md-7">
					<h3>CÔNG TY CỔ PHẦN THƯƠNG MẠI THẾ GIỚI NƯỚC HOA</h3>
					<p>Địa chỉ: Phạm Ngũ Lão, Phường An Nghiệp, Quận Ninh Kiều, Thành Phố Cần Thơ</p>
					<p>Điện thoại: 0369 943 439 </p>
					<p>Email: trangle5200@gmail.com</p>
				</div>
				<div class="col-md-5">
					<img alt="Kute Shop" src="{{asset('theme/assets/images/logo3.png')}}">					
				</div>
			</div>
		</div>
		<div id="hoadon">
		<div class="card-content">
			<h4>ĐƠN ĐẶT HÀNG ONLINE</h4>
		</div>
		
		<div class="card-content">
			<div class="row">
				<div class="col-md-6">
					<table class="table table-bordered">
						<tr class="active">
							<th>
								<b>Thông tin người đặt hàng</b>
							</th>
						</tr>
						<tr>
							<td>Họ tên: {{$ten}}</td>
						</tr>
						<tr>
							<td>Giới tính: {{$gioitinh}}</td>
						</tr>
						<tr>
							<td>Số điện thoại: {{$sdt}}</td>
						</tr>
						
					</table>
				</div>
				<div class="col-md-6">
					<table class="table table-bordered">
						<tr class="active">
							<th>
								<b>Địa chỉ nhận hàng</b>
							</th>
						</tr>
						<tr>
							<td >Vị trí: {{$diachi}}</td>
						</tr>
					</table>
				</div>
			</div>
			<table class="table table-bordered">
				<tr class="active">
					<th>
						<b>Thông tin ghi chú</b>
					</th>
				</tr>
				<tr>
					<td>Ghi chú: {{$ghichu}}</td>
				</tr>
				<tr>
					<td>Thanh toán: {{ $visa }}</td>
				</tr>
			</table>

		</div>

		<div class="card-content">
			<table class="table table-bordered">
				<tr class="active">
					<th>Xóa</th>
					<th>Hình</th>
					<th>Sản phẩm</th>
					<th>Đơn giá</th>
					<th>Số lượng</th>
					<th>Khuyến mãi</th>
					<th>Thành tiền</th>
				</tr>
				<?php $tongkm=0 ?>
				@foreach(Cart::getContent() as $sanpham)
				<?php $km = ($sanpham->conditions/100)*$sanpham->price ?>
				<?php $totalsl = $km*$sanpham->quantity ?>
                <?php $tongcong = $sanpham->price - $km ?>
				<?php $tongkm += $km ?>
				<tr>
					<td>
						<form action="{{route('cart.remove')}}" method="POST">
							@csrf
							<input type="hidden" name="id" value="{{$sanpham->id}}">
							<button class="btn-delete" type="submit">Xóa</button>
						</form>
					</td>
					<td><img height="110px" src='./image/nuochoa_nu/{{$sanpham["attributes"]["0"]}}' alt=""></td>
					<td>{{$sanpham->name}}</td>
					<td>{{number_format($sanpham->price)}}</td>
					<td>{{$sanpham->quantity}}</td>
					<td>{{ number_format($sanpham->price * $sanpham->quantity) }} (VND)</td>
					<td>{{ number_format($km) }} (VND)</td>
				</tr>
				@endforeach
				<?php $thanhtoan = Cart::getSubTotal()-$tongkm ?>
				<tr>
					<td colspan="4"></td>
					<td colspan="2">Tổng tiền</td>
					<td>{{ number_format (Cart::getSubTotal() ) }} (VND) </td>
				</tr>
				<tr>
					<td colspan="4"></td>
					<td colspan="2">Tổng khuyến mãi</td>
					<td>{{ number_format ($tongkm)}} (VND)</td>
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
					<td>{{ number_format ($thanhtoan)}} (VND)</td>
				</tr>
			</table>
		</div>
		</div>
		<hr>
		<div class="card-content">
			<div class="row">
					<div class="col-md-9">
					</div>
					<div class="col-md-3">
						<form action="{{route('bill.add')}}" method="POST">
							@csrf
							<input type="hidden" name="id" value="{{$id}}">
							<input type="hidden" name="ghichu" value="{{$ghichu}}">

						<!-- <button class="btn-goback" onclick="javascript:history.go(-1)">Quay về</button> -->
						<!-- <button type="submit" class="btn-goback" >Xác nhận</button> -->
						<button class="btn btn-primary" onclick="print_ds()">In hóa đơn</button>
						<button class="btn-goback" ><a href="{{route('cart.checkout',$thanhtoan)}}">Thanh toan</a></button>
						</form>
					</div>
				</div>
		</div>
		</div>
	</div>
</div>
</div>
@endsection
@section('script')
<script>
	function print_ds()
	{
		var printContent = document.getElementById('hoadon').innerHTML;
		var content = document.body.innerHTML;
		document.body.innerHTML = printContent;
		window.print();
		document.body.innerHTML = content;
	}
</script>
@endsection