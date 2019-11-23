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
		<div class="col1111">
		</div>
		<div class="col2222">
		</div>
		<div class="col3333">
		</div>
		
		<button class="btn1111" type="button"></button>
		<button class="btn2222" type="button"></button>
		<button class="btn3333" type="button"></button>
		<button class="btn4444" type="button"></button>
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
		<div class="card-title">
			<h1>CÁM ƠN QUÝ KHÁCH ĐÃ ĐẶT HÀNG TẠI</h1>
			<h1>NUOCHOASHOP.COM</h1>
		</div>
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" style="text-align: center;">
				<div class="alert alert-success" >
		    		<strong>Đơn hàng của quý khách đã gởi thành công!</strong>
		    		<p>Chúng tôi sẽ liên lạc với quý khách trong thời gian sớm nhất.</p>
	  			</div>
	  			<div class="btn btn-primary"><a href="{{ route('index') }}">Về Trang Chủ</a></div>
	  			

			</div>
			<div class="col-md-3">
			</div>
		</div>
		</div>
	</div>
	<div class="tks1"><img  src="<?php echo asset('image/nuochoa_nu/thanks-1.png') ?>" width="260px" alt=""></div>
	<div class="tks2"><img  src="<?php echo asset('image/nuochoa_nu/thanks-2.png') ?>" width="200px" alt=""></div>
	
	
</div>
</div>
@endsection
