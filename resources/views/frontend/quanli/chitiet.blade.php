@extends('frontend.layout.app')
@section('title')
Trang chủ
@endsection
@section('content')
@include('frontend.includes.menu')

<link rel="stylesheet" href="{{ asset('build.css') }}">
<div class="container-fluid bgcolor">
<div class="container" style="margin: 30px 0px; margin-top: 100px; margin-left: 190px">
	<div class="card">
		<div class="card-body">
		<div class="card-title"><h1>Chi tiết đơn hàng của: <i>{{ $donhang->khachhang->ten }}</i></h1></div>
		<div class="card-content">
			<table class="table table-bordered">
				<tr>
					<th>Id</th>
					<th>Tên</th>
					<th>Giới tính</th>
					<th>Địa chỉ</th>
					<th>Sđt</th>
					<th>Ghi chú</th>
					<th>Tình trạng</th>
				</tr>

				
				<tr>
					<td>{{ $donhang->khachhang->id }}</td>
					<td>{{ $donhang->khachhang->ten }}</td>
					<td>{{ $donhang->khachhang->gioitinh}}</td>
					<td>{{ $donhang->khachhang->diachi }}</td>
					<td>{{ $donhang->khachhang->sdt }}</td>
					<td>{{ $donhang->khachhang->ghichu }}</td>
					@if( $donhang->tinhtrang == 1 )
					<td>Mới</td>
					@elseif ( $donhang->tinhtrang == 2 )
					<td>Đang gởi</td>
					@else 
					<td>Hoàn thành</td>
					@endif
				</tr>
				
					
			</table>
			<table class="table table-bordered">
				<tr>
					<th>Sản phẩm</th>
					<th>Thương hiệu</th>
					<th>Hình</th>
					<th>Đơn giá</th>
					<th>Số lượng</th>
					<th>Tổng tiền</th>
				</tr>
				@foreach($sanpham as $sp)
				@if($sp->donhang_id == $donhang->id)
				<tr>
					<td>{{ $sp->sanpham->ten }}</td>
					<td>{{ $sp->sanpham->thuonghieu->ten }}</td>
					<td>{{ $sp->sanpham->hinhanh }}</td>
					<td>{{ $sp->dongia }}</td>
					<td>{{ $sp->quantily }}</td>
					<td>{{number_format( $sp->tongtien )}} (VND)</td>
				</tr>
				@endif
				@endforeach
				<tr>
					<td colspan="5">Thành tiền</td>
					<td>{{ number_format($donhang->tongtien) }} (VND)</td>
				</tr>
			</table>
			<div >
		<button type="button" class="pull-right btn btn-danger"><a  href="{{ route('donhang') }}" >Quay về trang đơn hàng</a></button>
		@if( $donhang->tinhtrang == 1 )
		<button type="button" class="pull-right btn btn-info"><a  href="{{ route('donhang') }}" >Bắt đầu xử lí</a></button>
		@elseif ( $donhang->tinhtrang == 2 )
		<button type="button" class="pull-right btn btn-success"><a  href="{{ route('donhang') }}" >Hoàn thành</a></button>
		@else 
		<td>Đơn Hàng Đã Hoàn thành</td>
		@endif
		
		
	</div>
		</div>
	</div>
	
		
</div>		

@stop
