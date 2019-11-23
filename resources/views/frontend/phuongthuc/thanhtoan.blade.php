@extends('frontend.layout.app')
@section('title')
Trang chủ
@endsection
@section('content')
@include('frontend.includes.menu')

<div class= container style="margin: 30px 0px; margin-top: 100px; margin-left: 190px">
	<div class="container card" >
		<div class="card-title"><h1>Phương thức thanh toán chuyển khoản</h1></div>
		<br><p><i>*Thanh toán chuyển khoản qua ngân hàng hoặc thẻ ATM</i></p>
		<p><strong>1.Ngân hàng TMCP Á Châu (ACB)</strong></p>	
		<em>Tên tài khoản</em>: Công Ty Cổ Phần Thương Mại Shop Nước Hoa<br>
		<em>Số tài khoản</em>: 236931149<br>
		<em>Chi nhánh</em>: ACB Chi nhánh Hồ Chí Minh<br>

		<p><strong>2.Ngân hàng TMPC Công thương Việt Nam (Viettinbank) </strong></p>	
		<em>Tên tài khoản</em>: Công Ty Cổ Phần Thương Mại Shop Nước Hoa<br>
		<em>Số tài khoản</em>: 115002628559<br>
		<em>Chi nhánh</em>: Viettinbank chi nhánh 10 - TP.Hồ Chí Minh<br>

		<p><strong>3.Ngân hàng Nông nghiệp và Phát triển nông thôn Việt Nam (Agribank) </strong></p>	
		<em>Tên tài khoản</em>: Công Ty Cổ Phần Thương Mại Shop Nước Hoa<br>
		<em>Số tài khoản</em>: 1900201450053<br>
		<em>Chi nhánh</em>: Trung tâm Sài Gòn - Thành Phố Hồ Chí Minh<br>

		<p><strong>4.Ngân hàng TMCP Ngoại Thương Việt Nam (VCB)</strong></p>	
		<em>Tên tài khoản</em>: Công Ty Cổ Phần Thương Mại Shop Nước Hoa<br>
		<em>Số tài khoản</em>: 0371000848135<br>
		<em>Chi nhánh</em>: Vietcombank - Chi nhánh Tân Định - Hồ Chí Minh<br>

		<p><strong>5.Ngân hàng TMCP Ngoại Thương Việt Nam (Sacombank)</strong></p>	
		<em>Tên tài khoản</em>: Công Ty Cổ Phần Thương Mại Shop Nước Hoa<br>
		<em>Số tài khoản</em>: 0045789003567<br>
		<em>Chi nhánh</em>: Sacombank Chi nhánh TP.Cần Thơ<br>

		<p><strong>6.Ngân hàng TMCP Ngoại Thương PVCombank</strong></p>	
		<em>Tên tài khoản</em>: Công Ty Cổ Phần Thương Mại Shop Nước Hoa<br>
		<em>Số tài khoản</em>: 01237890001<br>
		<em>Chi nhánh</em>:Chi nhánh TP.Sóc Trăng<br>


		<div>
					

					<button type="button" class="pull-right btn btn-info"><a  href="{{ route('index') }}" >Quay về trang chủ</a></button
						>
						<button type="button" class="pull-right btn btn-primary" onclick="javascript:history.go(-1)">Quay về trang trước</button>
				</div>

	</div>
		
</div>


@endsection