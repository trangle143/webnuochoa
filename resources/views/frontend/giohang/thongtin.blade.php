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
		<div class="col11">
		</div>
		<div class="col22">
		</div>
		<div class="col33">
		</div>

		<button class="btn11" type="button"></button>
		<button class="btn22" type="button"></button>
		<button class="btn33" type="button"></button>
		<button class="btn44" type="button"></button>
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
		<form action="{{ route('custom.add') }}" method="POST">
		@csrf
		<div class="card-body">
		<div class="card-title"><h1>ĐẶT HÀNG</h1></div>
		<div class="card-content">Mời quý khách điền đầy đủ thông tin bên dưới để chúng tôi giao hàng</div>
		<div class="card-content"><h3>THÔNG TIN ĐẶT HÀNG</h3></div>
		<div class="card-content">
				<input type="radio" name="gioitinh" value="Nam" checked="">Nam
				<input type="radio" name="gioitinh" value="Nữ">Nữ
				<div class="card-content">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						  		<label for="usr">Họ tên:</label>
						  		<input type="text" name="ten" placeholder="Nhập tên" class="form-control" id="usr" required="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						  		<label for="usr">Số điện thoại:</label>
						  		<input type="text" name="sdt" placeholder="Nhập số điện thoại" class="form-control" id="usr" required="">
							</div>
						</div>
					</div>
					<div class="form-group">
					  <label for="comment">Địa chỉ:</label>
					  <textarea class="form-control" name="diachi" placeholder="Nhập địa chỉ" rows="3" id="comment" required=""></textarea>
					</div>
					<div class="form-group">
					  <label for="comment">Ghi chú:</label>
					  <textarea class="form-control" name="ghichu" placeholder="Thêm ghi chú nếu có" rows="5" id="comment"></textarea>
					</div>
				</div>
		</div>
		<div class="card-content"><h3>PHƯƠNG THỨC THANH TOÁN</h3></div>
		<div class="card-content">
				<input type="radio" checked="" name="thanhtoan" value="Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng."> Quý khách thanh toán trực tiếp cho nhân viên giao hàng ngay sau khi nhận hàng.<br>
				<input type="radio" name="thanhtoan" value="Vui lòng chọn tài khoản để chuyển tiền vào ngân hàng hoặc thẻ ATM."> Vui lòng chọn tài khoản để chuyển tiền vào ngân hàng hoặc thẻ ATM. <td><i><a href="{{ url('thanhtoan') }}">(Xem tài khoản ngân hàng của shop nước hoa)</i></a></td>
		</div>
		</div>
		<hr>
		<div class="card-content">
			<div class="row">
					<div class="col-md-9">
					</div>
					<div class="col-md-3">
						<button class="btn-goback" onclick="javascript:history.go(-1)">Quay về</button>
						<button type="submit" class="btn-goback" >Tiếp tục</button>

					</div>
				</div>
		</div>
		</div>
		</form>
	</div>
</div>
</div>
@endsection